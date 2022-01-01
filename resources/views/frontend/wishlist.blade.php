@extends('frontend.layouts.main')
@section('main-container')
        <main>

            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="single-page page-height3 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title pt-65 pb-70 text-center">
                                        <h2 class="text-capitalize theme-color mb-20">Wishlist</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Wishlist</li>
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

            <!-- ====== wishlist-area-start=============================================== -->
            <div class="wishlist-area d-none d-md-block">
                <div class="container-wrapper extra-padding-15">
                    <div class="row pb-100">
                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                            <table class="table table-responsive-sm border-l-light-gray border-r-light-gray">
                                <thead>
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col">Product name </th>
                                    <th scope="col">Unit price</th>
                                    <th scope="col">Stock status</th>
                                    <th scope="col"></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-content table-content1">
                                            <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                                        </td>
                                        <td class="table-content table-content2">
                                            <a href="#" class="p-img">
                                                <img src="images/product/product14.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="table-content table-content3">
                                            <a href="#" class="p-name black-color">
                                                Elegant wooden leg design Replica
                                            </a>
                                        </td>
                                        <td class="table-content table-content4">
                                            <a href="#" class="p-price black-color">
                                                $196.00
                                            </a>
                                        </td>
                                        <td class="table-content table-content6">
                                            <a href="#" class="p-stock-status">
                                                In Stock
                                            </a>
                                        </td>
                                        <td class="table-content table-content6 text-right">
                                            <a href="#" class="p-add-cart  dark-black-bg text-white pt-10 pb-10 pl-15 pr-15">Add to cart</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="table-content table-content1">
                                            <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                                        </td>
                                        <td class="table-content table-content2">
                                            <a href="#" class="p-img">
                                                <img src="images/product/product5.jpg" alt="">
                                            </a>
                                        </td>
                                        <td class="table-content table-content3">
                                            <a href="#" class="p-name black-color">
                                                Chair living room fiberglass
                                            </a>
                                        </td>
                                        <td class="table-content table-content4">
                                            <a href="#" class="p-price black-color">
                                                $396.00
                                            </a>
                                        </td>
                                        <td class="table-content table-content5">
                                            <a href="#" class="p-stock-status">
                                                In Stock
                                            </a>
                                        </td>
                                        <td class="table-content table-content6 text-right">
                                            <a href="#" class="p-add-cart dark-black-bg text-white pt-10 pb-10 pl-10 pr-10">Select options</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div><!-- /col -->
                    </div><!-- /row -->
                    <div class="bottom-line"></div>
                </div><!-- /container -->
            </div>
            <!-- wishlist-area-end -->

        <!-- ====== wishlist-mobile-area-start=============================================== -->
        <div class="wishlist-area d-block d-md-none">
            <div class="container-wrapper extra-padding-15">
                <div class="row pb-100">
                    <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                        <div class="mobile-wishlist">
                            <div class="p-remove text-right d-block position-relative"><a href="javascript:void(0);"><span class="icon-clear"></span></a></div>
                            <div class="wish-p d-sm-flex justify-content-between">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="#" class="p-img d-block mr-3">
                                            <img src="images/product/product14.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <h6><a class="d-block" href="#">Elegant wooden leg design Replica</a></h6>
                                        <span>$396.00</span>
                                    </li>
                                </ul>
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="#" class="btn pt-10 pb-10 mt-20 dark-black-bg text-white">Add to cart</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="p-remove text-right d-block position-relative pt-40"><a href="javascript:void(0);"><span class="icon-clear"></span></a></div>
                            <div class="wish-p d-sm-flex  justify-content-between">
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="#" class="p-img d-block mr-3">
                                            <img src="images/product/product5.jpg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <h6><a class="d-block" href="#">Chair living room fiberglass</a></h6>
                                        <span>$246.00</span>
                                    </li>
                                </ul>
                                <ul class="d-flex align-items-center">
                                    <li>
                                        <a href="#" class="btn pt-10 pb-10 mt-20 d-block  dark-black-bg text-white">Add to cart</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
                <div class="bottom-line"></div>
            </div><!-- /container -->
        </div>
        <!-- wishlist-area-end -->

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
