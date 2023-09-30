<!-- @extends('admin')

@section('content')
    <div class="container">
        <h2>Order Details</h2>
        <table class="table table-bordered mt-3">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $order->id }}</td>
                </tr>
                <tr>
                    <th>Customer</th>
                    <td>{{ $order->customer}}</td>
                </tr>
                <tr>
                    <th>Order Date & Time</th>
                    <td>{{ $order->order_date_time }}</td>
                </tr>
                <tr>
                    <th>Total Amount</th>
                    <td>${{ number_format($order->total_amount, 2) }}</td>
                </tr>
                <tr>
                    <th>Location</th>
                    <td>{{ ($order->location) }}</td>
                </tr>
                <tr>
                    <th>Order Status</th>
                    <td>{{ $order->order_status }}</td>
                </tr>
            </tbody>
        </table>    <br>
        <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection -->
