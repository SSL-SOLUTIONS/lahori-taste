@extends('admin')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <h2>Orders List</h2>
  
    <table class="col-lg-12 table-bordered mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->phone }}</td>
                <td>{{ $order->address}}</td>
                <td>
                 <a class="btn btn-success" href="{{ route('orderdetails', ['id' => $order->id]) }}">Details</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection