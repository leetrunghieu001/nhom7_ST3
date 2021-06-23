<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public $timestamps = false; // set time to false

    protected $fillable = [
        'customer_id', 'shipping_id', 'payment_id', 'order_total', 'order_status'
    ];

    protected $primaryKey = 'order_id';
    protected $table = 'tbl_order';

    public function customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }
    public function shipping()
    {
        return $this->belongsTo('App\Models\Shipping');
    }
    public function order()
    {
        return $this->hasOne('App\Models\OrderDetails');
    }

}
