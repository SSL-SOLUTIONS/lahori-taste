<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    
    public function order()
    {
        $order = Order::all();
        return view('orders.index', compact('order'));
    }
}
