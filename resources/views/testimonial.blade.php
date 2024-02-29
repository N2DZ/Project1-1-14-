@extends('layouts.guest')
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn mb-5 py-5" data-wow-delay="0.1s">
      <div class="container py-5 text-center">
         <h1 class="display-2 text-dark animated slideInDown mb-4">Testimonial</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Pages</a></li>
               <li class="breadcrumb-item text-dark" aria-current="page">Testimonial</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Page Header End -->


   <!-- Testimonial Start -->
   <div class="container-fluid py-5">
      <div class="container">
         <div class="section-title wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Testimonial</p>
            <h1 class="display-6">What our clients say about our tea</h1>
         </div>
         <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.5s">
            <div class="testimonial-item p-lg-5 p-4">
               <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                  sed stet lorem sit clita duo justo</p>
               <div class="d-flex align-items-center justify-content-center">
                  <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" alt="">
                  <div class="ms-3 text-start">
                     <h5>Client Name</h5>
                     <span class="text-primary">Profession</span>
                  </div>
               </div>
            </div>
            <div class="testimonial-item p-lg-5 p-4">
               <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                  sed stet lorem sit clita duo justo</p>
               <div class="d-flex align-items-center justify-content-center">
                  <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" alt="">
                  <div class="ms-3 text-start">
                     <h5>Client Name</h5>
                     <span class="text-primary">Profession</span>
                  </div>
               </div>
            </div>
            <div class="testimonial-item p-lg-5 p-4">
               <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                  sed stet lorem sit clita duo justo</p>
               <div class="d-flex align-items-center justify-content-center">
                  <img class="img-fluid flex-shrink-0" src="img/testimonial-3.jpg" alt="">
                  <div class="ms-3 text-start">
                     <h5>Client Name</h5>
                     <span class="text-primary">Profession</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Testimonial End -->
@endsection
