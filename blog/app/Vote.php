<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public $timestamps = false;
    //Tạo khoá ngoại Vote - Customer
    public function customer(){
        return $this->belongsTo('App\Customer','customerID','customerID');
    }
}
