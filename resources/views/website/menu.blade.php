@extends('layouts.website')
@section('content')
<section class="food_section layout_padding p-0">
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <h2>Our Menu</h2>
        </div>
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
                                        <h5>
                                            £{{ $product->price }}
                                        </h5>
                                        <form id="addToCartForm" class="col-lg-12 col-md-12 d-flex justify-content-center" action="{{ route('cart.add',['product' => $product]) }}" method="POST">
                                            @csrf
                                            <input class="quantity-input" id="inputQuantity" type="number" name="quantity" min="1" value="1" style="max-width: 30%;margin: 10px 55px 0 10px;height: 20px;background-color: #e3e3e3;">
                                            <a style="max-width: 20%;" id="addToCartButton" href="">
                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                        <g>
                                                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z"></path>
                                                        </g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                    <g>
                                                    </g>
                                                </svg>
                                            </a>
                                        </form>
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
      $('html, body').animate({ scrollTop: 0 }, 800);
      return false;
    });
  });
</script>
@endsection