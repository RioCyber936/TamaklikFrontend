@extends('frontend.layouts.main')
@section('main-container')
        <main>
            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="single-page page-height3 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title pt-65 pb-45 text-center">
                                        <h2 class="text-capitalize theme-color mb-20">Shop</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Shop page</li>
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
            <div class="right-sidebar-area">
                <div class="container-wrapper extra-padding-15">
                    <div class="row">
                        <div class="col-xl-3  col-lg-3  col-md-12  col-sm- col-">
                            <div id="accordion" class="shop-sidebar-btn-accordion shop-left-sidebar-btn-accordion over-hidden">
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
                                        <div class="shop-l-right rs-right mt-30 panel">
                                            <div class="sidebar-widget mb-25">
                                                <h4 class="pb-15">Product Categories</h4>
                                                <ul>
                                                    <li><a class="pb-15 d-block" href="#">Armchair DAR <span>(0)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Bathroom Deco <span>(4)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Chair & Tables <span>(18)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Chest of Drawers <span>(6)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Cleaning Tools <span>(3)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Coffeepots Teapots <span>(1)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Creative Lighting <span>(6)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Creative Tables <span>(4)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">DAR Armchair <span>(0)</span></a></li>
                                                    <li class="pb-15 d-block">Deco <span>(20)</span>
                                                        <span class="accordion"></span>
                                                        <ul class="panel">
                                                            <li><a class="pb-15 pt-20 d-block" href="#">Floor<span>(19)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Outdoor<span>(16)</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="pb-15 d-block" href="#">Decorate & Lighting <span>(18)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Dressing Tables <span>(5)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Home Accessories <span>(20)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Leather Modular Sofa <span>(8)</span></a></li>
                                                    <li class="pb-15 d-block">Lighting <span>(21)</span>
                                                        <span class="accordion"></span>
                                                        <ul class="panel">
                                                            <li><a class="pb-15 pt-20 d-block" href="#">Bathroom Lights<span>(19)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Ceiling lights<span>(16)</span></a></li>
                                                            <li><a class="pb-15 pt-2 d-block" href="#">Tables lamp<span>(19)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Wall lights<span>(16)</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="pb-15 d-block" href="#">Sphere Light <span>(21)</span></a></li>
                                                    <li><a class="pb-15 d-block" href="#">Teakettles <span>(0)</span></a></li>
                                                    <li class="pb-15 d-block">Windsor chair <span>(10)</span>
                                                        <span class="accordion"></span>
                                                        <ul class="panel">
                                                            <li><a class="pb-10 pt-15 d-block" href="#">Chair & Tables H6<span>(19)</span></a></li>
                                                            <li><a class="pb-1 d-block" href="#">Cleaning Tools H6<span>(16)</span></a></li>
                                                            <li><a class="pb-1 pt-2 d-block" href="#">Coffeepots Teapots H6<span>(19)</span></a></li>
                                                            <li><a class="pb-10 pt-2 d-block" href="#">Home Accessories H6<span>(14)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Kitchen & Bath H6<span>(16)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Lighting & Decorate H6<span>(16)</span></a></li>
                                                            <li><a class="pb-2 d-block" href="#">Outdoor Style H6<span>(12)</span></a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div><!-- /sidebar-widget -->
                                            <div class="sidebar-widget mb-45">
                                                <h4 class="pb-20">Filter by price</h4>
                                                    <div class="f-price-filter">
                                                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content ml-10 mr-2"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 15%; width: 45%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div></div>
                                                        <div>
                                                            <form action="#" class="d-flex justify-content-between pt-25 align-items-center">
                                                                <button class="filter-btn border-0" type="submit">Filter</button>
                                                                <div class="price-amount">
                                                                    <label class="mb-0" for="amount">Price :</label>
                                                                    <input type="text" id="amount" readonly="" class="float-right theme-color border-0 p-0 pl-1 pt-1">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                            </div><!-- /sidebar-widget -->
                                            <div class="sidebar-widget mb-25">
                                                <h4 class="pb-15">Any Size</h4>
                                                <div class="size">
                                                    <ul>
                                                        <li><a href="#">L</a><span>(2)</span></li>
                                                        <li><a href="#">M</a><span>(3)</span></li>
                                                        <li><a href="#">S</a><span>(2)</span></li>
                                                        <li><a href="#">XL</a><span>(5)</span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /sidebar-widget -->
                                            <div class="sidebar-widget mb-40">
                                                <h4 class="pb-20">Choose Color</h4>
                                                <ul class="color-selector">
                                                    <li>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="option-input radio p-d-blue" name="example">
                                                            <a href="#"><span class="pl-15">dark blue</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="option-input radio p-l-black" name="example">
                                                            <a href="#"><span class="pl-15">Light black</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="option-input radio p-gray" name="example">
                                                            <a href="#"><span class="pl-15">Gray</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="option-input radio p-green" name="example">
                                                            <a href="#"><span class="pl-15">Green</span></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex align-items-center mb-3">
                                                            <input type="checkbox" class="option-input radio p-pink" name="example">
                                                            <a href="#"><span class="pl-15">Pink</span></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div><!-- /sidebar-widget -->
                                            <div class="sidebar-widget mb-35">
                                                <h4 class="pb-1">Brand</h4>
                                                <div class="brand">
                                                    <ul>
                                                        <li class="pb-10"><a href="#">Sony</a></li>
                                                        <li class="pb-10"><a href="#">Panasonic</a></li>
                                                        <li class="pb-10"><a href="#">Apple</a></li>
                                                        <li class="pb-10"><a href="#">Samsung</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- /sidebar-widget -->
                                            <div class="sidebar-widget">
                                                <h4 class="pb-15">Popular Tags</h4>
                                                <ul class="search-tag">
                                                    <li><a href="#">Art<span>(3)</span></a></li>
                                                    <li><a href="#">Bathroom<span>(2)</span></a></li>
                                                    <li><a href="#">Bowls <span>(9)</span></a></li>
                                                    <li><a href="#">Clocks<span>(4)</span></a></li>
                                                    <li><a href="#">Decor<span>(2</span></a></li>
                                                    <li><a href="#">Dining<span>(9)</span></a></li>
                                                    <li><a href="#">Flowerpots<span>(6)</span></a></li>
                                                </ul>
                                            </div><!-- /sidebar-widget -->
                                        </div><!-- rs-right -->
                                    </div>
                                    </div>
                                </div>
                            </div><!-- /shop-sidebar-btn-accordion -->
                        </div><!-- /col -->
                        <div class="col-xl-9  col-lg-9  col-md-12  col-sm- col-">
                            <div class="shop-rs-left">
                                <!-- ====== shop-header-area-start=============================================== -->
                                <div class="shop-header-area mt-20">
                                    <div class="px-2">
                                        <div class="row align-items-center">
                                            <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12">
                                                <div class="shop-title mb-10">
                                                    <h6 class="mb-0">Showing all 12 results</h6>
                                                </div>
                                            </div><!-- /col -->
                                            <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12 d-sm-flex align-items-center justify-content-end">
                                                <div class="shop-title-right">
                                                    <form action="#" class="mr-20 mb-10 product-filter">
                                                        <select class="form-control border-0 p-0 rounded-0" id="exampleFormControlSelect1">
                                                            <option value="menu_order" selected="selected">Default sorting</option>
                                                            <option value="popularity">Sort by popularity</option>
                                                            <option value="rating">Sort by average rating</option>
                                                            <option value="date">Sort by latest</option>
                                                            <option value="price">Sort by price: low to high</option>
                                                            <option value="price-desc">Sort by price: high to low</option>
                                                        </select>
                                                    </form>
                                                </div><!-- /product-selection -->
                                                <div class="view-mode d-flex align-items-center mb-10">
                                                    <span class="mr-2">Views:</span>
                                                    <ul class="single-product-tab nav" id="myTab" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active p-tab-btn" id="s-p-list1-tab" data-toggle="tab" href="#s-p-list1" role="tab" aria-controls="s-p-list1" aria-selected="true" title="Grid">
                                                                <span class="icon-grid"></span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link p-tab-btn" id="s-p-list2-tab" data-toggle="tab" href="#s-p-list2" role="tab" aria-controls="s-p-list2" aria-selected="false" title="List">
                                                                <span class="icon-list"></span>
                                                            </a>
                                                        </li>
                                                    </ul><!-- /single-product-tab nav -->
                                                </div>
                                            </div><!-- /col -->
                                        </div><!-- /row -->
                                    </div><!-- /container -->
                                </div>
                                <!-- shop-header-area-end -->
                                <!-- ====== product-tabs-area-start================================ -->
                                <div class="product-tabs-area product-area pt-20 over-hidden">
                                    <div class="product-content">
                                        <div class="single-product-tab-content tab-content" id="myTabContent">
                                            <div class="tab-pane show active" id="s-p-list1" role="tabpanel" aria-labelledby="s-p-list1">
                                                <div class="row products-tab-grid">
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1000ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product3.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover3.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Lamp,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Lamp with Dimmer Switch</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>300.00</span>
                                                                                <span>-</span>
                                                                                <span class="theme-color"><span>$</span>900.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Select option">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>Select option
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="600ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product9.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover9.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Flowerpots</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Blossom Porcelain Side bottle</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>320.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="500ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product5.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover5.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Chair living room fiberglass</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>120.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="100ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('images/product/product1.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('ages/product/product-hover1.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Clocks,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Blossom Porcelain Side Plates</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color">$</span><span>320.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                                        <span class="text-center text-white d-block black-bg">New</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product2.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover2.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">bowls,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Designs Woolrich Klettersack Backpack</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="secondary-color"><span>$</span>200.00</span>
                                                                            </li>
                                                                            <li>
                                                                                <del class="primary-color pl-10"><span>$ 220.00</span></del>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="900ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block secondary-bg">Sale</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product10.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover10.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Clocks,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Wood design dining chair</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="secondary-color"><span>$</span>320.00</span>
                                                                            </li>
                                                                            <li>
                                                                                <del class="primary-color pl-10"><span>$ 320.00</span></del>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="800ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product6.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover6.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Art,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Designs Woolrich Klettersack Backpack</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>320.00</span>
                                                                                <span>-</span>
                                                                                <span class="theme-color"><span>$</span>620.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1100ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                                        <span class="text-center text-white d-block black-bg">New</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product7.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover7.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">clock,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Wood design bedroom clock</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="secondary-color"><span>$</span>320.00</span>
                                                                            </li>
                                                                            <li>
                                                                                <del class="primary-color pl-10"><span>$ 320.00</span></del>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Go to buy">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>Go to buy
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1300ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product4.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover4.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Clocks,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Bronze Round Wall Mirror</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>320.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="150ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product17.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover17.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Chair,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Organic Chair living room fiberglass</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>220.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="View product">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>View product
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1700ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product12.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover12.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Bag,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Saint Laurent College bag</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color">$</span><span>540.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-6 col-12 pl-20 pr-20">
                                                        <div class="s-p-wrapper  wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="300ms">
                                                            <div class="single-product mb-40">
                                                                <div class="single-product-img position-relative over-hidden">
                                                                    <div class="single-product-label position-absolute">
                                                                        <span class="text-center text-white d-block secondary-bg">Sale</span>
                                                                    </div><!-- /product-label -->
                                                                    <a class="position-relative d-block" href="{{('/product')}}">
                                                                        <img src="{{asset('frontend//images/product/product16.jpg')}}" alt="">
                                                                        <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product8.jpg')}}" alt="product">
                                                                    </a>
                                                                    <ul class="view-btn position-absolute transition-3">
                                                                        <li class="text-center">
                                                                            <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                        </li>
                                                                    </ul><!-- /view-btn -->
                                                                </div><!-- /single-product-img -->
                                                                <div class="single-product-info position-relative mt-10">
                                                                    <div class="single-product-tag ">
                                                                        <a href="{{('/product')}}" class="primary-color mr-1">Clocks,</a>
                                                                        <a href="{{('/product')}}" class="primary-color">Dining</a>
                                                                    </div>
                                                                    <h5 class="single-product-name"><a href="{{('/product')}}">Ipsum metus feugiat</a></h5>
                                                                    <div class="single-product-action d-flex position-relative transition-3">
                                                                        <ul class="single-product-price d-flex">
                                                                            <li>
                                                                                <span class="theme-color"><span>$</span>400.00</span>
                                                                            </li>
                                                                        </ul><!-- /single-product-price -->
                                                                        <div class="add-to-cart position-absolute transition-3">
                                                                            <a href="{{('/product')}}" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
                                                                                <span class="mr-2"><span class="icon-shopping-bag"></span></span>add to cart
                                                                            </a>
                                                                        </div><!-- /add-to-cart -->
                                                                    </div><!-- /single-product-action -->
                                                                    <ul class="single-product-wishlist position-absolute">
                                                                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="icon-heart"></span></a></li>
                                                                    </ul><!-- /single-product-wishlist -->
                                                                </div>
                                                            </div><!-- /single-product -->
                                                        </div>
                                                    </div><!-- /col -->
                                                </div><!-- /row -->
                                            </div>
                                            <div class="tab-pane" id="s-p-list2" role="tabpanel" aria-labelledby="s-p-list2">
                                                <!-- ====== product-list-view-area-start================================ -->
                                                <div class="product-list-view product-tabs-area product-area pt-20 over-hidden">
                                                    <div class="row products-tab-grid">
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                                                <span class="text-center text-white d-block black-bg">New</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product2.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover2.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Designs Woolrich Klettersack Backpack</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="secondary-color"><span>$</span>200.00</span>
                                                                                    <del class="primary-color pl-10"><span>$ 220.00</span></del>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product6.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover6.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Designs Woolrich Klettersack Backpack</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="theme-color"><span>$</span>320.00</span>
                                                                                    <span>-</span>
                                                                                    <span class="theme-color"><span>$</span>620.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block secondary-bg">Sale</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product10.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover10.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Wood design dining chair</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="secondary-color"><span>$</span>320.00</span>
                                                                                    <del class="primary-color pl-10"><span>$ 320.00</span></del>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product5.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover5.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Chair living room fiberglass</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="theme-color"><span>$</span>120.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product9.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover9.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Blossom Porcelain Side bottle</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="theme-color"><span>$</span>320.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product3.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover3.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Lamp with Dimmer Switch</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="theme-color"><span>$</span>300.00</span>
                                                                                    <span>-</span>
                                                                                    <span class="theme-color"><span>$</span>900.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40 mb-25">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                                                <span class="text-center text-white d-block black-bg">New</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product7.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover7.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Wood design bedroom clock</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="d-block">$96.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product4.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover4.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Bronze Round Wall Mirror</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="d-block">$196.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block secondary-bg">Sale</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product8.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover8.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Wholesale Hot Sale Modern Design</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="secondary-color"><span>$</span>700.00</span>
                                                                                    <del class="primary-color pl-10"><span>$ 920.00</span></del>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product12.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover12.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Saint Laurent College bag</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="d-block">$116.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product17.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover17.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Organic Chair living room fiberglass</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="d-block">$496.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-20 pr-20">
                                                            <div class="single-product mb-40">
                                                                <div class="row">
                                                                    <div class="col-xl-4  col-lg-4  col-md-4  col-sm-4 col-12 pr-0">
                                                                        <div class="single-product-img position-relative over-hidden mb-25">
                                                                            <div class="single-product-label position-absolute">
                                                                                <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                                                <span class="text-center text-white d-block black-bg">New</span>
                                                                            </div><!-- /product-label -->
                                                                            <a class="position-relative d-block" href="{{('/product')}}">
                                                                                <img src="{{asset('frontend//images/product/product15.jpg')}}" alt="">
                                                                                <img class="hover-img position-absolute" src="{{asset('frontend//images/product/product-hover15.jpg')}}" alt="product">
                                                                            </a>
                                                                            <ul class="view-btn position-absolute transition-3">
                                                                                <li class="text-center">
                                                                                    <a class="theme-color white-bg text-center d-inline-block" href="{{('/product')}}"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                                                </li>
                                                                            </ul><!-- /view-btn -->
                                                                        </div><!-- /single-product-img -->
                                                                    </div><!-- /col -->
                                                                    <div class="col-xl-8  col-lg-8  col-md-8  col-sm-8 col-12">
                                                                        <div class="p-list-content mb-25 pl-20">
                                                                            <div class="product-left-img-info">
                                                                                <div class="single-product-tag ">
                                                                                    <a href="{{('/product')}}" class="primary-color mr-1">Decor,</a>
                                                                                    <a href="{{('/product')}}" class="primary-color">Flowerpots</a>
                                                                                </div>
                                                                                <h6><a href="{{('/product')}}">Leather Supreme duffle bag</a></h6>
                                                                                <div class="p-info-img-price mt-10 mb-20">
                                                                                    <span class="d-block">$96.00</span>
                                                                                </div>
                                                                                <p class="mb-1">Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                                                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                                                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                                                                <p class="mb-1">– Light green crewneck sweatshirt.<br>
                                                                                    – Hand pockets.<br>
                                                                                    – Relaxed fit.
                                                                                </p>
                                                                                <div class="all-info d-sm-flex align-items-center">
                                                                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                                                                        <a data-toggle="tooltip" data-placement="top" title="Add to Cart" href="cart.html" class="sub-btn white-bg d-inline-block theme-color mt-15 mr-15 border-light-gray2 transition-3">Add to cart</a>
                                                                                    </div><!-- /quick-add-to-cart -->
                                                                                    <ul class="single-product-list-button d-flex align-items-center mt-15">
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                                                                           <a href="wishlist.html" class="d-block border-light-gray2 text-dark"><span class="icon-heart"></span></a>
                                                                                        </li>
                                                                                        <li data-toggle="tooltip" data-placement="top" title="Compare">
                                                                                            <a href="#" class="d-block border-light-gray2 text-dark"><span><i class="fas fa-compress"></i></span></a>
                                                                                        </li>
                                                                                    </ul><!-- /single-product-list-button -->
                                                                                </div>
                                                                            </div><!-- /mega-product -->
                                                                        </div>
                                                                    </div><!-- /col -->
                                                                </div><!-- /row -->
                                                            </div><!-- /single-product -->
                                                        </div><!-- /col -->
                                                    </div><!-- /row -->
                                                </div><!-- /product-list-view -->
                                                <!-- product-list-view-area-end  -->
                                            </div>
                                        </div>
                                    </div><!-- /product-content -->
                                </div>
                                <!-- product-area-end  -->
                            </div><!-- shop-rs-left -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="row">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 d-flex justify-content-center">
                           <div class="shop-view-more-btn mt-55 pb-100">
                            <a class="more-view-btn d-inline-block border-light-gray2 white-bg theme-color text-capitalize" href="shop.html">Load more products</a>
                           </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="bottom-line"></div>
                </div><!-- /container -->
            </div>
            <!-- right-sidebar-area-end -->

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
        </main>
@endsection
