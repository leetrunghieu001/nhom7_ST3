<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;
    //Tạo khoá ngoại Customer - Comment
    public function comment(){
        return $this->hasMany('App\Comment','customerID','customerID');
    }
    //Tạo khoá ngoại Customer - Vote
    public function vote(){
        return $this->hasMany('App\Vote','customerID','customerID');
    }
    //Tạo khoá ngoại Customer - Order
    public function order(){
        return $this->hasMany('App\Order','customerID','customerID');
    }
}
