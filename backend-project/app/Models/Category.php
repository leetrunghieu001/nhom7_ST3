<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $timestamps = false; // set time to false

    protected $fillable = [
        'category_name', 'category_desc', 'category_status'
    ];

    protected $primaryKey = 'category_id';
    protected $table = 'tbl_category_product';
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
