@extends('layouts.website')
@section('content')
<section class="food_section layout_padding">
    <divm ncSX class="container">
        <div class="heading_container heading_center">
            <h2>
                Our Menu
            </h2>
        </div>
        <div class="filters-content">
            <div class="row">
                @foreach($products as $product) <!-- Loop through products -->
                    <div class="col-sm-6 col-lg-4 all pizza">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('/img/products/' . $product->image) }}" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    {{ $product->name }}
                                </h5>
                                <p>
                                    {{ $product->description }}
                                </p>
                                <div class="options">
                                    <h6>
                                        £{{ $product->price }}
                                    </h6>
                                    <form class="col-12" action="{{ route('cart.add', ['product' => $product]) }}" method="POST">
                                        @csrf
                                        <input type="number" name="quantity" min="1" value="1" class="quantity-input">
                                        <button type="submit" class="add-to-cart"><i class="fas fa-shopping-cart cart-icon"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div><br>
            <div>
            {{$products->links()}}
            </div>
        </div>
    </div>
</section>
<!-- end food section -->
@endsection
