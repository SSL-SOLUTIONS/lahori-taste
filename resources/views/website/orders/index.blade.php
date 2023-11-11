@extends('layouts.website')
@section('content')
<br>

@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<style>
    #timer {
        font-weight: bold;
    }
</style>

<div class="container mt-4">
    <h1 class="text-center">Order History</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Order #</th>
                    <th scope="col">Address</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Delivery Charges</th>
                    <th scope="col">Net Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Date &Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $key => $order)
                <tr>
                    <td> <a href="{{route('orders.details', $order->id)}}">{{ $order->id}}</a> </td>
                    <td>{{ $order->address}} </td>
                    <td>{{config('app.currency')}} {{ $order->discount ?? '0' }}</td>
                    <td>{{config('app.currency')}} {{ (float)$order->delivery_charges ?? '0'}}</td>
                    <td>{{ config('app.currency') }} {{ (float)$order->delivery_charges + (float)$order->total - (float)$order->discount }}</td>
                    <td>{{$order->order_status}}</td>
                    <td>{{ $order->created_at->format('M d, Y H:i:s')}}</td>
                </tr>
        @if($order->order_status=='pending')
            <div class="text-center"><b>"Your order will reach you within 20 minutes"</b>
                <div id="timer"><b>20:00:000</b></div>
            </div>
        @endif
        @endforeach
        </tbody>
        </table>
    </div>
</div>
<br>
<script>
    $(document).ready(function () {
        var initialCountdown = localStorage.getItem('countdown');
        if (initialCountdown === null) {
            // Set the initial countdown time (20 minutes) if it's not already stored
            initialCountdown = 20 * 60 * 1000; // 20 minutes in milliseconds
            localStorage.setItem('countdown', initialCountdown);
        } else {
            initialCountdown = parseInt(initialCountdown);
        }

        var minutes = Math.floor(initialCountdown / 60000);
        var seconds = Math.floor((initialCountdown % 60000) / 1000);
        var milliseconds = initialCountdown % 1000;

        function updateTimer() {
            var formattedTime =
                (minutes < 10 ? '0' : '') + minutes + ':' +
                (seconds < 10 ? '0' : '') + seconds + ':' +
                (milliseconds < 10 ? '00' : (milliseconds < 100 ? '0' : '')) + milliseconds;
            $('#timer').text(formattedTime);
        }

        function countdown() {
            if (initialCountdown === 0) {
                clearInterval(timerInterval);
                alert('Countdown complete!');
            } else {
                initialCountdown -= 10; // Subtract 10 milliseconds
                minutes = Math.floor(initialCountdown / 60000);
                seconds = Math.floor((initialCountdown % 60000) / 1000);
                milliseconds = initialCountdown % 1000;
                localStorage.setItem('countdown', initialCountdown);
                updateTimer();
            }
        }

        updateTimer();

        var timerInterval = setInterval(countdown, 10);
    });
</script>
@endsection
