<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link href="{{asset('website/js/slider.js')}}" rel="stylesheet" />

    <!-- Demo styles -->
    <style>
        .swiper {
            width: 90%;
            padding-top: 50px;
            padding-bottom: 50px;
            
        }

        #swiper-slid {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        #swiper-slid img {
            display: block;
            width: 100%;
        }

        .lahori-slider {
            margin: 0;
            font-family: cursive;
        }

        :root {
            --width-circle: 150vw;
            --radius: calc(100vw / 6);
        }

        .slider {
            width: 100vw;
            height: 100vw;
            overflow: hidden;
            position: relative;
            background-color: #17232A;
            background-image: redial-gradient(#fff3, transparent 58%);
            margin-top: -50px;
        }

        .slider .list {
            position: absolute;
            width: max-content;
            height: 100%;
            display: flex;
            justify-content: start;
            align-items: center;
            transition: transform .8s;
        }

        .slider .list .item {
            width: calc(var(--radius) * 2);
            text-align: center;
            transform: rotate(180deg);
            transition: transform 3s;
        }

        .slider .list .item.active {
            transform: rotate(0deg);
        }

        .slider .list .item img {
            width: 90%;
            filter: drop-shadow(0 0 60px #080808);
        }

        .slider .content {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #eee;
            width: max-content;
        }

        .slider .content div:nth-child(2) {
            font-size: 5rem;
            text-transform: uppercase;
            letter-spacing: 10px;
            font-weight: bold;
            position: relative;
        }

        .slider .content div:nth-child(2)::before {
            position: absolute;
            left: 60%;
            bottom: 50%;
            width: 80px;
            height: 80px;
            background-color: url('images/images.png');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .slider .content div:nth-child(1) {
            text-align: center;
            text-transform: uppercase;
            transform: translateY(20px);
        }

        .slider .content button {
            background: transparent;
            color: #eee;
            letter-spacing: 5px;
            padding: 10px 20px;
            border-radius: 20px;
        }

        #prev,
        #next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: transparent;
            border: 1px solid #eee8;
            color: #c00000;
            font-size: x-large;
            font-family: monospace;
            cursor: pointer;
            z-index: 15;
        }

        #prev {
            left: 20px;
        }

        #next {
            right: 20px;
        }

        .circle {
            pointer-events: none;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            -webkit-mask:
                radial-gradint (var(--radius),
                    transparent 100%,
                    #000);
            mask:
                radial-gradint (var(--radius),
                    transparent 100%,
                    #000);
            backdrop-filter: blur(6px);
            background: radial-gradient(calc(var(--radius) + 1px), #0005 100%, #eee2);
        }

        .circle span {
            display: block;
            position: absolute;
            height: calc(var(--redius) * 2 + 50px);
            top: 50%;
            left: 50%;
            -rotate: 50deg;
            transform: translate(-50%, -50%)rotate(var(--rotate));
            text-transform: uppercase;
            color: #fff;
            font-size: small;
            animation: circleRotate 20s linear infinite;
        }

        @keyframes circleRotate {
            to {
                transform: translate(-50%, -50%)rotate(calc(--rotate) + 360deg);
            }
        }
        @media screen and (max-width: 769px) {
  .swiper-media{
    margin-top: 320px;
  }
}
@media screen and (max-width: 376px) {
  .swiper-media{
    margin-top: 100px;
  }
}


    </style>
</head>

<body>
    <!-- Swiper -->
    
    <div  class="container-fluid bg-dark">
       
            
            <div class="swiper mySwiper swiper-media">
            <h1  style="text-align:center; color:white; margin-top:100px;">Our Best Sellers</h1>
                <div class="swiper-wrapper">
               
                    @php
                    $productIds = [5,6,7,10,13,12,20,16,32,57, 82,];
                    $products = \App\Models\Product::whereIn('id', $productIds)->get();
                    @endphp
                    @foreach($products as $product)
                    <div class="swiper-slide" id="swiper-slid">
                        <img src="{{ asset('/img/products/' . $product->image) }}" />
                    </div>
                    @endforeach
                </div>
            </div>
            <div style="display: flex; justify-content: center;">
                <h4 style="color: white" class="btn btn-warning">All Our Major products</h4>
            </div>
        
        <br><br>
        <div class="category-card d-flex flex-wrap">
            @php
            use App\Models\Category;
            use App\Models\Product;
            $categories =Category::all();
            $products =Product::all();
            @endphp
    @foreach($categories as $category)
        <div class="col-lg-3 mb-3">
            <div style="box-shadow: 0px 0px 10px 5px rgba(0, 0, 0, 0.5);" class="card">
            <a href="{{ route('menus')}}">
                    <img class="card-img-top" src="{{ asset('/img/categories/'.$category->image) }}" alt="{{ $category->name }}">
                </a>
            </div>
        </div>
    @endforeach
</div>

       
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: true,
                },
                speed: 2000,
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script>
            $(document).ready(function() {
                $('#product-list').hide();
                $('#view-menu-button').on('click', function(event) {
                    event.preventDefault();
                    $('#product-list').toggle(); 
                });
            });
        </script>
</body>

</html>
