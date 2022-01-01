<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TAMAKLIK </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{asset('frontend/images/logo/favicons.png')}}" type="image/x-icon">

    <!-- All css here -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/audioplayer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/default.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
</head>
<body>

<!--  ====== preloader start =============================================  -->
<div id="preloader">
    <div class="circle">
        <div class="inner"></div>
    </div>
</div>
<!--  preloader-end  -->

<!--  ====== header-area-start=======================================  -->
<header>
    <div id="header-sticky" class="header-area">
        <div class="header position-absolute pl-30 pr-30 pt-45 pb-45">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between position-relative">
                    <div class="col-xl-5 col-lg-5 col-md-4 col-sm-4 col-4 pr-0  d-lg-flex align-items-lg-center position-static">
                        <div class="d-block d-lg-none">
                            <a class="mobile-menubar" href="javascript:void(0);"><span class="icon-menu"></span></a>
                        </div>
                        <div class="main-menu">
                            <nav id="mobile-menu">
                                <ul class="d-block">
                                    <li><a class="active" href="{{'/'}}">Home</a>

                                    </li>
                                    <li class="full-mega-menu-position"><a href="{{'/shop'}}">Shop</a>

                                    </li>
                                    <li class="full-mega-menu-position"><a href="{{('/blog')}}">Blog</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="mega-menu mega-dropdown-menu border-gray pt-30 pb-20 pl-30 pr-30">
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                            <li><a href="login.html">Login & Register</a></li>
                                            <li><a href="faq-page.html">F.A.Q.’s</a></li>
                                            <li><a href="page-not-found.html">404 pages</a></li>
                                            <li><a href="privacy-page.html">Privacy Page</a></li>
                                            <li><a href="term-and-conditon.html">Term & Conditions</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Portfolio</a>
                                        <ul class="mega-menu mega-dropdown-menu border-gray pt-30 pb-20 pl-30 pr-30">
                                            <li><a href="single-project.html">Single project</a></li>
                                            <li><a href="two-column-project.html">Two Columns</a></li>
                                            <li><a href="three-column-project.html">Three Columns</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- /main-menu -->
                    </div><!-- /col -->
                    <div class="col-xl-2  col-lg-2 col-md-4 col-sm-4 col-4 d-flex align-items-center justify-content-center">
                        <div class="logo">
                            <a href="index.html" class="d-block" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Homess">
                                <img src="{{asset('frontend/images/logo/logo.png')}}" alt="HOMESS">
                            </a>
                        </div>
                    </div><!-- /col -->
                    <div class="col-xl-5  col-lg-5 col-md-4 col-sm-4 col-4">
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <ul class="header-login d-none d-lg-block">
                                <li>
                                    <a href="{{('/login')}}" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Login / Register">
                                        <span class="icon-users"></span>
                                        <span class="logo-register ml-2">Login / Register</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="header-search d-none d-lg-block">
                                <li><span class="icon-search"></span></li>
                            </ul>
                            <ul class="header-heart d-none d-lg-block">
                                <li><a href="{{('/wishlist')}}" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="View wishlist"><span class="icon-heart"></span></a></li>
                            </ul>
                            <ul>
                                <li class="position-relative">
                                    <div class="header-shopping-cart"><span class="icon-shopping-bag"></span><sup class="s-count">0</sup>
                                    </div>
                                    <div class="header-shopping-cart-details position-absolute bg-white border-gray pl-30 pr-30 pt-30 pb-30">
                                        <div class="h-shop-cart-contetn over-x-heddne over-y-scroll">
                                            <ul class="d-flex pb-20 border-b-light-gray">
                                                <li class="h-shop-cart-img pl-0">
                                                    <a class="d-block" href="product-details.html"><img src="{{asset('frontend/images/product/product1.jpg')}}" alt=""></a>
                                                </li>
                                                <li class="pl-3">
                                                    <h6 class="single-product-name"><a href="product-details.html">Blossom Porcelain Side Plates</a></h6>
                                                    <span class="primary-color">1<span>x</span>$320.00</span>
                                                </li>
                                                <li class="s-p-remove px-1 pl-0">
                                                    <span>x</span>
                                                </li>
                                            </ul>
                                            <ul class="d-flex pt-20 pb-20 border-b-light-gray">
                                                <li class="h-shop-cart-img pl-0">
                                                    <a class="d-block" href="product-details.html"><img src="images/product/product5.jpg" alt=""></a>
                                                </li>
                                                <li class="pl-3">
                                                    <h6 class="single-product-name"><a href="product-details.html">Chair living room fiberglass</a></h6>
                                                    <span class="primary-color">1<span>x</span>$120.00</span>
                                                </li>
                                                <li class="s-p-remove px-1 pl-0">
                                                    <span>x</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="s-sub-t mt-3 mb-20">
                                            <span class="theme-color">Subtotal:</span>
                                            <span class="theme-color float-right"> $440.00</span>
                                        </div>
                                        <a class="more-view-btn d-block theme-color border-light-gray2 text-center white-bg theme-color text-capitalize mb-20" href="shop.html">view cart</a>
                                        <a href="{{('/checkout')}}" class="sub-btn d-inline-block width100 text-white text-uppercase theme-bg border-0 ">checkout</a>
                                    </div><!-- /header-shopping-cart -->
                                </li>
                            </ul>
                            <ul class="d-none d-lg-block">
                                <li class=" position-relative">
                                    <div class="header-setting"><span class="icon-settings"></span></div>
                                    <div class="header-setting-content position-absolute pt-30 pl-30 pr-30 pb-30">
                                        <h5>Language</h5>
                                        <ul class="mb-20 pt-1">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Germany</a></li>
                                        </ul>
                                        <h5>Currencies</h5>
                                        <ul class="pt-1">
                                            <li><a href="#">USD – US Dollar</a></li>
                                            <li><a href="#">EUR – Euro</a></li>
                                            <li><a href="#">GBP – British Pound</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div><!-- /header-right -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
    </div><!-- /header-bottom -->
</header>
<!--  header-area-end  -->

<!--  ====== header extra info start================================== -->
<!-- side-mobile-menu start -->
<div class="side-mobile-menu bg-white pt-20 pb-30 pl-30 pr-30">
    <div class="close-icon float-right pt-10">
        <a href="javascript:void(0);"><span class="icon-clear"></span></a>
    </div>
    <div class="header-search-content pt-90">
        <h4 class="pb-10 text-center">Search in:</h4>
        <ul class="">
            <li><a class="active" href="shop.html">All categories</a></li>
            <li><a href="shop.html">Chair & Tables</a></li>
            <li><a href="shop.html">Floor</a></li>
            <li><a href="shop.html">Home Accessories</a></li>
            <li><a href="shop.html">Ceiling lights</a></li>
        </ul>
        <form action="contact.html" class="position-relative pt-10 pb-15">
            <input class="form-control" type="text" placeholder="Search Products...">
            <a class="position-absolute" href="javascript:void(0)"><span class="icon-search"></span></a>
        </form>
    </div>
    <div class="mobile-menu"></div>
    <div class="menu-login pt-40">
        <ul class="header-login d-flex justify-content-between border-b-light-gray ">
            <li><a href="index.html">Login / register</a></li>
            <li><a href="javascript:void(0)"><span class="icon-users"></span></a></li>
        </ul>
        <ul class="header-heart d-flex justify-content-between border-b-light-gray">
            <li><a href="#">Wishlist</a></li>
            <li><a href="wishlist.html"><span class="icon-heart"></span></a></li>
        </ul>
    </div><!-- /header-right -->
    <div class="mobile-header-setting-more position-relative mb-200">
        <ul class="border-bottom-gray d-flex justify-content-between pt-15 pb-15">
            <li><span>More options</span></li>
            <li class="setting-more">
                <span class="d-block">+</span>
            </li>
        </ul>
        <div class="mobile-h-setting-more-content border-0 pt-15 pb-30">
            <div class="setting-more-close-icon bg-white float-right pt-10">
                <span>_</span>
            </div>
            <h5>Language</h5>
            <ul class="mb-20 pt-1 pl-20">
                <li><a href="#">English</a></li>
                <li><a href="#">France</a></li>
                <li><a href="#">Germany</a></li>
            </ul>
            <h5>Currencies</h5>
            <ul class="pt-1 pl-20">
                <li><a href="#">USD – US Dollar</a></li>
                <li><a href="#">EUR – Euro</a></li>
                <li><a href="#">GBP – British Pound</a></li>
            </ul>
        </div>
    </div><!-- /mobile-header-setting-more -->
</div><!-- /side-mobile-menu -->
<div class="body-overlay"></div>

<!-- header search details start -->
<div class="header-search-details text-center white-bg pt-55 pl-60 pr-60">
    <div class="close-icon float-right">
        <a href="javascript:void(0);"><span class="icon-clear"></span></a>
    </div>
    <div class="header-search-content mt-180 ml-130 mr-130">
        <h3 class="">Search in:</h3>
        <ul class="d-flex justify-content-center mt-25">
            <li><a class="active" href="shop.html">All categories</a></li>
            <li><a href="shop.html">Chair & Tables</a></li>
            <li><a href="shop.html">Floor</a></li>
            <li><a href="shop.html">Home Accessories</a></li>
            <li><a href="shop.html">Ceiling lights</a></li>
        </ul>
        <form action="#" class="position-relative pt-50">
            <input class="form-control" type="text" placeholder="Search Products...">
            <a class="position-absolute" href="#"><span class="icon-search"></span></a>
        </form>
    </div>
</div><!-- /extra-info -->
<!-- header extra info end  -->
