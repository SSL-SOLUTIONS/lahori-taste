@extends('layouts.website')
@section('content')

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

<div class="container mt-4">
    <h1 class="text-center">Your Cart</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Item</th>
                    <th scope="col">Image</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $productId => $cartItem)
                <tr>
                    <td>{{ $cartItem['name'] }}</td>
                    <td>
                        <img src="{{ asset('img/products/' . $cartItem['image']) }}" class="img-thumbnail" style="max-width: 50px;">
                    </td>
                    <td>
                        <!-- Decrement Quantity Button -->
                        <button class="btn btn-sm btn-primary" onclick="updateQuantity({{ $productId }}, 'decrement')">-</button>
                        <span id="quantity_{{ $cartItem['id'] }}">{{ $cartItem['quantity'] }}</span>
                        <!-- Increment Quantity Button -->
                        <button class="btn btn-sm btn-primary" onclick="updateQuantity({{ $productId }}, 'increment')">+</button>
                    </td>
                    <td>£{{ $cartItem['price'] }}</td>
                    <td class="align-middle">
                        <a href="{{ route('remove_cart', $productId) }}" class="btn btn-sm btn-danger">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @php
    $totalPrice = 0;
    foreach($cart as $cartItem) {
        $totalPrice += $cartItem['price'];
    }
    @endphp

    <div class="text-left">
        <p><strong>Total Price: £{{ number_format($totalPrice, 2) }}</strong></p>
    </div>

    @if ($totalPrice > 0)
    <div class="text-center">
        <a class="btn btn-warning" href="{{ route('processToCheckout') }}">Process to Checkout</a>
    </div>
    @endif
</div>

<script>
    function updateQuantity(itemId, action) {
        let quantityElement = document.getElementById('quantity_' + itemId);
        let currentQuantity = parseInt(quantityElement.innerText);

        if (action === 'increment') {
            currentQuantity += 1;
        } else if (action === 'decrement' && currentQuantity > 1) {
            currentQuantity -= 1;
        }

        quantityElement.innerText = currentQuantity;
        // You may also want to update the cart data in the session here
    }
</script>

@endsection
