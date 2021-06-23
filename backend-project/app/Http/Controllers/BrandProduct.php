<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

session_start();

class BrandProduct extends Controller
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
    public function add_brand_product()
    {
        $this->AuthLogin();
        return view('admin.add_brand_product');
    }

    // Get all product
    public function all_brand_product()
    {
        $this->AuthLogin();
        //Lấy 5 Brand trên 1 trang
        $all_brand_product = Brand::orderBy('brand_id', 'DESC')->paginate(5);
        $all_brands = Brand::all();
        $manager_brand_product = view('admin.all_brand_product')
        ->with('all_brand_product', $all_brand_product)
        ->with('all_brands',$all_brands);
        return view('admin_layout')
        ->with('admin.all_brand_product', $manager_brand_product);
    }

    // Add
    public function save_brand_product(Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];
        $get_image = $request->file('brand_product_image');
        if ($get_image) {
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            if (!$this->checkImage($new_image)) {
                return redirect('/add_brand_product')->with('message', 'The file is not a image !');
            }
            // $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension(); // -- rand() set cho image link them so de khong bi trung ten
            $get_image->move('public/uploads/brand', $new_image);
            $brand->brand_image = $new_image;
            $brand->save();
            return redirect('/add_brand_product')->with('message', 'Add product success !');
        }
        $brand->brand_image = 'NoImage.jpg';
        $brand->save();
        return redirect('/add_brand_product')->with('message', 'Add product success !');
    }

    // Show
    public function unactive_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        $brand = Brand::find($brand_product_id);
        $brand->brand_status = 1;
        $brand->save();
        return redirect('all_brand_product')->with('message', 'Product brand not activated successfully ');
    }

    // unshow
    public function active_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        $brand = Brand::find($brand_product_id);
        $brand->brand_status = 0;
        $brand->save();
        return redirect('all_brand_product')->with('message', 'Product brand activated successfully ');
    }

    // edit
    public function edit_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        $edit_brand_product = Brand::where('brand_id', $brand_product_id)->get();
        $manager_brand_product = view('admin.edit_brand_product')->with('edit_brand_product', $edit_brand_product);
        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }

    // update
    public function update_brand_product($brand_product_id, Request $request)
    {
        $this->AuthLogin();
        $data = $request->all();
        $brand = Brand::find($brand_product_id);
        $brand->brand_name = $data['brand_product_name'];
        $brand->brand_desc = $data['brand_product_desc'];
        $get_image = $request->file('brand_product_image');
        if ($get_image) {
            //Lấy tên hình ảnh mới
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . '.' . $get_image->getClientOriginalExtension();
            if(!$this->checkImage($new_image)){
                $brand->save();
                return redirect('/add_brand_product')->with('message', 'Cannot update the image beause the file is not a image !');
            }
            // delete image
            $destinationPath = 'public/uploads/brand/' . $brand->brand_image;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
           //Upload file file và cập nhật ảnh
            $get_image->move('public/uploads/brand', $new_image);
            $brand->brand_image = $new_image;
            $brand->save();
            return redirect('/add_brand_product')->with('message', 'Update brand success !');
        }
        $brand->save();

        return redirect('/add_brand_product')->with('message', 'Update brand success !');
    }

    // delete
    public function delete_brand_product($brand_product_id)
    {
        $this->AuthLogin();
        $brand = Brand::find($brand_product_id);
        $product_by_brand = DB::table('tbl_product')->where('brand_id', $brand_product_id)->get();
        //Nếu hết sản phẩm rùi mới xoá đc
        if (count($product_by_brand) == 0) {
            // delete image
            $destinationPath = 'public/uploads/brand/' . $brand->brand_image;
            if (file_exists($destinationPath)) {
                unlink($destinationPath);
            }
            $brand->delete();
            return redirect('all_brand_product')->with('message', 'Product brand delete successfully ');
        }
        return redirect('all_brand_product')->with('message', 'Cannot delete Brand because this Brand has products');
    }

    /*
    *  End function - Admin page
    */
    public function show_brand_home($brand_id)
    {
        //Lấy các sản phẩm thuộc Brand_id view truyền lên
        $brand_by_id = Product::where('brand_id', $brand_id)->get();
        //Các thông số cần cho Header và Footer
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand = Brand::where('brand_status', 0)->orderBy('brand_name', 'asc')->get();
        $brand_name = Brand::where('tbl_brand.brand_id', $brand_id)->take(1)->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.brand.show_brand')
            ->with('category', $cate_product)
            ->with('brand', $brand)
            ->with('brand_id', $brand_by_id)
            ->with('brand_name', $brand_name)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
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
