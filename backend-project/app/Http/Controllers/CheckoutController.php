<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Customer;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipping;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Notifications\VerifyEmail;

session_start();
class CheckoutController extends Controller
{
    //Auth
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return redirect('dashboard');
        } else {
            return redirect('admin')->send();
        }
    }

    public function login_checkout()
    {
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.checkout.login_checkout')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }

    public function add_customer(Request $request)
    {
        //Các thông tin về Email Admin
        $to_name = "Hieu Le";
        $to_email = $request->customer_email; //send to this email -- mail ad send to mail customer
        $data = array("name" => $to_email, "body" => 'Bạn vừa tạo thành công 1 tài khoảng trên Website bán hàng của chúng tôi. Chúc bạn một ngày tốt lành'); //body of mail.blade.php

        Mail::send('pages.send_mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('Bạn vừa tạo 1 tài khoảng trên Website bán hàng của chúng tôi !!'); //send this mail with subject
            $message->from($to_email, $to_name); //send from this mail
        });

        $data = $request->validate([
            'customer_name' => 'required',
            'customer_email' => 'required',
            'customer_password' => 'required',
            'customer_phone' => 'required',
        ]);
        //Tạo 1 Customer
        $customer = new Customer();
        $customer->customer_name = $data['customer_name'];
        $customer->customer_email = $data['customer_email'];
        $customer->customer_password =  md5($data['customer_password']);
        $customer->customer_phone = $data['customer_phone'];
        //Thực hiện truy vấn để kiểm tra E-Mail
        $tbl_customer = Customer::where('customer_email', $request->customer_email)->get();
        //Nếu kết quả trả về khác 0 thức là E-Mail đã tồn tại trong Database
        //Xuất ra thông báo Already have an account with this email
        if (count($tbl_customer) != 0) {
            return redirect('/login_checkout')
                ->with('message', 'Already have an account with this email !');
        }
        //Nếu không thì lưu thông tin vào DB và xuất ra thông báo Sign Up successful
        $customer->save();
        return redirect('/login_checkout')->with('message', 'Sign Up successful !');
    }

    public function show_checkout()
    {
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.checkout.show_checkout')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }

    public function save_checkout_customer(Request $request)
    {
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $data = $request->validate([
            'shipping_name' => 'required',
            'shipping_address' => 'required',
            'shipping_email' => 'required',
            'shipping_phone' => 'required',
            'shipping_note' => 'required',
        ]);

        $shipping_id = new Shipping();
        $shipping_id->shipping_name = $data['shipping_name'];
        $shipping_id->shipping_address = $data['shipping_address'];
        $shipping_id->shipping_email =  $data['shipping_email'];
        $shipping_id->shipping_phone = $data['shipping_phone'];
        $shipping_id->shipping_note = $data['shipping_note'];
        $shipping_id->save();
        Session::put('shipping_id', $shipping_id->shipping_id);
        return redirect('/payment');
    }

    public function payment()
    {
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.checkout.payment')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }

    public function logout_checkout()
    {
        //Huỷ các Session
        Session::flush();
        //Truyên câu thông báo xuống View
        return redirect('/login_checkout')->with('message', 'Sign Out successful!');
    }

    public function login_customer(Request $request)
    {
        //Lấy email và password view gửi lên
        $email = $request->email_account;
        $password = md5($request->password_account);
        //Thực hiện truy vấn, so sánh email và password
        $result = Customer::where('customer_email', $email)->where('customer_password', $password)->first();
        //Nếu truy vấn thành công thì lưu 2 Session lại, và trả về trang chủ
        if ($result) {
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            return redirect('/homePage');
        }
        //Nếu truy vấn thất bại thì trả về trang Login và xuất ra câu sai Email hoặc Password
        return redirect('/login_checkout')->with('message', 'Wrong E-Mail or Password !');
    }

    public function order_place(Request $request)
    {
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();
        // Insert payment
        $payment = new Payment();
        $payment->payment_method = $request->payment_option;
        $payment->payment_status = 'Pending...';
        $payment->save();

        // Insert order
        $order_id = new Order();
        $order_id->customer_id = Session::get('customer_id');
        $order_id->shipping_id = Session::get('shipping_id');
        $order_id->payment_id = $payment->payment_id;
        $order_id->order_total = Cart::subtotal();
        $order_id->order_status = 'Pending...';
        $order_id->save();

        // Insert order-detail
        $content = Cart::content();
        foreach ($content as $value_content) {
            $order_d_data = new OrderDetails();
            $order_d_data->order_id = $order_id->order_id;
            $order_d_data->product_id = $value_content->id;
            $order_d_data->product_name = $value_content->name;
            $order_d_data->product_price = $value_content->price;
            $order_d_data->product_sales_quantity = $value_content->qty;
            $order_d_data->save();
        }

        if ($payment->payment_method == 2) {
            echo 'Thanh toan ther atm';
        } else {
            Cart::destroy();
            $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
            $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
            return view('pages.checkout.handcash')->with('category', $cate_product)->with('brand', $brand_product)
                ->with('all_product', $all_product)
                ->with('authors', $authors);
        }
        return redirect('/payment')
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }

    public function manager_order()
    {
        $this->AuthLogin();

        $all_order = Order::addSelect([
            'customer_name' => Customer::select('customer_name')
                ->whereColumn('customer_id', 'tbl_order.customer_id')
                ->orderByDesc('order_id')
        ])->paginate(5);

        $manager_order = view('admin.manager_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manager_order', $manager_order);
    }

    public function view_order($order_id)
    {
        $this->AuthLogin();

        $order = Order::find($order_id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $order_details = OrderDetails::where('order_id', $order_id)->get();

        $manager_order_by_id = view('admin.view_order')
            ->with('order', $order)
            ->with('customer', $customer)
            ->with('shipping', $shipping)
            ->with('order_details', $order_details);

        return view('admin_layout')->with('admin.view_order', $manager_order_by_id);
    }


    // search
    public function search_order(Request $request)
    {
        $keywords = $request->keywords_submit;

        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();

        $search_order = Order::where('customer_id', 'like', '%' . $keywords . '%')->orderBy('order_id', 'desc')->get();
        $search_customer = Customer::where('customer_id', 'like', '%' . $keywords . '%')->get();

        return view('/admin/search_order')->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('search_order', $search_order)
            ->with('search_customer', $search_customer);
    }

    public function search_category(Request $request)
    {
        //Nhận keyword người dùng viết vào
        $keywords = $request->keywords_submit;
        //Thực hiện truy vấn dựa trên keywork
        $search_category = Category::where('category_name', 'like', '%' . $keywords . '%')->orderBy('category_id', 'desc')->get();
        $all_categories = Category::all();
        //Truyền danh sách đã truy vấn về View
        return view('/admin/search_category')
            ->with('search_category', $search_category)
            ->with('all_categories', $all_categories)
            ->with('keyword', $keywords);
    }

    public function search_brand(Request $request)
    {
        //Lấy từ khoá Form gửi lên
        $keywords = $request->keywords_submit;
        //Thực hiện truy vấn
        $search_brand = Brand::where('brand_name', 'like', '%' . $keywords . '%')->orderBy('brand_id', 'desc')->get();
        $all_brands = Brand::all();
        return view('/admin/search_brand')
            ->with('search_brand', $search_brand)
            ->with('all_brands', $all_brands)
            ->with('keyword', $keywords);
    }

    public function delete_order($order_id)
    {
        $this->AuthLogin();
        $order = Order::find($order_id);
        $order_details = OrderDetails::where('order_id', $order_id)->delete();
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::find($order->payment_id);

        $shipping->delete();
        $payment->delete();
        $order->delete();

        return redirect('manager_order')->with('message', 'Order delete successfully ');
    }
    //Update Order Status
    public function update_order($order_id, Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $order = Order::find($order_id);
        if($data['order_status'] != null){
            $order->order_status = $data['order_status'];
        }
        $order->save();
        return redirect('manager_order')->with('message', 'Order update successfully ');
    }
    //Tìm kiểm sản phẩm admin
    public function search_product(Request $request)
    {
        //Lấy keyword
        $keywords = $request->keywords_submit;
        //Lấy danh sách product dựa vào keyword
        $search_product = DB::table('tbl_product')
            ->where('product_name', 'like', '%' . $keywords . '%')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->orderBy('tbl_product.product_id', 'desc')->get();
        $all_product = Product::all();
        return view('/admin/search_product')
            ->with('search_product', $search_product)
            ->with('keywords', $keywords)
            ->with('all_product', $all_product);
    }
}
