<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

session_start();

class ProductController extends Controller
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

    // Show
    public function add_product()
    {
        $this->AuthLogin();
        $cate_product = Category::orderBy('category_id', 'DESC')->get();
        $brand_product = Brand::orderBy('brand_id', 'DESC')->get();

        return view('admin.add_product')->with('category_product', $cate_product)->with('brand_product', $brand_product);
    }

    // Get all product
    public function all_product()
    {
        $this->AuthLogin();
        //Lấy thông tin 5 sản phẩm trong trang, và nối với 2 bảng còn lại
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->orderBy('tbl_product.product_id', 'desc')->paginate(5);
        $all_products = DB::table('tbl_product')->get();
        $manager_product = view('admin.all_product')->with('all_product', $all_product)->with('all_products', $all_products);
        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    // Add
    public function save_product(Request $request)
    {
        $this->AuthLogin();

        $data = $request->all();
        $product = new Product();
        $product->category_id = $data['product_cate'];
        $product->brand_id = $data['product_brand'];
        $product->product_name = $data['product_name'];
        $product->product_desc = $data['product_desc'];
        $product->product_content = $data['product_content'];
        $product->product_price = $data['product_price'];
        $product->product_status = $data['product_status'];
        $get_image = $request->file('product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //Kiểm tra file
            if (!$this->checkImage($new_image)) {
                $product->product_image = '';
                $product->save();
                return redirect('/add_product')->with('message', 'Add product success, but cannot update the image beause the file is not a image !');
            }
            // $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension(); // -- rand() set cho image link them so de khong bi trung ten
            $get_image->move('public/uploads/product', $new_image);
            $product->product_image = $new_image;
            $product->save();
            return redirect('/add_product')->with('message', 'Add product success !');
        }
        $product->product_image = 'NoImage.jpg';
        $product->save();

        // echo '<pre>';
        // print_r($product->category_id);
        // echo '<pre>';
        //<!--Them anh phai co enctype="multipart/form-data neu ban khong lay duoc file anh-->


        return redirect('/add_product')->with('message', 'Add product success !');
    }

    // Show
    public function unactive_product($product_id)
    {
        $this->AuthLogin();
        $product = Product::find($product_id);
        $product->product_status = 1;
        $product->save();
        return redirect('all_product')->with('message', 'Product not activated successfully ');
    }

    // unshow
    public function active_product($product_id)
    {
        $this->AuthLogin();
        $product = Product::find($product_id);
        $product->product_status = 0;
        $product->save();
        return redirect('all_product')->with('message', 'Product activated successfully ');
    }

    // edit
    public function edit_product($product_id)
    {
        $this->AuthLogin();
        $cate_product = Category::orderBy('category_id', 'DESC')->get();
        $brand_product = Brand::orderBy('brand_id', 'DESC')->get();

        $edit_product = Product::where('product_id', $product_id)->get();

        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product', $cate_product)
            ->with('brand_product', $brand_product);
        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }

    // update
    public function update_product(Request $request, $product_id)
    {
        $this->AuthLogin();
        $data = $request->all();
        $product = Product::find($product_id);
        $product->category_id = $data['product_cate'];
        $product->brand_id = $data['product_brand'];
        $product->product_name = $data['product_name'];
        $product->product_desc = $data['product_desc'];
        $product->product_content = $data['product_content'];
        $product->product_price = $data['product_price'];
        $product->product_status = $data['product_status'];
        $get_image = $request->file('product_image');
        if ($get_image) {
            //Lấy tên ảnh
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            if (!$this->checkImage($new_image)) {
                $product->save();
                return redirect('/all_product')->with('message', 'Add product success,But cannot update the image beacause the file is not a image !');
            }
            // delete image
            if ($product->product_image == "") {
                $get_image->move('public/uploads/product', $new_image);
                $product->product_image = $new_image;
                $product->save();
                return redirect('/all_product')->with('message', 'Add product success !');
            }
            $destinationPath = 'public/uploads/product/' . $product->product_image;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            $get_image->move('public/uploads/product', $new_image);
            $product->product_image = $new_image;
            $product->save();
            return redirect('/all_product')->with('message', 'Add product success !');
        }
        $product->save();
        return redirect('/all_product')->with('message', 'Add product success !');
    }

    // delete
    public function delete_product($product_id)
    {
        $this->AuthLogin();
        $product = Product::find($product_id);
        // delete image
        //Nếu sp không có tên hình hoặc tên hình là hình mặc định thì không cần xoá file
        if ($product->product_image == "" || $product->product_image = "NoImage.jpg") {
            $product->delete();
            return redirect('all_product')->with('message', 'Product delete successfully ');
        }
        //Nếu sp có tên thì xoá file
        $destinationPath = 'public/uploads/product/' . $product->product_image;

        if (file_exists($destinationPath)) {
            unlink($destinationPath);
        }
        $product->delete();
        return redirect('all_product')->with('message', 'Product delete successfully ');
    }

    // End admin page

    public function product_details($product_id)
    {
        //Nhưng thông số cơ bản để chạy Header và Footer
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();
        //Lấy các thông sô của Comment (Chỉ lấy 5 comment để phân trang)
        $comments = DB::table('tbl_comment')
        ->join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_comment.customer_id')
        ->where('tbl_comment.product_id', $product_id)
        ->orderBy('comment_id', 'DESC')
        ->paginate(5);
        //Trong trang Product Detail có hiển thị ra Brand và Category của sản phẩm đó nên phải nối 2 bảng đó
        $details_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand', 'tbl_brand.brand_id', '=', 'tbl_product.brand_id')
            ->where('tbl_product.product_id', $product_id)
            ->get();
        foreach ($details_product as $value) {
            $category_id = $value->category_id;
        }
        $related_product = Product::where('tbl_product.category_id', $category_id)->whereNotIn('tbl_product.product_id', [$product_id])->get();
        return view('pages.product.show_details')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('product_details', $details_product)
            ->with('related_product', $related_product)
            ->with('all_product', $all_product)
            ->with('authors', $authors)
            ->with('comments',$comments);
    }

    //Hàm kiểm tra hình ảnh
    function checkImage($fileName)
    {
        $substr = explode('.', $fileName);
        if (count($substr) == 0 || count($substr) == 1) {
            return false;
        } else if (
            strtolower($substr[count($substr) - 1]) == 'png' ||
            strtolower($substr[count($substr) - 1]) == 'jpg' ||
            strtolower($substr[count($substr) - 1]) == 'gif' ||
            strtolower($substr[count($substr) - 1]) == 'bmp'
        ) {
            return true;
        }
        return false;
    }
}
