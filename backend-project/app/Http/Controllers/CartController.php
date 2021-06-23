<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

session_start();
class CartController extends Controller
{
    //
    public function save_cart(Request $request)
    {
        $product_id = $request->product_id_hidden;
        $quantity = $request->quantity;
        $product_info = Product::where('product_id', $product_id)->first();

        // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        return redirect('/show_cart');
    }

    public function show_cart()
    {
        $cate_product = Category::where('category_status', '0')->orderBy('category_name', 'asc')->get();
        $brand_product = Brand::where('brand_status', '0')->orderBy('brand_name', 'asc')->get();
        $all_product = Product::where('product_status', '0')->orderByDesc('category_id')->get();
        $authors = DB::table('tbl_author')->get();

        return view('pages.cart.show_cart')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('all_product', $all_product)
            ->with('authors', $authors);
    }
    //Xoá 1 sản phẩm khỏi giỏ hàng
    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return redirect('/show_cart');
    }
    //Update số lượng 1 sản phẩm trong giỏ hàng
    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->quantity;
        Cart::update($rowId, $qty);

        return redirect('/show_cart');
    }
}
