
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
                      <td><img src="{{ asset('img/products/' . $cartItem['image']) }}" class="img-thumbnail" style="max-width: 50px;"></td>
                      <td> {{ $cartItem['quantity']}}</td>
                      <td> £{{ $cartItem['price']}}</td>
                      <td class="align-middle">
                          <a href="{{ route('remove_cart', $productId) }}" class="btn btn-sm btn-danger">
                              <i class="fa fa-times"></i>
                          </a>
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
          <p><strong>Total Price: ${{ number_format($totalPrice, 2) }}</strong></p>
      </div>
      <div class="text-center">
    <a class="btn btn-warning" href="{{ route('stripe.get', ['totalPrice' => $totalPrice]) }}">Pay using Card</a>
</div>
</div>
  </div>
  <br>
@endsection























