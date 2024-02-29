<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
   data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
   <meta charset="utf-8" />
   <meta name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

   <title>Admin IT-Shop</title>

   <meta name="description" content="" />

   <!-- Favicon -->
   <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/img/favicon/favicon.ico') }}" />

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com" />
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
   <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

   <!-- Icons. Uncomment required icon fonts -->
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fonts/boxicons.css') }}" />

   <!-- Core CSS -->
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/core.css') }}"
      class="template-customizer-core-css" />
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/css/theme-default.css') }}"
      class="template-customizer-theme-css" />
   <link rel="stylesheet" href="{{ asset('backend/assets/css/demo.css') }}" />

   <!-- Vendors CSS -->
   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

   <link rel="stylesheet" href="{{ asset('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />

   <!-- Page CSS -->

   <!-- Helpers -->
   <script src="{{ asset('backend/assets/vendor/js/helpers.js') }}"></script>

   <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
   <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
   <script src="{{ asset('backend/assets/js/config.js') }}"></script>
</head>

<body>
   @include('sweetalert::alert')
   <!-- Layout wrapper -->
   <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
         <!-- Menu -->

         <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
            <div class="app-brand demo">
               <a href="{{ route('dashboard') }}" class="app-brand-link">
                  <span class="app-brand-logo demo">
                     <img src="{{ asset('backend/assets/img/logoicon.png') }}" alt="">
                  </span>
                  <span class="app-brand-text demo menu-text fw-bolder ms-2">
                     IT Shop
                  </span>
               </a>

               <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large d-block d-xl-none ms-auto">
                  <i class="align-middle bx bx-chevron-left bx-sm"></i>
               </a>
            </div>

            <div class="menu-inner-shadow"></div>

            <ul class="py-1 menu-inner">
               <!-- Dashboard -->
               <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
                  <a href="{{ route('dashboard') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-home-circle"></i>
                     <div data-i18n="Analytics">Dashboard</div>
                  </a>
               </li>

               <li class="menu-item {{ request()->is('admin/product/index') ? 'active' : '' }}">
                  <a href="{{ route('p.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                     <div data-i18n="Analytics">Product</div>
                  </a>
               </li>

            </ul>

         </aside>
         <!-- / Menu -->

         <!-- Layout container -->
         <div class="layout-page">
            <!-- Navbar -->

            <nav
               class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
               id="layout-navbar">
               <div class="layout-menu-toggle navbar-nav align-items-xl-center me-xl-0 d-xl-none me-3">
                  <a class="px-0 nav-item nav-link me-xl-4" href="javascript:void(0)">
                     <i class="bx bx-menu bx-sm"></i>
                  </a>
               </div>

               <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                  Admin IT-Shop
                  <ul class="flex-row navbar-nav align-items-center ms-auto">
                     <!-- Place this tag where you want the button to render. -->


                     <!-- User -->
                     <li class="nav-item navbar-dropdown dropdown-user dropdown">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                           <div class="avatar avatar-online">
                              <img src="{{ asset('backend/assets/img/avatars/user.jpg') }}" alt
                                 class="h-auto w-px-40 rounded-circle" />
                           </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                           <li>
                              <a class="dropdown-item" href="#">
                                 <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                       <div class="avatar avatar-online">
                                          <img src="{{ asset('backend/assets/img/avatars/user.jpg') }}" alt
                                             class="h-auto w-px-40 rounded-circle" />
                                       </div>
                                    </div>
                                    <div class="flex-grow-1">
                                       <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                       <small class="text-muted">{{ Auth::user()->email }}</small>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li>
                              <div class="dropdown-divider"></div>
                           </li>
                           <li>
                              <a class="dropdown-item" href="/">
                                 <i class="bx bx-user me-2"></i>
                                 <span class="align-middle">Landing Page</span>
                              </a>
                           </li>
                           <li>
                              <!-- Authentication -->
                              <form method="POST" action="{{ route('logout') }}">
                                 @csrf
                                 <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                 </a>
                              </form>
                           </li>
                        </ul>
                     </li>
                     <!--/ User -->
                  </ul>
               </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
               <!-- Content -->

               @yield('con')

               <!-- / Content -->

               <!-- Footer -->
               <footer class="content-footer footer bg-footer-theme">
                  <div class="flex-wrap py-2 container-xxl d-flex justify-content-between flex-md-row flex-column">
                     <div class="mb-2 mb-md-0">
                        ©
                        <script>
                           document.write(new Date().getFullYear());
                        </script>
                        , made with ❤️ by
                        <a href="https://pongsawadi.ac.th/psc2019/" target="_blank"
                           class="footer-link fw-bolder">สาขาเทคโนโลยีสารสนเทศ
                           วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์</a>
                     </div>

                  </div>
               </footer>
               <!-- / Footer -->
               <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
         </div>
         <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
   </div>
   <!-- / Layout wrapper -->


   <!-- Core JS -->
   <!-- build:js assets/vendor/js/core.js -->
   <script src="{{ asset('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
   <script src="{{ asset('backend/assets/vendor/libs/popper/popper.js') }}"></script>
   <script src="{{ asset('backend/assets/vendor/js/bootstrap.js') }}"></script>
   <script src="{{ asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

   <script src="{{ asset('backend/assets/vendor/js/menu.js') }}"></script>
   <!-- endbuild -->

   <!-- Vendors JS -->
   <script src="{{ asset('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>

   <!-- Main JS -->
   <script src="{{ asset('backend/assets/js/main.js') }}"></script>

   <!-- Page JS -->
   <script src="{{ asset('backend/assets/js/dashboards-analytics.js') }}"></script>

   <!-- Place this tag in your head or just before your close body tag. -->
   <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
