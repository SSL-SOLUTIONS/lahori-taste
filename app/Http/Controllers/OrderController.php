<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;



class OrderController extends Controller
{
    public function store(Request $request)
    {
        $order = new Order();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address = $request->input('address');
        $order->product_id = $request->input('product_id');
        $order->quantity = $request->input('quantity');
        $order->price = $request->input('price');
        $order->image = $request->input('image');
        $order->payment_status = 'pending'; // Set the initial payment status
        $order->delivery_status = 'pending'; // Set the initial delivery status

        $order->save();

        // Redirect to a confirmation page or show a success message
        return redirect()->route('order.confirmation', ['order' => $order]);
    }
    public function processToCheckout(){
        return view('orders.checkout');
    }
}

