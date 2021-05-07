<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Home extends Controller
{
    public function index(){
        //Insert dữ liệu
        // $product = new Product();

        // $product->name = 'Name Product 1';
        // $product->price = '25000';

        // $product->save();
        $data = [
            'id' => '1',
            'name' => 'Hiếu'
        ];
        
        return view('login',$data);
    }
}
