<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    public $timestamps = false; // set time to false

    protected $fillable = [
        'shipping_node', 'shipping_name', 'shipping_address', 'shipping_phone', 'shipping_email',
    ];

    protected $primaryKey = 'shipping_id';
    protected $table = 'tbl_shipping';
    public function order()
    {
        return $this->hasMany('App\Models\Order');
    }
}
