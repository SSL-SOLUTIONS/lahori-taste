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
  <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{asset('website/css/bootstrap.css')}}" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="{{asset('website/css/font-awesome.min.css')}}" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


  <!-- Custom styles for this template -->
  <link href="{{asset('website/css/style.css')}}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{asset('website/css/responsive.css')}}" rel="stylesheet" />

  <title>Lahori Taste</title>
  <style>
    .vertical-navbar {
      display: inline-block;
      padding: 20px;
      border-radius: 20px;
      margin-top: 80px;
      height: 600px;
      background-color: whitesmoke;
    }

    .vertical-navbar ul {
      list-style-type: none;
      padding: 10px;
    }

    .vertical-navbar li {
      margin: 10px 0;
      cursor: pointer;
      transition: background-color 0.3s ease;
      align-items: center;
    }

    .vertical-navbar li:hover {
      background-color: #e3e3e3;
      border-radius: 5px;
    }

    #inputQuantity {
      max-width: 30%;
      margin: 10px 55px 0 10px;
      height: 20px;
      background-color: #e3e3e3;
    }
  </style>
</head>

<body>

  <!-- header section  -->
  <div class="container-fluid p-0">
    <div class="hero_area">
      <div class="bg-box">
        <img src="{{asset('images/image-1.jpg')}}" alt="">
      </div>
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{route('main')}}">
              <span>
                <img class="img-fluid" style="height: 40px;" src="{{asset('images/new logo lahori taste 2 (1).png')}}" alt="">
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
                  <a class="nav-link" href="{{route('orders')}}">Order Now</a>
                </li>
              </ul>
              <div class="user_option">
                <a href="#" class="user_link" id="userIcon">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </a>
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
                <a href="" class="order_online">
                  Order Online
                </a>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
      <!-- slider section -->
      <section class="slider_section ">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container ">
                <div class="row">
                  <div class="col-md-7 col-lg-6 ">
                    <div class="detail-box">
                      <h1>
                        Fast Food Restaurant
                      </h1>
                      <p>
                        Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam
                        quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos
                        nihil ducimus libero ipsam.
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1">
                          Order Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container ">
                <div class="row">
                  <div class="col-md-7 col-lg-6 ">
                    <div class="detail-box">
                      <h1>
                        Lahori Taste Restaurant
                      </h1>
                      <p>
                        Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam
                        quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos
                        nihil ducimus libero ipsam.
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1">
                          Order Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container ">
                <div class="row">
                  <div class="col-md-7 col-lg-6 ">
                    <div class="detail-box">
                      <h1>
                        Fast Food Restaurant
                      </h1>
                      <p>
                        Doloremque, itaque aperiam facilis rerum, commodi, temporibus sapiente ad mollitia laborum quam
                        quisquam esse error unde. Tempora ex doloremque, labore, sunt repellat dolore, iste magni quos
                        nihil ducimus libero ipsam.
                      </p>
                      <div class="btn-box">
                        <a href="" class="btn1">
                          Order Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
        </div>

      </section>
      <!-- end slider section -->
    </div>
  </div>
  <!--End header section  -->

  <!-- food section -->
  <section class="food_section layout_padding-bottom">
    <div class="container-fluid">
      <div class="row pt-4 m-1">
        <div class="col-lg-2 col-md-3 col-sm-3 p-3 ">
          <div style="position: sticky; top: 30px;" class="vertical-navbar mt-5">
            <ul class="filters_menu" id="filters_menu">
              <li data-filter="*" onclick="filterProducts('all');" class="active">All</li>
              @foreach ($categories as $category)
              <li data-filter=".{{ $category->title}}" onclick="filterProducts('{{ $category->id }}')">
                {{ $category->title }}
              </li>
              @endforeach
            </ul>
          </div>
        </div>
        <div class="col-lg-10 col-md-9 col-sm-9 p-0">
          <div class="heading_container heading_center">
            <h2>Our Menu</h2>
            @if(session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              {{ session()->get('message') }}
            </div>
            @endif
          </div>
          <div class="filters-content" id="products-container">
            <div class="row">
              @foreach ($products as $product)
              <div class="col-lg-4 col-sm-6 all category-{{ $product->category?->id }}">
                <div class="box m-3 p-0">
                  <div class="img-box">
                    <img class="img-fluid" src="{{ asset('/img/products/'.$product->image) }}" alt="{{ $product->name }}">
                  </div>
                  <div class="detail-box">
                    <h5> {{ Str::limit($product->name, $limit =8, $end = '...')}}</h5>
                    <p> {{ Str::limit($product->description, $limit = 30, $end = '...')}}</p>
                    <div class="options">
                      <h6 class="text-start">
                        <h5 style="margin-top: 7px;">£{{ $product->price }}</h5>
                      </h6>
                      <form class="col-lg-12 col-md-12 d-flex justify-content-center" action="{{ route('cart.add',['product' => $product]) }}" method="POST">
                        @csrf
                        <input class="quantity-input" id="inputQuantity" type="number" name="quantity" min="1" value="1">
                        <a href="#">
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
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end food section -->

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
  <script>
    function filterProducts(category) {
      // var url = '{{ route("website") }}?category=' + category;
      // window.location.href = url;
      if (category == 'all') {
        $('.all').removeClass('d-none');

      } else {
        $('.all').addClass('d-none');
        $('.category-' + category).removeClass('d-none');
      }
    }
  </script>

</body>

</html>