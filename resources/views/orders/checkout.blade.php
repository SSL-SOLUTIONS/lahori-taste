@extends('layouts.website')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2>Contact Information</h2>
            <form method="POST" action="{{route('stripe.view')}}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" required>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100 mb-5">$ 6.5 Pay to Checkout</button>
            </form>
        </div>
    </div>
</div>

@endsection
