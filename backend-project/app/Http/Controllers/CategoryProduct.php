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

class CategoryProduct extends Controller
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
    public function add_category_product()
    {
        $this->AuthLogin();
        return view('admin.add_category_product');
    }

    // Get all Category product
    public function all_category_product()
    {
        $this->AuthLogin();
        //Lấy 5 category trong 1 trang
        $all_category_product = Category::orderBy('category_id', 'DESC')->paginate(5);
        $all_categories = Category::all();
        $manager_category_product = view('admin.all_category_product')
        ->with('all_category_product', $all_category_product)
        ->with('all_categories',$all_categories);
        return view('admin_layout')->with('admin.all_category_product', $manager_category_product);
    }

    // Add
    public function save_category_product(Request $request)
    {
        $this->AuthLogin();
        //Lấy tất cả thông tin View truyền lên
        $data = $request->all();
        //Tạo ra 1 Category mới
        $category = new Category();
        $category->category_name = $data['category_product_name'];
        $category->category_desc = $data['category_product_desc'];
        $category->category_status = $data['category_product_status'];
        //Bắt file mà người dùng chọn
        $get_image = $request->file('category_image');
        //Nếu mà file có tồn tại thì mới tiến hành kiểm tra
        if ($get_image) {
            //Lấy tên file
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //Nếu như không phải là ảnh thì không cho thêm
            if (!$this->checkImage($new_image)) {
                return redirect('/add_category_product')->with('message', 'Cann\'t add Categery beacuse The file is not a image !');
            }
           //Nếu file là ảnh thì thêm category mới vào database
            $get_image->move('public/uploads/category', $new_image);
            $category->category_image = $new_image;
            $category->save();
            return redirect('/add_category_product')->with('message', 'Add category success !');
        }
        //Nếu file không tồn tại thì tự động gán 1 tên ảnh và lưu vào database
        $category->category_image = 'NoImage.jpg';
        $category->save();
        return redirect('/add_category_product')->with('message', 'Add category success !');
    }

    // Show
    public function unactive_category_product($category_product_id)
    {
        $this->AuthLogin();
        $category = Category::find($category_product_id);
        $category->category_status = 1;
        $category->save();
        return redirect('all_category_product')->with('message', 'Product category not activated successfully');
    }

    // unshow
    public function active_category_product($category_product_id)
    {
        $this->AuthLogin();
        $category = Category::find($category_product_id);
        $category->category_status = 0;
        $category->save();
        return redirect('all_category_product')->with('message', 'Product category activated successfully ');
    }

    // edit
    public function edit_category_product($category_product_id)
    {
        $this->AuthLogin();
        $edit_category_product = Category::where('category_id', $category_product_id)->get();
        $manager_category_product = view('admin.edit_category_product')->with('edit_category_product', $edit_category_product);
        return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);
    }

    // update
    public function update_category_product($category_product_id, Request $request)
    {
        $this->AuthLogin();
        //Lấy tất cả thông tin Updatr Website gửi lên
        $data = $request->all();
        //Tìm kiếm Category dựa vào Id gửi lên
        $category = Category::find($category_product_id);
        //Update các thông tin (Nhưng chưa lưu)
        $category->category_name = $data['category_product_name'];
        $category->category_desc = $data['category_product_desc'];
        //Lấy thông tin file
        $get_image = $request->file('category_image');
        //Nếu file có tồn tại
        if ($get_image) {
            //Lấy ten file
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            //Kiểm tra file có phải là ảnh hay không
            //Nếu file không phải là hình thì không update và upload hình
            if (!$this->checkImage($new_image)) {
                $category->save();
                return redirect('all_category_product')->with('message', 'Cann\'t update the image beacause the file is not a image !');
            }
            //Nếu file là hình thì update và upload hình, và xoá hình cũ
            $destinationPath = 'public/uploads/category/' . $category->category_image;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            $get_image->move('public/uploads/category', $new_image);
            $category->category_image = $new_image;
            $category->save();
            return redirect('all_category_product')->with('message', 'Product category update successfully ');
        }
        //Nếu không chọn file thì không update và upload hình
        $category->save();
        return redirect('all_category_product')->with('message', 'Product category update successfully ');
    }

    // delete
    public function delete_category_product($category_product_id)
    {
        $this->AuthLogin();
        //Tìm kiếm Category đựa vào id truyền lên
        $category = Category::find($category_product_id);
        //Thực hiện truy vấn sản phẩm dựa vào category_id = id truyền lên
        $product_by_category = DB::table('tbl_product')->where('category_id', $category_product_id)->get();
        //Nếu hết sản phẩm đó rùi thì mới xoá
        if (count($product_by_category) == 0) {
            // delete image
            $destinationPath = 'public/uploads/category/' . $category->category_image;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            $category->delete();
            return redirect('all_category_product')->with('message', 'Product category delete successfully ');
        }
        return redirect('all_category_product')->with('message', 'Cannot delete Category beacause this category has products');
    }

    /*
    *  End function - Admin page
    */

    public function show_category_home($category_id)
    {
        //Lấy tất cả sản phẩm dựa vào category_id view gửi lên
        $category_by_id = Product::where('category_id', $category_id)->get();
        //Các thông số cần cho Header và Footer
        $brand_product = Brand::where('brand_status', 0)->orderBy('brand_name', 'asc')->get();
        $cate_product = Category::where('category_status', 0)->orderBy('category_name', 'asc')->get();
        $category_name = Category::where('category_id', $category_id)->take(1)->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.category.show_category')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('category_id', $category_by_id)
            ->with('category_name', $category_name)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }

    //Hàm kiểm tra hình ảnh
    function checkImage($fileName)
    {
        //Cắt tên file truyền vào dựa vào dấu '.'
        $substr = explode('.', $fileName);
        //Nếu biến $substr trả ra 0 phần tử tức là file chọn không có tên =>Không phải ảnh
        //Nếu biến $substr trả ra 1 phần tử tức là file chọn không có đuôi file =>Không phải ảnh
        if (count($substr) == 0 || count($substr) == 1) {
            return false;
            //Nếu phần tử cuối cung của biến $substr trùng với các định dạng đuôi hình ảnh=>File là ảnh
        } else if (
            strtolower($substr[count($substr) - 1]) == 'png' ||
            strtolower($substr[count($substr) - 1]) == 'jpg' ||
            strtolower($substr[count($substr) - 1]) == 'gif' ||
            strtolower($substr[count($substr) - 1]) == 'bmp'){
            return true;
        }
        //Nếu không phải thì đó không phải là ảnh
        return false;
    }
}
