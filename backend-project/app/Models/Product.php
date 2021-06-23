<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public $timestamps = false; // set time to false

    protected $fillable = [
        'category_id', 'brand_id', 'product_name', 'product_desc', 'product_content',
        'product_price','product_image', 'product_status'
    ];

    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product';

    public function category()
    {
        return $this->belongsTo('App\Models\Product');
    }
    public function brand()
    {
        return $this->belongsTo('App\Models\Brand');
    }
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
    public function orderDetails()
    {
        return $this->belongsTo('App\Models\OrderDetails');
    }
}
