<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use EloquentFilter\Filterable;


class Order extends Model
{
    use HasFactory, Filterable;

    public function purchaser()
    {
        return $this->belongsTo(User::class, 'purchaser_id', 'id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

   
}
