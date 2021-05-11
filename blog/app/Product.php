<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public $timestamps = false;
    //Khoá ngoại Product - Type
    public function type(){
        return $this->belongsTo('App\Type','typeID','typeID');
    }
    //Khoá ngoại Product - Brand
    public function brand(){
        return $this->belongsTo('App\Brand','brandID','brandID');
    }
    //Khoá ngoại Product - Order_detail
    public function order_detail(){
        return $this->hasMany('App\Order_detail','productID','productID');
    }
    //Khoá ngoại Product - Comment
    public function comment(){
        return $this->hasMany('App\Comment','productID','productID');
    }
}
