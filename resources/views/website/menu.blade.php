@extends('layouts.website')
@section('content')
<br><br><br>

<section class="food_section layout_padding p-0">
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <h2>Our Menu</h2>
        </div>
        @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              {{ session()->get('message') }}
            </div>
            @endif
    </div>
    <div class="container-fluid m-0">
        <div class="row">
            <div class="col-12">
                <div class="filters-content">
                    <div class="row">
                        @foreach($products as $product) <!-- Loop through products -->
                        <div class="col-lg-4 col-md-6 col-sm-12 all pizza">
                            <div class="box">
                                <div class="img-box">
                                    <img src="{{ asset('/img/products/'.$product->image) }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ Str::limit($product->name, $limit =15, $end = '...')}}
                                    </h5>
                                    <p>
                                        {{ Str::limit($product->description, $limit = 30, $end = '...')}}
                                    </p>
                                    <div class="options">
                                        <h3>
                                            £{{ $product->price }}
                                        </h3>
                                        <a style="max-width: 20%;" href="{{route('cart.add' , $product)}}">
                                            <!-- Keep the cart symbol consistent in style and size -->
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
    <div id="scroll-to-top">Top</div>
</section>
<!-- end food section -->
<script>
    document.getElementById('addToCartButton').addEventListener('click', function(event) {
        event.preventDefault();
        const quantity = parseInt(document.getElementById('inputQuantity').value);
        if (quantity > 0) {
            document.getElementById('addToCartForm').submit();
            alert('Item Added To Cart Successfully')
        } else {
            alert('Please enter a valid quantity.');
        }
    });
</script>
<script>
    $(document).ready(function() {
        // Show the scroll-to-top circle when user scrolls down
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#scroll-to-top').fadeIn();
            } else {
                $('#scroll-to-top').fadeOut();
            }
        });

        // Scroll to the top when the circle is clicked
        $('#scroll-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>
@endsection