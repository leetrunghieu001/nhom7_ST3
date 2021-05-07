<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Type;

class ProductController extends Controller
{

    public function index(){
        $products = Product::all();
        $brand = Brand::all();
        $type = Type::all();
        return view('home.index',['products'=>$products,
                                'brands'=>$brand,
                                'types'=>$type]);
    }
}
