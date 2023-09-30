@extends('layouts.website')
@section('content')

    <!-- Order section  start-->
    <!-- <div class="container">
        <h1>My Orders</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach(session('orders', []) as $order)
                        <tr>
                        <td>{{ $order['product']->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>{{ $order->price }}</td>
                            <td><img src="{{ asset('img/products/' .$order->image) }}" width="100"></td>
                            <td>{{ $order->payment_status }}</td>
                            <td>{{ $order->delivery_status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  order section end -->


 @endsection