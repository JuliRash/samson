<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
    public function orderReport(Request $request)
    {
        $orders = Order::filter($request->all())->with(['purchaser', 'orderItems'])->paginate();

        return view('orders', compact('orders'));
    }

    public function orderItems($id)
    {
        $items = OrderItem::where('order_id', $id)->get();

        return view('order_items', compact('items'));
    }

    public function topDistributors()
    {
        $orders = OrderItem::join('orders', 'orders.id', 'order_items.order_id')
        ->join('users', 'orders.purchaser_id', 'users.id')
        ->select("referred_by", DB::raw('COUNT(users.referred_by) AS occurrences'))
        ->groupBy('referred_by')
        ->orderBy('occurrences', 'DESC')
        ->get();

        $data = [];



        foreach($orders as $order)
        {
            $d = getDistributor($order->referred_by);
            if($d != null) {
                $data[] = ['id' => getDistributor($order->referred_by)->id, 'name' => getDistributor($order->referred_by)->name,'sales' => getSalesTotal($order->referred_by)];

            }
        }
        // $data = [];
        $sorted =  collect($data)->groupBy('sales')->sortByDesc('sales');

        $fullData =  $sorted->values()->take(200);

        return view('top_distributors', compact('fullData'));
    }

}
