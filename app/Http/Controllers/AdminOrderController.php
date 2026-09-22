<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class AdminOrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();

        $topProducts = OrderItem::select(
            'product_id',
            DB::raw('SUM(quantity) as total_sold')
        )
        ->groupBy('product_id')
        ->orderBy('total_sold', 'desc')
        ->with('product')
        ->take(10)
        ->get();

        $topClients = Order::select(
            'name',
            'email',
            DB::raw('SUM(total) as total_shopping')
        )
        ->groupBy('name', 'email')
        ->orderBy('total_shopping', 'desc')
        ->take(10)
        ->get();

        return view(
            'orders.index',
            compact('orders', 'topProducts', 'topClients')
        );
    }

    public function updateStatus($id)
    {
        $order = Order::findOrFail($id);

        $status = request('status');

        if (!in_array($status, [
            'Pending',
            'Approved',
            'Rejected'
        ])) {
            return back()->with(
                'error',
                'Invalid order status.'
            );
        }

        $order->status = $status;

        $order->save();

        return back()->with(
            'success',
            'Order status updated successfully.'
        );
    }
}