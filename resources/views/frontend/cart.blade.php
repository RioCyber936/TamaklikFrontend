@extends('frontend.layouts.main')
@section('main-container')
        <main>

            <!-- ======slider-area-start=========================================== -->
            <div class="slider-area over-hidden">
                <div class="single-page page-height3 d-flex align-items-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12  d-flex align-items-center justify-content-center">
                                    <div class="page-title pt-60 pb-70 text-center">
                                        <h2 class="text-capitalize theme-color mb-20">Cart</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Cart</li>
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

        <!-- ====== cart-area-start=============================================== -->
        <div class="cart-area">
            <div class="container-wrapper extra-padding-15 border-b-light-gray pb-100">
                <div class="cart-table text-center table-responsive-sm">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Price images</th>
                            <th scope="col">Product name </th>
                            <th scope="col">Unit price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <a href="#" class="cart-img d-block">
                                    <img src="images/product/product14.jpg" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="p-name theme-color">
                                    Elegant wooden leg design Replica
                                </a>
                            </td>
                            <td>
                                <div class="cart-price">$350.00</div></td>
                            <td>
                                <div class="quantity-field position-relative d-inline-block mt-15 mr-15">
                                    <input type="text" name="select1" value="0" class="quantity-input-arrow quantity-input-2 border-light-gray2 text-center">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <a href="#" class="cart-img d-block">
                                    <img src="images/product/product11.jpg" alt="">
                                </a>
                            </td>
                            <td>
                                <a href="#" class="p-name theme-color">
                                    Wood design bedroom clock
                                </a>
                            </td>
                            <td>
                                <div class="cart-price">$440.00</div></td>
                            <td>
                                <div class="quantity-field position-relative d-inline-block mt-15 mr-15">
                                    <input type="text" name="select1" value="0" class="quantity-input-arrow quantity-input-2 border-light-gray2 text-center">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="p-remove theme-color"><span class="icon-clear"></span></a>
                            </td>
                          </tr>
                        </tbody>
                    </table>
                </div>
                <div class="coupon-and-update-area pt-20">
                    <div class="row">
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="coupon-code-area">
                                <form action="#">
                                    <input type="text" placeholder="Coupon code" class="pl-15 pr-80 mt-15 mr-2">
                                    <a href="#" class="sub-btn d-inline-block theme-bg text-white mt-15">Apply coupon</a>
                                </form>
                            </div>
                        </div><!-- /col -->
                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                            <div class="update-area text-md-right">
                                <a href="#" class="sub-btn d-inline-block theme-bg text-white mt-15 mr-2">CLEAR SHOPPING CART</a>
                                <a href="#" class="sub-btn d-inline-block theme-bg text-white  mt-15">UPDATE SHOPPING CART</a>
                             </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div>
                <div class="row">
                    <div class="col-xl-6  col-lg-6  col-md-10  col-sm-12 col-12 offset-xl-6 offset-lg-6 offset-md-2">
                        <div class="total-price-area mt-80">
                            <h2>Cart totals</h2>
                            <ul class="pt-2 pb-25">
                                <li class="d-flex justify-content-between align-items-center border-gray mb-1 pl-25 pr-25 pt-15 pb-15">
                                    <span>Subtotal</span><span>$480</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center border-gray pl-25 pr-25 pt-15 pb-15">
                                    <span>Total </span><span>$950</span>
                                </li>
                            </ul>
                            <a href="#" class="sub-btn d-inline-block theme-bg text-white float-right">Proceed to checkout</a>
                        </div>
                    </div><!-- /col -->
                </div>
            </div><!-- /container -->
        </div>
        <!-- cart-area-end -->

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
        <!-- ====== footer-area-start ============================================ -->
        <footer>
            <div class="footer-area-area theme-bg">
                <div class="footer-top pt-100 pb-100">
                    <div class="container-wrapper extra-padding-15">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                <div class="footer-top-content text-center">
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="images/logo/logo.png" alt=""></a>
                                    </div>
                                    <p>Homess is a premium theme with advanced admin module. It’s extremely customizable, easy to use and fully responsive and retina ready.</p>
                                    <ul class="social-link d-flex justify-content-center align-items-center mt-35 mb-30">
                                        <li data-toggle="tooltip" data-placement="top" title="Twitter">
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title="Facebook">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title="Google-plus">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        </li>
                                        <li data-toggle="tooltip" data-placement="top" title="Linkedin">
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                    <ul class="footer-menu text-center">
                                        <li><a href="index.html">Blog</a></li>
                                        <li><a href="index.html">About us</a></li>
                                        <li><a href="index.html">Portfolio</a></li>
                                        <li><a href="index.html">Contact us</a></li>
                                        <li><a href="index.html">F.A.Q.’s </a></li>
                                    </ul><!-- /footer-menu -->
                                </div><!-- /footer-top-content -->
                            </div><!-- /col -->
                        </div><!-- /row -->
                    </div><!-- /container -->
                </div>
                <div class="footer-bottom">
                    <div class="container-wrapper extra-padding-15">
                        <div class="copyright-area pt-45 pb-25">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="copyright-text d-sm-flex justify-content-center align-items-center text-center">
                                        <p class="pr-1">Copyright ©
                                        <a href="#">Homess</a>
                                        All Rights Reserved.</p>
                                        <p>Powered by <a href="#">Bluesky Themes</a></p>
                                    </div>
                                </div><!-- /col -->
                            </div><!-- /row -->
                        </div><!-- /copyright-area -->
                    </div><!-- /container -->
                </div>
            </div>
        </footer>
@endsection
