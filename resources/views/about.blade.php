@extends('layouts.guest')
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn mb-5 py-5" data-wow-delay="0.1s">
      <div class="container py-5 text-center">
         <h1 class="display-2 text-dark animated slideInDown mb-4">About Us</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Pages</a></li>
               <li class="breadcrumb-item text-dark" aria-current="page">About</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Page Header End -->
   <!-- About Start -->
   <div class="container-xxl py-5">
      <div class="container">
         <div class="row g-5">
            <div class="col-lg-6">
               <div class="row g-3">
                  <div class="col-6 text-end">
                     <img class="img-fluid w-100 wow fadeIn mb-3 bg-white" data-wow-delay="0.1s" src="img/about-1.jpg"
                        alt="">
                     <img class="img-fluid w-50 wow fadeIn bg-white" data-wow-delay="0.2s" src="img/about-3.jpg"
                        alt="">
                  </div>
                  <div class="col-6">
                     <img class="img-fluid w-50 wow fadeIn mb-3 bg-white" data-wow-delay="0.3s" src="img/about-4.jpg"
                        alt="">
                     <img class="img-fluid w-100 wow fadeIn bg-white" data-wow-delay="0.4s" src="img/about-2.jpg"
                        alt="">
                  </div>
               </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
               <div class="section-title">
                  <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                  <h1 class="display-6">The success history of TEA House in 25 years</h1>
               </div>
               <div class="row g-3 mb-4">
                  <div class="col-sm-4">
                     <img class="img-fluid w-100 bg-white" src="img/about-5.jpg" alt="">
                  </div>
                  <div class="col-sm-8">
                     <h5>Our tea is one of the most popular drinks in the world</h5>
                     <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit</p>
                  </div>
               </div>
               <div class="border-top mb-4"></div>
               <div class="row g-3">
                  <div class="col-sm-8">
                     <h5>Daily use of a cup of tea is good for your health</h5>
                     <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit</p>
                  </div>
                  <div class="col-sm-4">
                     <img class="img-fluid w-100 bg-white" src="img/about-6.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About End -->
@endsection
