<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['total_amount', 'status', 'razorpay_order_id'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
