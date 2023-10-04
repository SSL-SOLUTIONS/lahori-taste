@extends('admin')

@section('content')

<div class="container">
 
    <h2>Order Detail</h2>
  
    <table class="col-lg-12 table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Per Product Price</th>
                <th>Quantity</th>
                <th>Total Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderdetails as $orderdetail)
            <tr>
                <td>{{ $orderdetail->id}}</td>
                <td>{{ $orderdetail->order_id}}</td>
                <td>{{ $orderdetail->product->name}}</td>
                <td>£{{ $orderdetail->price}}</td>
                <td>{{ $orderdetail->qty}}</td>
                <td>£{{ $orderdetail->subtotal}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
   
@endsection
