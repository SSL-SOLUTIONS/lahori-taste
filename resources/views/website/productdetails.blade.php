@extends('layouts.website')

@section('content')
<!-- product details section -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <img class="mt-5" src="{{ asset('/img/products/' . $product->image) }}" alt="{{ $product->name }}" style="max-width: 50%; height: 20vh;">
        </div>
        <div class="col-md-9 mt-5">
            <h1>{{ $product->name }}</h1>
            <h3>Price: {{ config('app.currency') }}{{ $product->price }}</h3>
            <p>{{ $product->description }}</p>
            <a style="max-width: 20%;" href="{{route('cart.add' , $product)}}">
                     <button class= "btn btn-warning text-light mb-2"><b>Add to Cart</b></button>
                    </a>
        </div>
       <p class="bg-warning p-2 text-light"> <b>About Food<b><p>
        <p>"Indulge in a delectable array of fast food items that will satisfy your cravings in an instant. Our menu is bursting with mouthwatering options, from juicy burgers and crispy fries to savory chicken wings and creamy milkshakes. Whether you're on the go or looking for a quick and delicious meal, our fast food selection has something for everyone. With the perfect balance of flavors and textures, our fast food delights are sure to tantalize your taste buds. Enjoy a quick and convenient feast that's made to order and served with a smile. Treat yourself to the ultimate fast food experience today!"
            <p>
    </div>
</div>
<!-- product detail section -->
@endsection
