<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class OrderController extends Controller
{
    public function checkout()
    {
        $cartItems = session()->get('cart', []);
        return view('orders.checkout', compact('cartItems'));
    }

    public function store(Request $request)
    {
        $cartItems = session()->get('cart', []);
        
        $order = Order::create([
            'user_id' => auth()->id(),
            'total_amount' => array_sum(array_map(function($item) {
                return $item['price'] * $item['quantity'];
            }, $cartItems)),
            'status' => 'pending',
        ]);

        foreach ($cartItems as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        session()->forget('cart');

        return redirect()->route('orders.confirmation', $order);
    }

    public function confirmation(Order $order)
    {
        return view('orders.confirmation', compact('order'));
    }
}

