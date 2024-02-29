<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>Nobicha shop - Nobicha Shop Website Template</title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

   <!-- Scripts -->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <script src="{{ asset('js/app.js') }}"></script>
   <!-- Favicon
      -->
   <link href="img/favicon.ico" rel="icon" />

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
      rel="stylesheet" />

   <!-- Icon Font Stylesheet -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

   <!-- Libraries Stylesheet -->
   <link href="lib/animate/animate.min.css" rel="stylesheet" />
   <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

   <!-- Customized Bootstrap Stylesheet -->
   <link href="css/bootstrap.min.css" rel="stylesheet" />

   <!-- Template Stylesheet -->
   <link href="css/style.css" rel="stylesheet" />
</head>

<body class="font-sans antialiased">
   <div class="min-h-screen bg-gray-100">

      <!-- Navbar Start -->
      <div class="container-fluid sticky-top bg-white">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-lg-0 bg-white py-2">
               <a href="/" class="navbar-brand">
                  <img class="img-fluid" src="img/logo.png" alt="Logo">
               </a>
               <button type="button" class="navbar-toggler me-0 ms-auto" data-bs-toggle="collapse"
                  data-bs-target="#navbarCollapse">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto">
                     <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                     <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
                     <a href="/products"
                        class="nav-item nav-link {{ request()->is('products') ? 'active' : '' }}">Products</a>
                     <a href="/store" class="nav-item nav-link {{ request()->is('store') ? 'active' : '' }}">Store</a>
                     <div class="nav-item dropdown">
                        <a href="#"
                           class="nav-link dropdown-toggle {{ request()->is('blog') || request()->is('testimonial') ? 'active' : '' }}"
                           data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu bg-light rounded-0 m-0">
                           <a href="/blog" class="dropdown-item {{ request()->is('blog') ? 'active' : '' }}">
                              Blog Article</a>
                           <a href="/testimonial"
                              class="dropdown-item {{ request()->is('testimonial') ? 'active' : '' }}">Testimonial</a>
                        </div>
                     </div>
                     <a href="/contact"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
                     @if (Route::has('login'))
                        @auth
                           <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                        @else
                           <a href="{{ route('login') }}" class="nav-item nav-link">Log
                              in</a>

                           @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                           @endif
                        @endauth
                     @endif
                  </div>
               </div>
            </nav>
         </div>
      </div>
      <!-- Navbar End -->


      <!-- Page Content -->
      <main>
         @yield('content')
         @if (isset($slot))
            <div style="width: 40%;padding-top:10%" class="mx-auto my-auto">
               {{ $slot }}
            </div>
         @endif
      </main>
      @if (!request()->is('login') && !request()->is('register'))
         <!-- Footer Start -->
         <div class="container-fluid bg-dark footer wow fadeIn py-5" data-wow-delay="0.1s">
            <div class="container py-5">
               <div class="row g-5">
                  <div class="col-lg-3 col-md-6">
                     <h4 class="text-primary mb-4">Our Office</h4>
                     <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA
                     </p>
                     <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                     <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
                     <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                              class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                              class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                              class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                              class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h4 class="text-primary mb-4">Quick Links</h4>
                     <a class="btn btn-link" href="">About Us</a>
                     <a class="btn btn-link" href="">Contact Us</a>
                     <a class="btn btn-link" href="">Our Services</a>
                     <a class="btn btn-link" href="">Terms & Condition</a>
                     <a class="btn btn-link" href="">Support</a>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h4 class="text-primary mb-4">Business Hours</h4>
                     <p class="mb-1">Monday - Friday</p>
                     <h6 class="text-light">09:00 am - 07:00 pm</h6>
                     <p class="mb-1">Saturday</p>
                     <h6 class="text-light">09:00 am - 12:00 pm</h6>
                     <p class="mb-1">Sunday</p>
                     <h6 class="text-light">Closed</h6>
                  </div>
                  <div class="col-lg-3 col-md-6">
                     <h4 class="text-primary mb-4">Newsletter</h4>
                     <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                     <div class="position-relative w-100">
                        <input class="form-control w-100 bg-transparent py-3 pe-5 ps-4" type="text"
                           placeholder="Your email">
                        <button type="button"
                           class="btn btn-primary position-absolute end-0 top-0 me-2 mt-2 py-2">SignUp</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Footer End -->


         <!-- Copyright Start -->
         <div class="container-fluid copyright py-4">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 text-md-start mb-md-0 mb-3 text-center">
                     &copy; <a class="fw-medium" href="#">Your Site Name</a>, All Right Reserved.
                  </div>
                  <div class="col-md-6 text-md-end text-center">
                     <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                     Designed By <a class="fw-medium" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a
                        class="fw-medium" href="https://themewagon.com">ThemeWagon</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- Copyright End -->
      @endif

   </div>


   <!-- JavaScript Libraries -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
   <script src="lib/wow/wow.min.js"></script>
   <script src="lib/easing/easing.min.js"></script>
   <script src="lib/waypoints/waypoints.min.js"></script>
   <script src="lib/owlcarousel/owl.carousel.min.js"></script>

   <!-- Template Javascript -->
   <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
