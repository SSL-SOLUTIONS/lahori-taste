<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="{{asset('images/logo.JPG')}}" type="">

  <title>Lahori Taste</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('website/css/font-awesome.min.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- Custom styles for this template -->
  <link href="{{asset('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="{{asset('website/images/hero-bg.jpg')}}" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="{{route('main')}}">
            <span>
            <img src="{{asset('images/logo.JPG')}}" alt="" class="img-fluid rounded-circle" style="max-width: 100px;">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('main')}}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('menus')}}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('order')}}">Orders</a>
              </li>
            </ul>
            <div class="user_option">
    @if (auth()->check())
        <!-- User is logged in, show logout option -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button style=" background: none;" type="submit" class="user_link">
                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
            </button>
        </form>
    @else
        <!-- User is not logged in, show signup and login options -->
        <a href="{{ route('register') }}" class="user_link">
            <i class="fa fa-user-plus" aria-hidden="true"></i> Signup
        </a>
        <a href="{{ route('login') }}" class="user_link">
            <i class="fa fa-sign-in" aria-hidden="true"></i> Login
        </a>
    @endif
              <a class="cart_link" href="{{route('cart')}}">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
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
             
              <a href="{{route('menus')}}" class="order_online">
                Order Online
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($categories as $key => $category)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6">
                            <div class="detail-box">
                                <!-- Add the image tag here with the category image URL -->
                               
                                <h1>{{ $category->title }}</h1>
                                <p>{{ $category->description }}</p>
                                <div class="btn-box">
                                    <a href="{{route('menus')}}" class="btn1">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="container">
            <ol class="carousel-indicators">
                @foreach($categories as $key => $category)
                <li data-target="#customCarousel1" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
        </div>
    </div>
</section>


    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div class="offer_container">
        <div class="container">
            <div class="row">
                @foreach($categories as $category)
                <div class="col-md-6">
                    <div class="box">
                        <div class="img-box">
                            <img src="{{ asset('img/categories/' . $category->image) }}" alt="" height="200">
                        </div>
                        <div class="detail-box"><br>
                            <h5>{{$category->title}}</h5>
                            <a href="{{ $category->link }}">
                                Order Now <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                                    <!-- Your SVG code here -->
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <div >
            {{$categories->links()}}
            </div>
        </div>
    </div>
</section>


  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          
        </h2>
      </div>




  <!-- end food section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{asset('website/images/about-img.png')}}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
              Lahori Taste
              </h2>
            </div>
            <p>
            "Discover the flavorful delights of 'Taste of Lahore,' where culinary traditions come to life. Our menu is a celebration of Lahore's rich gastronomic heritage, offering an exquisite array of mouthwatering dishes that will transport you to the heart of this culinary paradise. From aromatic biryanis to succulent kebabs and sweet delights, every bite is a tribute to the authentic taste of Lahore. Indulge in the true essence of Lahori cuisine, where every dish tells a story of tradition, culture, and unparalleled taste. Come savor the Taste of Lahore experience like never before!" 
            </p>
        
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
 
  <!-- end book section -->

  <!-- client section -->

 

  <!-- end client section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                46 Bridge,Street Bolton,BL12EG
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01204-353936
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Lahori Taste
            </a>
            <p>
             Online Home Delivery At Your Doorstep
             (Your Event,Your Place,Our Exceptional Food,Any Occasion Any Location...)
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          Lahori Taste
          &copy; 
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="{{asset('website/js/jquery-3.4.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="{{asset('website/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="{{asset('website/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
</body>

</html>