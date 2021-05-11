<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    // public $timestamps = false;
    //Tạo khoá ngoại Order_detail - Product
    public function product(){
        return $this->belongsTo('App\Product','productID','productID');
    }
}
