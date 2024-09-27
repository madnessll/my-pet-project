<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="description" content="TheQuest Gaming Magazine Template">
  <meta name="keywords" content="gaming, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" />

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />



</head>

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section d-flex justify-content-between">
    <div>
      <a href="{{ route('main.index') }}" class="site-logo">
        <img src="{{asset('img/logo.png')}}" alt="logo">
      </a>
      <ul class="main-menu">
        <li><a href="{{ route('main.index') }}">Home</a></li>
      </ul>
    </div>
    <div>

      <ul class="main-menu">
        @auth
        <li class="white">{{ Auth::user()->name }}</li>
        <li>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Выйти
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
        @endauth
      
        @guest
        <li><a href="{{ route('register') }}">Регистрация</a></li>
        <li><a href="{{ route('login') }}">Вход</a></li>
        @endguest
      </ul>
    </div>
  </header>
  <!-- Header section end -->

  @yield('content')

  <!-- Footer section -->
  <div class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <div class="about-widget">
              <img src="{{asset('img/logo.png')}}" alt="">
              <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                ipsum suspendisse ultrices gravida. Risus commodo. Morbi id dictum quam, ut commodo.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Usfull Links</h2>
            <ul>
              <li><a href="">Games</a></li>
              <li><a href="">testimonials</a></li>
              <li><a href="">Reviews</a></li>
              <li><a href="">Characters</a></li>
              <li><a href="">Latest news</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Services</h2>
            <ul>
              <li><a href="">About us</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Become a writer</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">FAQ</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget">
            <h2 class="fw-title">Careeres</h2>
            <ul>
              <li><a href="">Donate</a></li>
              <li><a href="">Services</a></li>
              <li><a href="">Subscriptions</a></li>
              <li><a href="">Careers</a></li>
              <li><a href="">Our team</a></li>
            </ul>
          </div>
        </div>

      </div>

    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="#"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="#"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
          <a href="#"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="#"><i class="fa fa-twitter"></i><span>twitter</span></a>
          <a href="#"><i class="fa fa-youtube"></i><span>youtube</span></a>
          <a href="#"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer section end -->

  <!--====== Javascripts & Jquery ======-->
  <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/circle-progress.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

</body>



</html>


<style>
  .white {
    color: white;
    font-weight: 500;
    margin-right: 50px;
  }
</style>