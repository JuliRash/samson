<?php

use App\Models\OrderItem;
use App\Models\User;

function totalDistributorsWithDate($orderDate, $distributorId) {
    if($distributorId == nuLL) {
        return 0;
    }

    return User::where('referred_by', $distributorId)->where('enrolled_date', '<=', $orderDate)->count();
}

function totalDistributors($distributorId) {
    if($distributorId == nuLL) {
        return 0;
    }

    return User::where('referred_by', $distributorId)->count();
}

function totalPrice($orderID)
{
    $orderItems = OrderItem::where('order_id', $orderID)->get();

    $price = 0;

    foreach($orderItems as $order) {
        $price += $order->getPrice();
    }

    return $price;
}

function getSalesTotal($ref)
{
    $orders = OrderItem::join('orders', 'orders.id', 'order_items.order_id')
        ->join('users', 'orders.purchaser_id', 'users.id')
        ->join('products', 'order_items.product_id', 'products.id')
        ->where('users.referred_by', $ref)
        ->sum('products.price');

        return $orders;
}

function getDistributor($id)
{
    return User::where('id', $id)->first();
}

function percentage($distributors)
{
    $ranges = array(30, 21, 11, 5, 0);
    $percentage = array(30, 20, 15, 10, 5);
    for($i = 0; $i < count($ranges); $i++){
        if ($distributors >= $ranges[$i]) {
            return $percentage[$i];
        }
    }
}


