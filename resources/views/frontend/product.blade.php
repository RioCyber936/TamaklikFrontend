@extends('frontend.layouts.main')
@section('main-container')
<main>
    <!-- ======slider-area-start=========================================== -->
    <div class="p-page-area">
        <div class="container-wrapper extra-padding-15">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                    <div class="page-title pt-40">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb bg-transparent px-0">
                                <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a class="primary-color" href="shop.html">Shop</a></li>
                                <li class="breadcrumb-item active text-capitalize" aria-current="page">Coating design lighting lamp</li>
                            </ol>
                        </nav>
                    </div><!-- /page title -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- slider-area-end  -->

    <!-- ====== shop-single-page-area-start================================ -->
    <div class="shop-single-page-area over-hidden">
        <div class="container-wrapper extra-padding-15">
            <div class="p-view-position">
                <div class="row">
                    <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12 mt-10">
                        <div class="product-left-img-tab d-flex">
                            <div class="nav single-page-tab flex-column nav-pills" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
                                <div class="p-tap-vertical">
                                    <div class="product-tab-thamb-active mlr-15">
                                        <a class="nav-link show active" id="v-pills-home-tab1" data-toggle="pill" href="#v-pills-home1" role="tab" aria-controls="v-pills-home1" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb1.jpg')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="v-pills-messages-tab1" data-toggle="pill" href="#v-pills-messages1" role="tab" aria-controls="v-pills-messages1" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb6.jpg')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="v-pills-settings-tab1" data-toggle="pill" href="#v-pills-settings1" role="tab" aria-controls="v-pills-settings1" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb3.jpg')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="v-pills-home-tab2" data-toggle="pill" href="#v-pills-home2" role="tab" aria-controls="v-pills-home2" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb4.jpg')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="v-pills-messages-tab2" data-toggle="pill" href="#v-pills-messages2" role="tab" aria-controls="v-pills-messages2" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb5.jpg')}}" alt="">
                                        </a>
                                        <a class="nav-link" id="v-pills-settings-tab2" data-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2" aria-selected="false">
                                            <img class="product-thumbnail" src="{{asset('frontend/images/product/p-tab-thamb2.jpg')}}" alt="">
                                        </a>
                                    </div><!-- /product-tab-thamb-active -->
                                </div>
                            </div><!-- /nav product-tabs -->
                            <div class="tab-content width100 thamb-lt-content text-center position-relative pt-10" id="v-pills-tabContent1">
                                <div class="tab-pane fade show active" id="v-pills-home1" role="tabpanel" aria-labelledby="v-pills-home-tab1">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img6.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i>
                                            <img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img6.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img6.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages1" role="tabpanel" aria-labelledby="v-pills-messages-tab1">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img11.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i><img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img11.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img11.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings1" role="tabpanel" aria-labelledby="v-pills-settings-tab1">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img8.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i><img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img8.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img8.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img9.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i><img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img9.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img9.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages-tab2">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img10.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i><img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img10.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img10.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                                    <div class="product-gallery-btn position-absolute right-site mt-2">
                                        <a href="{{asset('frontend/images/product/p-tab-large-img7.jpg')}}" class="zoom-gallery dark-black-color bg-white d-inline-block" data-fancybox="images" ><i class="fas fa-search"></i><img class="width100 d-none" src="{{asset('frontend/images/product/p-tab-large-img7.jpg')}}" alt=""></a>
                                    </div><!-- /product-gallery-btn -->
                                    <div class="product-img">
                                        <img  class="width100 height100" src="{{asset('frontend/images/product/p-tab-large-img7.jpg')}}" alt="">
                                    </div><!-- /product-img -->
                                </div>
                            </div><!-- /tab-content -->
                        </div><!-- /product-left-img-tab -->
                    </div><!-- /col -->
                    <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                        <div class="product-view-info mt-20">
                            <div class="product-left-img-info">
                                <div class="single-product-tag ">
                                    <a href="product-details.html" class="primary-color mr-1">Decor,</a>
                                    <a href="product-details.html" class="primary-color">Flowerpots</a>
                                </div>
                                <h3>Wood design bedroom clock</h3>
                                <div class="rating rating-shop mb-15">
                                    <ul class="d-inline-block">
                                        <li><span><i class="far fa-star"></i></span></li>
                                        <li><span><i class="far fa-star"></i></span></li>
                                        <li><span><i class="far fa-star"></i></span></li>
                                        <li><span><i class="far fa-star"></i></span></li>
                                        <li><span><i class="far fa-star"></i></span></li>
                                    </ul>
                                    <span class="add-review"><a href="#">2 customer reviews</a></span>
                                </div>
                                <div class="p-info-img-price mt-25 mb-25">
                                    <span class="d-block">$96.00</span>
                                </div>
                                <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit
                                    eorum claritatem. Investigationes demonstraverunt lectores legere me
                                    lius quod ii legunt saepius. Claritas est etiam processus.</p>
                                <p class="pb-15">– Light green crewneck sweatshirt.<br>
                                    – Hand pockets.<br>
                                    – Relaxed fit.
                                </p>
                                <div class="all-info d-sm-flex align-items-center border-t-light-gray border-b-light-gray pb-50 pt-30">
                                    <div class="quick-add-to-cart d-lg-flex align-items-center">
                                        <div class="quantity-field position-relative d-inline-block mt-15 mr-15">
                                            <input type="text" name="select1" value="1" class="quantity-input-arrow quantity-input-2 border-light-gray2 text-center">
                                        </div>
                                        <a href="#" class="sub-btn dark-black-bg d-inline-block text-white mt-15 mr-15">Add to cart</a>
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
                                <div class="sku mt-20">
                                    <span class="text-uppercase">SKU: <span class="primary-color">3-1</span></span>
                                </div>
                                <div class="mega-product pt-2 pr-150">
                                    <ul>
                                        <li class="theme-color"><span>Categories:</span></li>
                                        <li><a href="product-details.html" class="primary-color">Chair & Tables,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Chest of Drawers,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Deco,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Floor,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Home Accessories,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Lighting,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Outdoor,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Tables lamp,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Wall lights,</a></li>
                                        <li><a href="product-details.html" class="primary-color">Bedroom</a></li>
                                        <li><a href="product-detils.html" class="primary-color">Chair & Tables H6,</a></li>
                                    </ul>
                                </div>
                                <ul class="p-tags theme-color mt-2 pb-20 border-b-light-gray">
                                    <li><span>Tags:</span></li>
                                    <li><a href="product-details.html" class="primary-color">Decor,</a></li>
                                    <li><a href="product-details.html" class="primary-color">Bedroom</a></li>
                                </ul>
                            </div><!-- /mega-product -->
                            <div class="social-link-view-info d-sm-flex mt-20">
                                <span class="pr-20 primary-color d-block">Share this product</span>
                                <ul>
                                    <li class="tool" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Facebook">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="tool" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Twitter ">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="tool" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Pinterest">
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                    <li class="tool" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Google-plus">
                                        <a href="#"><i class="fab fa-google-plus"></i></a>
                                    </li>
                                    <li class="tool" data-toggle="tooltip" data-selector="true" data-placement="bottom" title="Linkedin">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul><!-- /social-sharing -->
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div>
        </div><!-- /container -->
    </div>
    <!-- shop-single-page-area-end -->

    <!-- ====== shop-tab-area-start================================ -->
    <div class="product-view-tab-area">
        <div class="container-wrapper extra-padding-10 border-b-light-gray pt-100 pb-85">
            <nav class="d-flex justify-content-center">
                <div class="nav review-tabs product-view-tab" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active px-0 mr-5 pb-1" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                    <a class="nav-item nav-link px-0 mr-5 pb-1" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (2)</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active mt-40" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="describe-area">
                        <div class="product-details-text">
                            <h6 class="mb-20">Detail Products</h6>
                            <p>Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs Wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions, ideal for both long visits to the dining table and relaxed lounging. A light chair, easy to move around the dining table and about the room.!</p>
                            <h6 class="mb-20 pt-2">Detail Products</h6>
                            <p>– The characteristic “Y” provides comfortable back support and stability to the steam-bent top, also inspiring the chair’s names</p>
                            <p>– The Wishbone Chair” or “The Y-Chair”</p>
                            <p>– An excellent example of Wegner’s constant striving towards organic simplicity to create sculptural beauty, comfort and outstanding stability.</p>
                            <p>– Qui sequitur mutationem consuetudium lectorum.</p>
                            <p>– Claritas est etiam processus dynamicus.</p>
                            <p>– Qui sequitur mutationem consuetudium lectorum.</p>
                            <p class="mt-15">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                        </div>
                    </div>
                </div><!-- /tab-pane1 -->
                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                    <div class="review-comments-area pt-50">
                        <h6 class="desc-title mb-20">2 reviews for Coating design lighting lamp</h6>
                        <ul class="d-sm-flex align-items-center border-b-light-gray pt-20 pb-25">
                            <li><img class="avatar-img width100 height100" src="images/logo/avatar1.png" alt=""></li>
                            <li class="review-text">
                                            <span>
                                                <strong>Admin</strong>
                                                <em>(verified owner)</em>
                                                –
                                                <span>July 16, 2018:</span>
                                            </span>
                                <span class="mt-3 d-block">5 star</span>
                            </li>
                        </ul>
                        <ul class="d-sm-flex align-items-center border-b-light-gray pt-20 pb-25">
                            <li><img class="avatar-img width100 height100" src="images/logo/avatar1.png" alt=""></li>
                            <li class="review-text ">
                                            <span>
                                                <strong>Admin</strong>
                                                <em>(verified owner)</em>
                                                –
                                                <span>July 16, 2018:</span>
                                            </span>
                                <p class="mt-10 mb-0">Love this color and type These bottles are perfect for my purpose, which is to display souvenir beach sand in a shadow box with other small items from my seashell collection. I bought the three inchers. I found the quality quite satisfactory.thank you for this product.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="product-review mt-50 pb-10">
                        <h6 class="mb-30">Add a review </h6>
                        <span class="pr-2 mb-15">Your Rating</span>
                        <div class="ratting d-inline-block mb-15">
                            <a href="#" class="position-relative">
                                <span class="blank"><i class="far fa-star"></i></span>
                                <span class="rat position-absolute"><i class="fas fa-star"></i></span>
                            </a>
                            <a href="#" class="position-relative">
                                <span class="blank"><i class="far fa-star"></i></span>
                                <span class="rat position-absolute"><i class="fas fa-star"></i></span>
                            </a>
                            <a href="#" class="position-relative">
                                <span class="blank"><i class="far fa-star"></i></span>
                                <span class="rat position-absolute"><i class="fas fa-star"></i></span>
                            </a>
                            <a href="#" class="position-relative">
                                <span class="blank"><i class="far fa-star"></i></span>
                                <span class="rat position-absolute"><i class="fas fa-star"></i></span>
                            </a>
                            <a href="#" class="position-relative">
                                <span class="blank"><i class="far fa-star"></i></span>
                                <span class="rat position-absolute"><i class="fas fa-star"></i></span>
                            </a>
                        </div>
                    </div>
                    <div class="reply-form contact-form-right mb-15">
                        <form action="#">
                            <div class="comment">
                                <label>Your Review</label>
                                <textarea name="message" class="form-control mt-10" id="message"></textarea>
                            </div>
                            <div class="name-and-email">
                                <label class="mt-15">Name *</label>
                                <div class="name">
                                    <input type="text" name="r-name" id="r-name">
                                </div>
                                <label class="mt-15">Email *</label>
                                <div class="email">
                                    <input type="email" name="email" id="r-email">
                                </div>
                            </div><!-- /name-and-email -->
                            <div class="save-info mb-30 mt-2">
                                <input class="p-0" type="checkbox" aria-label="Checkbox for following text input">
                                <p class="mb-0">Save my name, email, and website in this browser for the next time I comment.</p>
                            </div>
                            <a href="#" class="review-btn d-inline-block text-white theme-bg transition">Submit</a>
                        </form>
                    </div>
                </div>
            </div><!-- /tab-pane3 -->
        </div><!-- /container -->
    </div>
    <!-- shop-tab-area-end -->
    <!-- ====== top-trending-area-start================================ -->
    <div class="top-trending-area product-banner-area mb-20 over-hidden mt-25">
        <div class="container-wrapper extra-padding-20 border-b-light-gray pb-60">
            <div class="row">
                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 pl-10">
                    <div class="product-banner-right">
                        <div class="row">
                            <div class="col-xl-6  col-lg-6  col-md-10  col-sm-12 col-12 offset-xl-3 offset-lg-3 offset-md-1">
                                <div class="section-title text-center">
                                    <h2 class="pb-20">#Related products</h2>
                                    <p>Nam liber tempor cum soluta nobis eleifend option congue nihil. Doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam.</p>
                                </div><!-- /section-title -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                        <div class="best selling-products mt-40">
                            <div class="row top-trending-active">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12 ">
                                    <div class="s-p-wrapper   fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="600ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product9.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover9.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Flowerpots</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Blossom Porcelain Side bottle</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>320.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper   fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="100ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product1.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover1.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Clocks,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Blossom Porcelain Side Plates</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color">$</span><span>320.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper   fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="800ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product6.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover6.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Art,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Designs Woolrich Klettersack Backpack</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>320.00</span>
                                                            <span>-</span>
                                                            <span class="theme-color"><span>$</span>620.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper   fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                    <span class="text-center text-white d-block black-bg">New</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product2.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover2.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">bowls,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Designs Woolrich Klettersack Backpack</a></h5>
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
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper   fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1000ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product3.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover3.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Lamp,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Lamp with Dimmer Switch</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>300.00</span>
                                                            <span>-</span>
                                                            <span class="theme-color"><span>$</span>900.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Select option">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1100ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                    <span class="text-center text-white d-block black-bg">New</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product7.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover7.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">clock,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Wood design bedroom clock</a></h5>
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
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Go to buy">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1300ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product4.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover4.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Clocks,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Bronze Round Wall Mirror</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>320.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="150ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product17.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover17.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Chair,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Organic Chair living room fiberglass</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>220.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="View product">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1700ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product12.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover12.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Bag,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Saint Laurent College bag</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color">$</span><span>540.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="1700ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block secondary-bg mb-1">Sale</span>
                                                    <span class="text-center text-white d-block black-bg">New</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product15.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover15.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Bowls,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Leather Supreme duffle bag</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>220.00</span>
                                                            <span>-</span>
                                                            <span class="theme-color"><span>$</span>400.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="200ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block brown-l-bg">Hot</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product14.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product-hover2.jpg')}}" alt="">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Bowls,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Elegant wooden leg design Replica</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>320.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="s-p-wrapper  fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="300ms">
                                        <div class="single-product mb-40">
                                            <div class="single-product-img position-relative over-hidden">
                                                <div class="single-product-label position-absolute">
                                                    <span class="text-center text-white d-block secondary-bg">Sale</span>
                                                </div><!-- /product-label -->
                                                <a class="position-relative d-block" href="product-details.html">
                                                    <img src="{{asset('frontend/images/product/product16.jpg')}}" alt="">
                                                    <img class="hover-img position-absolute" src="{{asset('frontend/images/product/product8.jpg')}}" alt="product">
                                                </a>
                                                <ul class="view-btn position-absolute transition-3">
                                                    <li class="text-center">
                                                        <a class="theme-color white-bg text-center d-inline-block" href="product-details.html"  data-toggle="tooltip" data-placement="top" title="Blossom Porcelain Side bottle">Quick View</a>
                                                    </li>
                                                </ul><!-- /view-btn -->
                                            </div><!-- /single-product-img -->
                                            <div class="single-product-info position-relative mt-10">
                                                <div class="single-product-tag ">
                                                    <a href="product-details.html" class="primary-color mr-1">Clocks,</a>
                                                    <a href="product-details.html" class="primary-color">Dining</a>
                                                </div>
                                                <h5 class="single-product-name"><a href="product-details.html">Ipsum metus feugiat</a></h5>
                                                <div class="single-product-action d-flex position-relative transition-3">
                                                    <ul class="single-product-price d-flex">
                                                        <li>
                                                            <span class="theme-color"><span>$</span>400.00</span>
                                                        </li>
                                                    </ul><!-- /single-product-price -->
                                                    <div class="add-to-cart position-absolute transition-3">
                                                        <a href="product-details.html" class="d-block theme-color text-uppercase" data-toggle="tooltip" data-placement="top" title="Add to cart">
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
                    </div>
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- top-trending-end  -->

    <!-- ====== subscribe-area-start ========================================= -->
    <div class="subscribe-area mt-95 mb-100">
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
