<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Joy Bor O'zbekiston</title>
      <!-- Favicon -->
      <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
      <!-- Linearicon Font -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/linearicon/css/lnr-icon.css') }}">
      <!-- FontAwesome Free Font -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/font-awesome.min.css') }}">
      <!-- Slick slider CSS -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/slick/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/plugins/slick/css/slick-theme.min.css') }}">
      <!-- Color Switcher CSS -->
      <link rel="stylesheet" href="{{ asset('assets/plugins/color-switcher/css/jquery.colorpanel.css') }}">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets/css/blue.css') }}" id="cpswitch">
      @yield('header')
   </head>
   <body>
      <!-- Home Wrapper -->
      <div class="home-wrapper">
         <!-- Header -->
         <header>
            <!-- Main header Section -->
            <div class="main-header-section">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-12">
                        <!-- Main Menu -->
                        <div class="main-menu menu-section w-100 d-inline-block d-md-block">
                        <!-- Navbar menu-->
                        <nav class="navbar navbar-expand-lg p-0">
                        <div class="logo my-3 my-md-0">
                            <a class="navbar-brand w-25" href="{{ route('landing') }}">
                            <img
                            src="{{ asset('assets/img/joy-bor-logo.png') }}"
                            alt="logo image"
                            class="img-fluid"
                            >
                            </a>
                        </div>

                        <button
                            class="navbar-toggler d-block d-md-none pr-0 ml-auto mr-3 collapsed"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="icon-bar bg-theme top-bar"></span>
                            <span class="icon-bar bg-theme middle-bar"></span>
                            <span class="icon-bar bg-theme bottom-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse menu-items-position d-md-block" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto text-uppercase">
                                <li class="nav-item active">
                                    <a class="nav-link pl-md-0" href="{{ route('landing') }}">Главная <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('app.organisations') }}">Организации</a>
                                </li>
                                <li class="nav-item d-block">
                                    <a class="nav-link" href="{{ route('app.organisations') }}">О нас</a>
                                </li>
                            </ul>
                        </div>
                        </nav>
                        <!-- /Navbar menu-->
                    </div>
                        <!-- /Main Menu -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- /Main Header Section -->
         </header>
         <!-- /Header -->
         @yield('content')
         <!-- Footer -->
         <footer>
            <div class="top-footer py-5">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-md-3 text-left xs-text-center">
                        <img class="img img-fluid" src="{{ asset('assets/img/logo-footer.png') }}" alt="Footer Logo" />
                     </div>
                     <div class="col-md-6 text-center">
                        <ul class="my-4 my-md-0">
                           <li class="list-inline-item"><img class="img img-fluid" src="{{ asset('assets/img/pay1.png') }}" alt="Payment Method"/></li>
                           <li class="list-inline-item"><img class="img img-fluid" src="{{ asset('assets/img/pay2.png') }}" alt="Payment Method"/></li>
                           <li class="list-inline-item"><img class="img img-fluid" src="{{ asset('assets/img/pay3.png') }}" alt="Payment Method"/></li>
                           <li class="list-inline-item"><img class="img img-fluid" src="{{ asset('assets/img/pay4.png') }}" alt="Payment Method"/></li>
                           <li class="list-inline-item"><img class="img img-fluid mt-2 mt-sm-0" src="{{ asset('assets/img/pay5.png') }}" alt="Payment Method" /></li>
                        </ul>
                     </div>
                     <div class="col-md-3 text-right">
                        <div class="social-widget">
                           <ul class="lh-0 xs-text-center">
                              <li class="list-inline-item"><a class="d-inline-block" href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                              <li class="list-inline-item"><a class="d-inline-block" href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                              <li class="list-inline-item"><a class="d-inline-block" href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="middle-footer py-6">
               <div class="container">
                  <div class="row">
                     <div class="col-md-6 col-lg-4 mb-md-5 mb-lg-0">
                        <div class="company-info-widget mb-4 mb-md-0">
                           <h5 class="text-theme">About</h5>
                           <p class="pt-4">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                           <p class="pt-3 pb-0">Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3 mb-md-5 mb-lg-0">
                        <div class="mb-4 mb-md-0">
                           <h5 class="text-theme">My Account</h5>
                           <ul class="pt-4 footer-list-style">
                              <li><a class="text-footer" href="user-profile.html"><i class="lnr lnr-chevron-right mr-2"></i>Profile</a></li>
                              <li><a class="text-footer" href="user-wallet.html"><i class="lnr lnr-chevron-right mr-2"></i>Wallet</a></li>
                              <li><a class="text-footer" href="user-dashboard.html"><i class="lnr lnr-chevron-right mr-2"></i>Dashboard</a></li>
                              <li><a class="text-footer" href="user-add-item.html"><i class="lnr lnr-chevron-right mr-2"></i>Add Service</a></li>
                              <li class=" mb-0"><a class="text-footer mb-0" href="user-settings.html"><i class="lnr lnr-chevron-right mr-2"></i>Settings</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-2 mb-lg-0">
                        <div class="mb-4 mb-md-0">
                           <h5 class="text-theme">Links</h5>
                           <ul class="pt-4 footer-list-style">
                              <li><a class="text-footer" href="contact.html"><i class="lnr lnr-chevron-right mr-2"></i>Contact</a></li>
                              <li><a class="text-footer" href="blog.html"><i class="lnr lnr-chevron-right mr-2"></i>Blog</a></li>
                              <li><a class="text-footer" href="blog.html"><i class="lnr lnr-chevron-right mr-2"></i>FAQ</a></li>
                              <li class="mb-0"><a class="text-footer" href="terms-conditions.html"><i class="lnr lnr-chevron-right mr-2"></i>Terms of Use</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-md-6 col-lg-3 mb-lg-0">
                        <div class="app-widget mb-0">
                           <h5 class="text-theme">Download Apps</h5>
                           <div class="pt-4 mb-0">
                              <div class="media align-items-center mb-2">
                                 <a href="javascript:;" class="d-block w-100 radius-1 p-3">
                                    <span class="fa fa-android display-5" aria-hidden="true"></span>
                                    <span class="media-body d-inline-block ml-2">
                                       Get on GooglePlay
                                    </span>
                                 </a>
                              </div>
                              <div class="media align-items-center mb-0">
                                 <a href="javascript:;" class="d-block w-100 radius-1 p-3">
                                    <span class="fa fa-apple display-5" aria-hidden="true"></span>
                                    <span class="media-body d-inline-block ml-2">
                                       Get on AppStore
                                    </span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="bottom-footer text-center py-4">
               <div class="container">
                  <div class="row">
                     <div class="col-12">
                        <p>© Copyrights 2020. All Rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- /Footer -->
      </div>
      <!-- /Home Wrapper -->
      <!-- Optional JavaScript -->
      <!-- jQuery -->
      <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
      <!-- Bootstrap Core JS -->
      <script src="{{ asset('assets/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
      <!-- Slick Js-->
      <script src="{{ asset('assets/plugins/slick/js/slick.min.js') }}"></script>
      @yield('js')
      <!-- Custom JS -->
      <script src="{{ asset('assets/js/script.js') }}"></script>
   </body>
</html>
