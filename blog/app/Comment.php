<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $timestamps = false;
    //Tạo khoá ngoại Comment - Customer
    public function customer(){
        return $this->belongsTo('App\Customer','customerID','customerID');
    }
    //Tạo khoá ngoại Comment - Product
    public function product(){
        return $this->belongsTo('App\Product','productID','productID');
    }
}
