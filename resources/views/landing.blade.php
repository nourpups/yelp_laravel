@extends('layouts.app')

@section('content')
         <!-- Slider-wrapper -->
         <section class="slider-wrapper">
            <div id="carouselExampleIndicators" class="home-carousel carousel slide py-8" data-ride="carousel" data-interval="false">
               <div class="carousel-inner">
                  <div class="carousel-item active py-10">
                     <div class="carousel-caption custom-caption positiony-0">
                        <h1 class="px-2 px-sm-0 d-inline-block">Nookx<span class="d-block text-white bg-theme px-4 mt-2">Multi Vendor HTML Template</span></h1>
                        <h4 class="my-4 my-md-5 px-4 px-md-5 px-sm-0">Marketplace template for buyers & sellers</h4>
                        <div class="row">
                           <div class="col-12">
                              <div class="btn-blk">
                                 <a class="d-inline-block btn btn-outline-theme radius-5 px-4 py-3" href="product-grid-view.html">Register Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item py-10">
                     <div class="carousel-caption custom-caption positiony-0">
                        <h1 class="px-2 px-sm-0 d-inline-block">Nookx<span class="d-block text-white bg-theme px-4 mt-2">Multi Vendor HTML Template</span></h1>
                        <h4 class="my-4 my-md-5 px-4 px-md-5 px-sm-0">Marketplace template for buyers & sellers</h4>
                        <div class="row">
                           <div class="col-12">
                              <div class="btn-blk">
                                 <a class="d-inline-block btn btn-outline-theme radius-5 px-4 py-3" href="product-grid-view.html">Register Now</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

  <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="no-bg carousel-control-prev-icon lnr lnr-chevron-left before-valign l-0" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
   </a>
   <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="no-bg carousel-control-next-icon lnr lnr-chevron-right before-valign r-0" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
   </a>

            </div>
            <div class="section-bottom-wrapper pb-5 text-center d-none d-md-block">
               <div class="container">
                  <div class="row">
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-users font-lg d-inline-block mb-3"></span>
                           <h5 class="font-bold">250+ Seller</h5>
                           <p>Lorem ipsum dolor sit.</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-star font-lg d-inline-block mb-3"></span>
                           <h5 class="font-bold">10+ Awards</h5>
                           <p>Lorem ipsum dolor sit.</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-briefcase font-lg d-inline-block mb-3"></span>
                           <h5 class="font-bold">500+ Services</h5>
                           <p>Lorem ipsum dolor sit.</p>
                        </div>
                     </div>
                     <div class="col-md-3">
                        <div class="box-blk text-white">
                           <span class="lnr lnr-smile font-lg d-inline-block mb-3"></span>
                           <h5 class="font-bold">230+ Customers</h5>
                           <p>Lorem ipsum dolor sit.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Slider-wrapper -->
         <section class="pdt-cat-wrapper py-6">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="pdt-cat-blk text-center">
                        <div class="row">
                           <div class="col-lg-8 col-md-10 m-auto">
                              <div class="mb-6">
                                 <h2 class="text-capitalize">explore from categories</h2>
                                 <h5 class="mt-4">Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</h5>
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-12">
                              <div class="pdt-cat-grid">
                                 <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-gift text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Fashion</h3>
                                             <h5>10 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-printer text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Electrical</h3>
                                             <h5>5 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-construction text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Construction</h3>
                                             <h5>14 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-paw text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Pet Care</h3>
                                             <h5>23 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-leaf text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Ayurvedic</h3>
                                             <h5>67 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4">
                                       <div class="border-theme radius-1 p-4 mb-6">
                                          <div class="icon-blk p-4 border-theme rounded-circle d-flex m-auto">
                                             <span class="lnr lnr-camera text-theme m-auto display-4"></span>
                                          </div>
                                          <div class="content-blk">
                                             <h3 class="pt-4 pb-2">Studio</h3>
                                             <h5>10 Ads Posted</h5>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-12">
                                    <div class="view-pdt-btn">
                                       <a href="product-grid-view.html" class="btn btn-md btn-theme radius-5 text-white py-3 px-4  text-capitalize shadow-theme-lg">view all products</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="pdt-filter-wrapper border-top py-6">
            <div class="container">
               <div class="row text-center">
                  <div class="col-lg-8 col-md-10 m-auto">
                     <div class="mb-6">
                        <h2 class="text-capitalize">explore our products</h2>
                        <h5 class="mt-4">Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-1.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Interior Decoration</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-1.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Aana</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Construct</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(4)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;41</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-2.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Skin Care</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-2.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Shiny</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Fashion</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(5)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;68</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-3.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Car Wash</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-3.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Miller</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Repair</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(3)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;77</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-xl-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-4.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Pet Boarding</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-4.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Smily</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Pet Care</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(4)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;86</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-md-0 shadow border">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-5.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Stone Healing</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-5.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>Linda</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Ayurvedic</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(3)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;23</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6 pdt card-deck mx-0">
                     <div class="card mx-0 mb-0 mb-md-0 shadow border ">
                        <div class="wishlist-blk">
                           <a href="wishlist-grid-view.html"><i class="fa fa-heart-o text-white"></i></a>
                        </div>
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/service-img-6.jpg" alt="Card image">
                           <div class="image-overlay">
                              <a href="single-product.html" class="btn btn-outline-white radius-5 py-3 px-4  text-capitalize">More Info</a>
                           </div>
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="single-product.html" class="text-link">Wedding Shot</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="media align-items-center">
                                          <a href="user-profile.html" class="text-link d-inline-block">
                                             <img src="assets/img/user-avatar-6.png" alt="John Doe" class="mr-3 rounded-circle d-inline-block">
                                             <div class="media-body d-inline-block">
                                                <p><strong>David</strong></p>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-cat-tag text-right">
                                          <span class="bg-theme text-white px-3 py-1 radius-5">Studio</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-2">
                                 <div class="row align-items-center">
                                    <div class="col-6">
                                       <div class="rating-blk d-inline-block">
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star text-rating font-sm"></i>
                                          <i class="fa fa-star-o text-rating font-sm"></i>
                                       </div>
                                       <div class="pdt-rating-btn ml-1 d-inline-block">
                                          <span class="text-theme"><strong>(4)</strong></span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="pdt-contact-btn text-right">
                                          <span class="p-2 display-5">
                                          <a href="tel:1234567890">
                                          <span class="lnr lnr-phone-handset"></span>
                                          </a>
                                          </span>
                                          <span class="p-2 display-5">
                                          <a href="mailto:nookx@example.com">
                                          <span class="lnr lnr-inbox"></span>
                                          </a>
                                          </span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-section-3 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-4">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-add-to-cart text-center">
                                          <a class="btn-outline-theme d-block radius-5 px-3 py-2" href="cart-page.html">
                                          <span class="lnr lnr-cart"></span>&nbsp;Add to Cart -
                                          <span class=""><i class="fa fa-usd"></i>&nbsp;95</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="view-pdt-btn text-center mt-5">
                        <a href="product-grid-view.html" class="btn btn-md btn-theme radius-5 text-white py-3 px-4  text-capitalize shadow-theme-lg">view all products</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section class="insights-wrapper py-6">
            <div class="container">
               <div class="row">
                  <div class="col-lg-8 col-md-10 text-center mx-auto">
                     <div class="mb-6 text-center">
                        <h2 class="text-capitalize">Trending blog news</h2>
                        <h5 class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</h5>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 insights mx-0 mb-4 mb-md-0">
                     <div class="card mx-0">
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/blog-post-1.jpg" alt="Card image">
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="blog-single-post.html" class="text-grey">Simple & Easy way to hire a Service</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-2">
                                 <div class="row">
                                    <div class="col-6">
                                       <div class="insight-posted-date">
                                          <span class="lnr lnr-clock text-theme"></span>
                                          <span>&nbsp;14 Aug 2019</span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="insight-share text-right">
                                          <a href="javascript:;" class="collasped" data-toggle="collapse" data-target="#share-post-1" aria-expanded="true">
                                          <i class="fa fa-share-alt" aria-hidden="true"></i>
                                          <span>&nbsp;Share post</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="share-post-1" class="collapse py-3 px-0">
                                    <div class="">
                                       <ul class="lh-0">
                                          <li class="list-inline-item text-white"><a class="d-inline-block p-3 btn-outline-theme" href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 insights mx-0 mb-4 mb-md-0">
                     <div class="card mx-0">
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/blog-post-2.jpg" alt="Card image">
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0">
                              <a href="blog-single-post.html" class="text-grey">Learn more about the verified Seller</a>
                           </h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-2">
                                 <div class="row">
                                    <div class="col-6">
                                       <div class="insight-posted-date">
                                          <span class="lnr lnr-clock text-theme"></span>
                                          <span>&nbsp;05 Sep 2019</span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="insight-share text-right">
                                          <a href="javascript:;" class="collasped" data-toggle="collapse" data-target="#share-post-2" aria-expanded="true">
                                          <i class="fa fa-share-alt" aria-hidden="true"></i>
                                          <span>&nbsp;Share post</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="share-post-2" class="collapse py-3 px-0">
                                    <div class="">
                                       <ul class="lh-0">
                                          <li class="list-inline-item text-white"><a class="d-inline-block p-3 btn-outline-theme" href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 insights mx-0 mt-md-4 mt-lg-0">
                     <div class="card mx-0">
                        <div class="card-image">
                           <img class="card-img-top" src="assets/img/blog-post-3.jpg" alt="Card image">
                        </div>
                        <div class="card-body p-3">
                           <h4 class="card-title mb-0"><a href="blog-single-post.html" class="text-grey">Tips to Know your buyers expectations</a></h4>
                           <div class="card-text">
                              <div class="card-section-1 py-3">
                                 <div class="row">
                                    <div class="col-12">
                                       <div class="pdt-description">
                                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <hr class="mt-0">
                              <div class="card-section-2">
                                 <div class="row">
                                    <div class="col-6">
                                       <div class="insight-posted-date">
                                          <span class="lnr lnr-clock text-theme"></span>
                                          <span>&nbsp;01 Jan 2019</span>
                                       </div>
                                    </div>
                                    <div class="col-6">
                                       <div class="insight-share text-right">
                                          <a href="javascript:;" class="collasped" data-toggle="collapse" data-target="#share-post-3" aria-expanded="true">
                                          <i class="fa fa-share-alt" aria-hidden="true"></i>
                                          <span>&nbsp;Share post</span>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div id="share-post-3" class="collapse py-3 px-0">
                                    <div class="">
                                       <ul class="lh-0">
                                          <li class="list-inline-item text-white"><a class="d-inline-block p-3 btn-outline-theme" href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                                          <li class="list-inline-item"><a class="d-inline-block btn-outline-theme p-3" href="javascript:;"><i class="fa fa-google-plus"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12">
                     <div class="text-center mt-6">
                        <a href="blog.html" class="btn btn-md btn-theme radius-5 text-white py-3 px-4  text-capitalize shadow-theme-lg">view all blogs</a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
@endsection
