<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    public $timestamps = false; // set time to false

    protected $fillable = [
        'order_id', 'product_id', 'product_name', 'product_price', 'product_sales_quantity'
    ];

    protected $primaryKey = 'order_details_id';
    protected $table = 'tbl_order_details';
    public function order()
    {
        return $this->belongsTo('App\Models\Order');
    }
    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
