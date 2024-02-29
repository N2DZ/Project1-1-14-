@extends('layouts.guest')
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn py-5" data-wow-delay="0.1s">
      <div class="container py-5 text-center">
         <h1 class="display-2 text-dark animated slideInDown mb-4">Products</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Pages</a></li>
               <li class="breadcrumb-item text-dark" aria-current="page">Products</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Page Header End -->


   <!-- Products Start -->
   <div class="container-fluid product py-5">
      <div class="container py-5">
         <div class="section-title wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Our Products</p>
            <h1 class="display-6">Tea has a complex positive effect on the body</h1>
         </div>
         <div class="owl-carousel product-carousel wow fadeInUp" data-wow-delay="0.5s">
            <a href="" class="d-block product-item rounded">
               <img src="img/product-1.jpg" alt="">
               <div class="position-relative mt-n5 mx-4 bg-white p-4 text-center shadow-sm">
                  <h4 class="text-primary">Green Tea</h4>
                  <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
               </div>
            </a>
            <a href="" class="d-block product-item rounded">
               <img src="img/product-2.jpg" alt="">
               <div class="position-relative mt-n5 mx-4 bg-white p-4 text-center shadow-sm">
                  <h4 class="text-primary">Black Tea</h4>
                  <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
               </div>
            </a>
            <a href="" class="d-block product-item rounded">
               <img src="img/product-3.jpg" alt="">
               <div class="position-relative mt-n5 mx-4 bg-white p-4 text-center shadow-sm">
                  <h4 class="text-primary">Spiced Tea</h4>
                  <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
               </div>
            </a>
            <a href="" class="d-block product-item rounded">
               <img src="img/product-4.jpg" alt="">
               <div class="position-relative mt-n5 mx-4 bg-white p-4 text-center shadow-sm">
                  <h4 class="text-primary">Organic Tea</h4>
                  <span class="text-body">Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum</span>
               </div>
            </a>
         </div>
      </div>
   </div>
   <!-- Products End -->
@endsection
