<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //Khoá ngoại Type - Product
    public function product(){
        return $this->hasMany('App\Product','typeID','typeID');
    }
}
