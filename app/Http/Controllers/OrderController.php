<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',

            'address' => 'required',

            'email' => 'required|email',

            'work_phone' => 'nullable',

            'cell_no' => 'required',

            'date_of_birth' => 'nullable|date',

            'category' => 'nullable',

            'remarks' => 'nullable',

            'cart' => 'required|json',

        ]);

        $cart = json_decode(
            $request->cart,
            true
        );

        if (!$cart || count($cart) == 0) {

            return back()->with(
                'error',
                'Your basket is empty.'
            );
        }

        DB::beginTransaction();

        try {

            $total = 0;

            foreach ($cart as $item) {

                $product = Product::find(
                    $item['id']
                );

                if (!$product) {

                    throw new \Exception(
                        'Product not found.'
                    );
                }

                if (
                    $item['quantity']
                    > $product->quantity
                ) {

                    throw new \Exception(
                        $product->name .
                        ' is out of stock.'
                    );
                }

                $total +=
                    $product->price *
                    $item['quantity'];
            }

            $order = Order::create([

                'name' =>
                    $request->name,

                'address' =>
                    $request->address,

                'email' =>
                    $request->email,

                'work_phone' =>
                    $request->work_phone,

                'cell_no' =>
                    $request->cell_no,

                'date_of_birth' =>
                    $request->date_of_birth,

                'category' =>
                    $request->category,

                'remarks' =>
                    $request->remarks,

                'total' =>
                    $total,

                'status' =>
                    'Pending',

            ]);

            foreach ($cart as $item) {

                $product = Product::find(
                    $item['id']
                );

                OrderItem::create([

                    'order_id' =>
                        $order->id,

                    'product_id' =>
                        $product->id,

                    'quantity' =>
                        $item['quantity'],

                    'price' =>
                        $product->price,

                ]);

                $product->decrement(
                    'quantity',
                    $item['quantity']
                );

                if ($product->quantity == 0) {

                    $product->status = 0;

                    $product->save();
                }
            }

            DB::commit();

            return redirect('/order-success')
                ->with(
                    'order_id',
                    $order->id
                );

        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with(
                'error',
                $e->getMessage()
            );
        }
    }
 


    
// ORDER HISTORY
public function history()
{
    $uid=Auth::user()->id;
    $orders = Order::with('items.product')->where('uid',$uid)->get();

    return view(
        'shop.order-history',
        compact('orders')
    );
}


}