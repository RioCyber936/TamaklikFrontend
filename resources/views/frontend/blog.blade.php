@extends('frontend.layouts.main')
@section('main-container')
        <main>

            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="single-page page-height3 d-flex align-items-center" data-background="{{asset('frontend/images/shop/banner-shop-1.jpg')}}">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title b-l pt-65 pb-75 text-center">
                                        <h2 class="text-capitalize theme-color mb-20">Blog</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Blog</li>
                                            </ol>
                                        </nav>
                                    </div><!-- /page title -->
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div><!-- /container -->
                    <!-- </div> -->
                </div><!-- /single-slider -->
            </div>
            <!-- slider-area-end=  -->

            <!-- ====== right-sidebar-area-start================================ -->
            <div class="blog-siderbar-area">
                <div class="right-sidebar-area">
                    <div class="container-wrapper extra-padding-10">
                        <div class="row pb-60">
                            <div class="col-xl-3  col-lg-3  col-md-12  col-sm- col-">
                                <div id="accordion" class="shop-sidebar-btn-accordion blog-sidebar-accor-l over-hidden pr-20">
                                    <div class="card border-0">
                                        <div class="card-header theme-bg py-1" id="accessories">
                                            <button class="shop-accordion-btn collapsed width100 theme-bg border-0 px-0" data-toggle="collapse" data-target="#collapseAccessories" aria-expanded="false" aria-controls="collapseAccessories">
                                                <span class="side-bar-accor-btn d-flex justify-content-between align-items-center py-2">
                                                    <span class="icon-align-left"></span>
                                                    <span class="shop-accor-left-icon"><span class="icon-chevron-up"></span></span>
                                                </span>
                                            </button>
                                        </div>
                                        <div id="collapseAccessories" class="collapse" aria-labelledby="accessories" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="rs-right panel">
                                                <div class="sidebar-widget mb-40">
                                                    <div class="blog-search position-relative">
                                                        <input class="form-control" type="text" placeholder="Search ...">
                                                        <a class="position-absolute" href="#"><span class="icon-search"></span></a>
                                                    </div>
                                                </div><!-- /sidebar-widget -->
                                                <div class="sidebar-widget mb-30">
                                                    <h4 class="pb-15">Blog Categories</h4>
                                                    <ul>
                                                        <li class="pb-15 d-block">Dining Tablets
                                                            <span class="accordion"></span>
                                                            <ul class="panel">
                                                                <li><a class="pb-15 pt-20 d-block" href="#">Stools & Benches</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="pb-15 d-block" href="#">Music</a></li>
                                                        <li><a class="pb-15 d-block" href="#">Photography</a></li>
                                                        <li><a class="pb-15 d-block" href="#">Sofas & Daybeds</a></li>
                                                        <li><a class="pb-15 d-block" href="#">Travel</a></li>
                                                        <li><a class="pb-15 d-block" href="#">Uncategorized</a></li>
                                                        <li><a class="pb-15 d-block" href="#">Wordpress</a></li>
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                                <div class="sidebar-widget mb-50">
                                                    <h4 class="pb-20">Recent Posts</h4>
                                                    <ul class="recent-post">
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="{{asset('frontend/images/blog/post-img1.jpg')}}" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                                </h6>
                                                                <span>May 23, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="{{asset('frontend/images/blog/post-img2.jpg')}}" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                                </h6>
                                                                <span>June 24, 2020</span>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex mb-20">
                                                            <a href="blog-details.html"><img src="{{asset('frontend/images/blog/post-img3.jpg')}}" alt="blog"></a>
                                                            <div class="r-post-content ml-15">
                                                                <h6 class="theme-color">
                                                                    <a href="blog-details.html">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                                </h6>
                                                                <span>Aug 26, 2020</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                                <div class="sidebar-widget mb-40">
                                                    <h4 class="pb-15">Recent Comments</h4>
                                                    <div class="r-comments">
                                                        <p>
                                                            <span class="comment-author-link">admin</span>
                                                            on
                                                            <a href="https://blueskytechco.com/homess/anteposuerit-litterarum-formas-2/#comment-72">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                        </p>
                                                        <p>
                                                            <span class="comment-author-link">admin</span>
                                                            on
                                                            <a href="https://blueskytechco.com/homess/anteposuerit-litterarum-formas-2/#comment-72">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                        </p>
                                                        <p>
                                                            <span class="comment-author-link">admin</span>
                                                            on
                                                            <a href="https://blueskytechco.com/homess/anteposuerit-litterarum-formas-2/#comment-72">Outsmart Today’s Downpour With These 14 Rainy Day</a>
                                                        </p>
                                                    </div>
                                                </div><!-- /sidebar-widget -->
                                                <div class="sidebar-widget mb-40">
                                                    <h4 class="pb-15">Archives</h4>
                                                    <ul class="meta">
                                                        <li>
                                                            <a href="#">May 2018</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">November 2017</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">August 2016</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">July 2016</a>
                                                        <li>
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                                <div class="sidebar-widget">
                                                    <h4 class="pb-15">Meta</h4>
                                                    <ul class="meta">
                                                        <li>
                                                            <a href="#">Log in</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Entries RSS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Comments RSS</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">WordPress.org</a>
                                                        <li>
                                                    </ul>
                                                </div><!-- /sidebar-widget -->
                                            </div><!-- rs-right -->
                                        </div>
                                        </div>
                                    </div>
                                </div><!-- /shop-sidebar-btn-accordion -->


                            </div><!-- /col -->
                            <div class="col-xl-9  col-lg-9  col-md-12  col-sm- col-">
                                <div class="blog-rs-left single-blog">
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog3.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog5.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog6.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog7.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="{{asset('frontend/images/blog/blog1.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                    <div class="row pb-20">
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="blog-sidebar-img pr-40 mb-30">
                                                <div class="blog-img">
                                                    <a href="blog-details.html" class="d-block">
                                                        <img class="width100 height100" src="images/blog/blog4.jpg" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div><!-- /col -->
                                        <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                                            <div class="single-blog-content mb-30">
                                                <ul class="single-blog-info d-flex mb-6">
                                                    <li class="admin mr-1">
                                                        <span>By</span>
                                                        <span><a href="#" class="secondary-color" tabindex="0">Admin</a></span>
                                                    </li>
                                                    <li><span>/</span></li>
                                                    <li class="date ml-1">
                                                        <span>May</span>
                                                        <span>23,</span>
                                                        <span>2018</span>
                                                    </li>
                                                </ul>
                                                <h3><a href="blog-details.html" tabindex="0">Outsmart Today’s Downpour With These 14 Rainy Day</a></h3>
                                                <!-- audio start -->
                                                    <div class="audio-area">
                                                        <audio class="audio" preload="auto" controls>
                                                            <source src="audio/sample-audio.mp3">
                                                        </audio>
                                                    </div>
                                                <!-- audio end -->
                                                <p class="pt-2">Diga, Koma and Torus are three kitchen utensils designed for Ommo, a new design-oriented brand introduced at the Ambiente show in February 2016. Minimalist approach, bright colors, stainless steel and matte plastic, abstract shapes and curved lines are the defining …</p>
                                                <a href="blog-details.html" class="blog-btn secondary-color">Read More</a>
                                            </div>
                                        </div><!-- /col -->
                                    </div><!-- /row -->
                                </div><!-- blog-rs-left -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                        <div class="bottom-line"></div>
                    </div><!-- /container -->
                </div>
            </div><!-- /blog-siderbar-area -->
            <!-- right-sidebar-area-end -->

            <!-- ====== pagination-area-start================================ -->
            <div class="pagination-area mt-50 over-hidden">
                <div class="container-wrapper extra-padding-15">
                    <div class="row pb-110">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <nav class="pagination-page" aria-label="Page navigation example">
                                <ul class="pagination align-items-center justify-content-center">
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="bottom-line"></div>
                </div><!-- /container -->
            </div>
            <!-- pagination-area-end -->

            <!-- ====== subscribe-area-start ========================================= -->
            <div class="subscribe-area mt-100 mb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8  col-lg-10  col-md-12  col-sm-12 col-12 offset-xl-2 offset-lg-1">
                            <div class="section-title text-center pl-50 pr-50">
                                <h2 class="pb-20">Sign Up For Our Newsletter </h2>
                                <p>Subscribe to the Homess mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                            </div><!-- /section-title -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="row">
                        <div class="col-xl-10  col-lg-12  col-md-12  col-sm-12 col-12 offset-xl-1">
                            <div class="subscribe-form text-center mt-35 pl-90 pr-90">
                                <form action="#">
                                    <input class="sub-name form-control text-center" type="text" name="-name" id="name" placeholder="Subscribe to our newsletter...">
                                    <a href="#" class="sub-btn d-inline-block text-white theme-bg border-0 mt-50">Subscribe</a>
                                </form>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /container -->
            </div>
            <!-- subscribe-area-end  -->

        </main>
@endsection
