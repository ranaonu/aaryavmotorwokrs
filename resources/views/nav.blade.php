<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
  <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
<!-- Spinner End -->
<!-- Topbar Start -->
<div class="container-fluid bg-light p-0">
  <div class="row gx-0 d-none d-lg-flex">
    <div class="col-lg-7 px-5 text-start">
      <div class="h-100 d-inline-flex align-items-center py-3 me-4">
        <small class="fa fa-map-marker-alt text-primary me-2"></small>
        <small>Adda Jhungia Tile Market, Zirakpur</small>
      </div>
      <div class="h-100 d-inline-flex align-items-center py-3">
        <small class="far fa-clock text-primary me-2"></small>
        <small>Mon - Sun : 09.00 AM - 06.30 PM</small>
      </div>
    </div>
    <div class="col-lg-5 px-5 text-end">
      <div class="h-100 d-inline-flex align-items-center py-3 me-4">
        <small class="fa fa-phone-alt text-primary me-2"></small>
        <small> +91 95015 36611, +91 82880 44026</small>
      </div>
      <div class="h-100 d-inline-flex align-items-center">
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
        <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</div>
<!-- Topbar End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow1 sticky-top p-0">
  <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
    <img class="img-fluid" src="{{ asset('public/img/logo.png')}}" alt="" width="75" height="60">
    <!-- <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2> -->
  </a>
  <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto p-4 p-lg-0">
      <a href="{{url('/')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'home'?'active':''}} @endif">Home</a>
      <a href="{{url('/about')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'about'?'active':''}} @endif">About</a>
      <a href="{{url('/services')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'services'?'active':''}} @endif">Services</a>

      <!-- <div class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
        <div class="dropdown-menu fade-up m-0">
            <a href="booking.html" class="dropdown-item">Booking</a>
            <a href="team.html" class="dropdown-item">Technicians</a>
            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
            <a href="404.html" class="dropdown-item">404 Page</a>
        </div>
        </div> -->
        <a href="{{url('/our-portfolio')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'portfolio'?'active':''}} @endif">Our Portfolio</a>
      <a href="{{url('/contact')}}" class="nav-item nav-link @if(isset($active_menu)) {{$active_menu == 'contact'?'active':''}} @endif">Contact Us</a>

      @guest
        <a href="{{url('/login')}}" class="nav-item nav-link">Sign In </a>
      @else
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
      <a class="nav-item nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"
        ><i class="fa fa-power-off me-1 ms-1"></i> {{ __('Logout') }}</a>

      @endif

    </div>
    <!-- <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get A Quote<i class="fa fa-arrow-right ms-3"></i></a> -->
  </div>
</nav>
<!-- Navbar End -->