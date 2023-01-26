<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function  scopeGetPrice(Builder $query)
    {
        $price = Product::where('id', $this->product_id)->first()->price ?? 0;
        $quantity = $this->quantity;

        return $price * $quantity;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function distributor()
    {
        return $this->hasManyThrough(Order::class, User::class, 'id', 'purchaser_id', 'order_id', 'id');
    }




}
