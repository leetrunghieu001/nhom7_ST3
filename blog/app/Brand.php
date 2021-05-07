<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    //Khoá ngoại Brand - Product
    public function product(){
        return $this->hasMany('App\Product','brandID','brandID');
    }
}
