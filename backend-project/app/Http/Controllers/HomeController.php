<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use SebastianBergmann\Environment\Console;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    //Truyền thông tin xuống trang chủ
    public function index()
    {
        //Lấy thông tin các Category
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        //Lấy thông tin các Brand
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        //Lấy thông tin các Product
        $all_product = Product::where('product_status', '0')->orderByDesc('product_star_rating')->get();
        //Lấy thông tin các sản phẩm đang hot
        $hot_products = DB::table('tbl_product')->where('product_status', '0')->orderBy('product_star_rating', 'desc')->limit(8)->get();
        //Lấy thông tin các tác giả
        $authors = DB::table('tbl_author')->get();
        //Truyền các thông tin xuống View
        return view('pages.home')
        ->with('category', $cate_product)
        ->with('brand', $brand_product)
        ->with('all_product', $all_product)
        ->with('hot_products', $hot_products)
        ->with('authors', $authors);
    }

    public function search(Request $request)
    {
        //Lấy từ khoá ra
        $keywords = $request->keywords_submit;
        //Lấy danh sách sản phẩm ra theo từ khoá
        $search_product = Product::where('product_name', 'like', '%'.$keywords.'%')->get();
        //Các thông số khác cần cho Header và Footer
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();

        return view('/pages/product/search')
        ->with('category', $cate_product)
        ->with('brand', $brand_product)
        ->with('search_product', $search_product)
        ->with('all_product', $all_product)
        ->with('authors', $authors);
    }
}
