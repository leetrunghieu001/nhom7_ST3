<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    //Tạo khoá ngoại Order - Customer
    public function customer(){
        return $this->belongsTo('App\Customer','customerID','customerID');
    }
}
