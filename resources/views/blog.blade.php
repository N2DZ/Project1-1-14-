@extends('layouts.guest')
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn mb-5 py-5" data-wow-delay="0.1s">
      <div class="container py-5 text-center">
         <h1 class="display-2 text-dark animated slideInDown mb-4">Acticle</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Pages</a></li>
               <li class="breadcrumb-item text-dark" aria-current="page">Acticle</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Page Header End -->


   <!-- Article Start -->
   <div class="container-xxl py-5">
      <div class="container">
         <div class="row g-5">
            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
               <img class="img-fluid" src="img/article.jpg" alt="">
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
               <div class="section-title">
                  <p class="fs-5 fw-medium fst-italic text-primary">Featured Acticle</p>
                  <h1 class="display-6">The history of tea leaf in the world</h1>
               </div>
               <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                  Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
               <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                  sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
               <a href="" class="btn btn-primary rounded-pill px-5 py-3">Read More</a>
            </div>
         </div>
      </div>
   </div>
   <!-- Article End -->
@endsection
