@extends('layouts.guest')
@section('content')
   <!-- Page Header Start -->
   <div class="container-fluid page-header wow fadeIn mb-5 py-5" data-wow-delay="0.1s">
      <div class="container py-5 text-center">
         <h1 class="display-2 text-dark animated slideInDown mb-4">Contact Us</h1>
         <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item"><a href="#">Pages</a></li>
               <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
            </ol>
         </nav>
      </div>
   </div>
   <!-- Page Header End -->


   <!-- Contact Start -->
   <div class="container-xxl contact py-5">
      <div class="container">
         <div class="section-title wow fadeInUp mx-auto text-center" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-medium fst-italic text-primary">Contact Us</p>
            <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
         </div>
         <div class="row g-5 mb-5">
            <div class="col-md-4 wow fadeInUp text-center" data-wow-delay="0.3s">
               <div class="btn-square mx-auto mb-3">
                  <i class="fa fa-envelope fa-2x text-white"></i>
               </div>
               <p class="mb-2">info@example.com</p>
               <p class="mb-0">support@example.com</p>
            </div>
            <div class="col-md-4 wow fadeInUp text-center" data-wow-delay="0.4s">
               <div class="btn-square mx-auto mb-3">
                  <i class="fa fa-phone fa-2x text-white"></i>
               </div>
               <p class="mb-2">+012 345 67890</p>
               <p class="mb-0">+012 345 67890</p>
            </div>
            <div class="col-md-4 wow fadeInUp text-center" data-wow-delay="0.5s">
               <div class="btn-square mx-auto mb-3">
                  <i class="fa fa-map-marker-alt fa-2x text-white"></i>
               </div>
               <p class="mb-2">123 Street</p>
               <p class="mb-0">New York, USA</p>
            </div>
         </div>
         <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
               <h3 class="mb-4">Need a functional contact form?</h3>
               <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with
                  Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                     href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
               <form>
                  <div class="row g-3">
                     <div class="col-md-6">
                        <div class="form-floating">
                           <input type="text" class="form-control" id="name" placeholder="Your Name">
                           <label for="name">Your Name</label>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-floating">
                           <input type="email" class="form-control" id="email" placeholder="Your Email">
                           <label for="email">Your Email</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-floating">
                           <input type="text" class="form-control" id="subject" placeholder="Subject">
                           <label for="subject">Subject</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-floating">
                           <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                           <label for="message">Message</label>
                        </div>
                     </div>
                     <div class="col-12">
                        <button class="btn btn-primary rounded-pill px-5 py-3" type="submit">Send Message</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
               <div class="h-100">
                  <iframe class="w-100 rounded"
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                     frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen=""
                     aria-hidden="false" tabindex="0"></iframe>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact End -->
@endsection
