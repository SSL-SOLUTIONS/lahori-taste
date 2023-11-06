<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Lahori Taste</title>

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/css/style.css')}}">

  <link rel="shortcut icon" href="" />
</head>

<body>
  <div class="container-scroller">
    <!-- Sidebar -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex fixed-top">
        <img  src="{{asset('images/new logo lahori taste 2 (1).png')}}" alt="" class="img-fluid  mt-6">
      </div>
      <br>
      <ul style="position: fixed;" class="nav">
        <!-- Sidebar Menu Items -->
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('users') }}">
            <span class="menu-icon">
              <i class="mdi mdi-account"></i> <!-- User Icon -->
            </span>
            <span class="menu-title">Users</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('categories') }}">
            <span class="menu-icon">
              <i class="mdi mdi-food-fork-drink"></i>
            </span>
            <span class="menu-title">Categories</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('products') }}">
            <span class="menu-icon">
              <i class="mdi mdi-hamburger"></i>
            </span>
            <span class="menu-title">Products</span>
          </a>
        </li>
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{ url('order') }}">
            <span class="menu-icon">
              <i class="mdi mdi-cart"></i>
            </span>
            <span class="menu-title">Orders</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid page-body-wrapper">
      <!-- Top Navbar -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
        <!-- Navbar Brand -->
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
          <a class="navbar-brand brand-logo-mini" href=""><img src="{{ asset('images/new logo lahori taste 2 (1).png') }}" alt="logo" /></a>
        </div>
        <!-- Navbar Menu Items -->
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
          <!-- Mobile Menu Toggle Button -->
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <!-- Search Form -->
          <ul class="navbar-nav w-100">
            <li class="nav-item w-100">
       
            </li>
          </ul>
          <!-- User Profile Dropdown -->
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown">
              <a class="nav-link" id="profileDropdown" href="" data-toggle="dropdown">
                <div class="navbar-profile">
                  <img class="img-xs rounded-circle" src="{{ asset('/img/users/' . Auth::user()->image) }}" alt="">
                  @auth
                    @php
                      $fullName = Auth::user()->name;
                      $nameParts = explode(' ', $fullName);
                      $firstName = $nameParts[0];
                    @endphp
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ $firstName }}</p>
                  @endauth
                  <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
            
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                <a class="dropdown-item preview-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-logout text-danger"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject mb-1">Log out</p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <!-- Mobile Menu Toggle Button -->
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-format-line-spacing"></span>
          </button>
        </div>
      </nav>

      <div class="main-panel">
        <!-- Page Content -->
        <div class="content-wrapper">
          @yield('content')
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript -->
  <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
  <script src="{{ asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/assets/js/misc.js') }}"></script>
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
  <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
  <script src="{{ asset('admin/assets/js/dashboard.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>
