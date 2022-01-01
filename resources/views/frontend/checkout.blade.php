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
                                        <h2 class="text-capitalize theme-color mb-20">Checkout</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb justify-content-center bg-transparent">
                                            <li class="breadcrumb-item"><a class="primary-color" href="index.html">Home</a></li>
                                            <li class="breadcrumb-item active text-capitalize" aria-current="page">Checkout</li>
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

        <!-- ====== coupon-area-start=============================================== -->
        <div class="coupon-area pb-30">
            <div class="container-wrapper extra-padding-15">
                <div class="row">
                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                        <div class="coupon-accordion">
                            <!-- accordion start -->
                            <h6 class="pt-15 pl-40 pb-15 mb-25">Returning customer? <span id="login" class="primary-color">Click here to login</span></h6>
                            <div id="checkout-login" class="coupon-content border-gray pt-30 pb-35 pl-30 pr-30 mb-20">
                                <div class="coupon-info">
                                    <p class="coupon-text mb-15">Quisque gravida turpis sit amet nulla posuere lacinia. Cras sed est
                                        sit amet ipsum luctus.</p>
                                    <form action="#">
                                        <p class="log-mail mb-0">
                                            <label>Username or email <span class="required"><span class="secondary-color">*</span></span></label>
                                            <input type="text" class="form-control">
                                        </p>
                                        <p class="log-pass mb-0">
                                            <label>Password <span class="required"><span class="secondary-color">*</span></span></label>
                                            <input type="text" class="form-control">
                                        </p>
                                        <div class="log-btn mb-0">
                                            <a href="#" class="sub-btn d-inline-block text-white theme-bg border-0 mr-3">Login</a>
                                            <div class="save-info d-inline-block mb-30 mt-2">
                                                <input class="p-0 pr-1" type="checkbox" aria-label="Checkbox for following text input">
                                                <p class="mb-0 d-inline-block">Remember me</p>
                                            </div>
                                        </div>
                                        <p class="lost-password mb-0">
                                            <a href="#" class="primary-color">Lost your password?</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- accordion start -->
                        </div>
                    </div><!-- /col -->
                    <div class="col-xl-6  col-lg-6  col-md-6  col-sm-12 col-12">
                        <div class="coupon-accordion">
                            <!-- accordion start -->
                            <h6 class="pt-15 pl-40 pb-15 mb-25">Have a coupon? <span  id="couponshow" class="primary-color">Click here to enter your code</span></h6>
                            <div id="checkout-coupon" class="checkout-content">
                                <div class="coupon-info">
                                    <form action="#">
                                        <p class="checkout-coupon">
                                            <input type="text" class="form-control" placeholder="Coupon Code">
                                            <a href="#" class="sub-btn d-inline-block text-white theme-bg border-0 mr-3">Apply Coupon</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                            <!-- accordion start -->
                        </div>
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- cart-area-end -->

        <!-- ====== checkout-area-start ============================================= -->
        <div class="checkout-area">
            <div class="container-wrapper extra-padding-15">
                <div class="row">
                    <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                        <div class="checkbox-form">
                            <h4 class="pb-10 mb-20 border-b-light-gray">Billing Details</h4>
                            <div class="row">
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="country-select mb-30">
                                        <label>Country <span class="required">*</span></label>
                                        <select class="form-control">
                                            <option value="volvo">bangladesh</option>
                                            <option value="saab">Algeria</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">Ghana</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Company Name</label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Address <span class="required">*</span></label>
                                        <input type="text" placeholder="Street address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Town / City <span class="required">*</span></label>
                                        <input type="text" placeholder="Town / City" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>State / County <span class="required">*</span></label>
                                        <input type="text" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Postcode / Zip <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Email Address <span class="required">*</span></label>
                                        <input type="email" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                    <div class="checkout-form-list mb-30">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" placeholder="Postcode / Zip" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                    <div class="checkout-form-list create-acc">
                                        <div class="save-info d-inline-block">
                                            <input id="cbox-account" class="p-0 pr-2" type="checkbox" aria-label="Checkbox for following text input">
                                            <p class="mb-0 d-inline-block">Create an account?</p>
                                        </div>
                                        <div id="cbox-account-info" class="checkout-form-list create-account">
                                            <p>Create an account by entering the information below. If you are a returning
                                                customer please login at the top of the page.</p>
                                            <label>Account password <span class="required">*</span></label>
                                            <input type="password" placeholder="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /row -->
                            <div class="different-address">
                                <div class="ship-different-title pb-15">
                                    <h3>
                                        <div class="save-info pb-10 border-b-light-gray">
                                            <p class="mb-0 d-inline-block pr-15">Ship to a different address?</p>
                                            <input id="ship-box" class="p-0" type="checkbox" aria-label="Checkbox for following text input">
                                        </div>
                                    </h3>
                                </div>
                                <div id="ship-box-info">
                                    <div class="row">
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="country-select mb-30">
                                                <label>Country <span class="required">*</span></label>
                                                <select class="form-control">
                                                    <option value="volvo">bangladesh</option>
                                                    <option value="saab">Algeria</option>
                                                    <option value="mercedes">Afghanistan</option>
                                                    <option value="audi">Ghana</option>
                                                    <option value="audi2">Albania</option>
                                                    <option value="audi3">Bahrain</option>
                                                    <option value="audi4">Colombia</option>
                                                    <option value="audi5">Dominican Republic</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>First Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Last Name <span class="required">*</span></label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Company Name</label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Address <span class="required">*</span></label>
                                                <input type="text" placeholder="Street address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-12  col-lg-12  col-md-12  col-sm-12 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Town / City <span class="required">*</span></label>
                                                <input type="text" placeholder="Town / City" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>State / County <span class="required">*</span></label>
                                                <input type="text" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Postcode / Zip <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Email Address <span class="required">*</span></label>
                                                <input type="email" placeholder="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-xl-6  col-lg-6  col-md-6  col-sm-6 col-12">
                                            <div class="checkout-form-list mb-30">
                                                <label>Phone <span class="required">*</span></label>
                                                <input type="text" placeholder="Postcode / Zip" class="form-control">
                                            </div>
                                        </div>
                                    </div><!-- /row -->
                                </div>
                                <div class="order-notes">
                                    <div class="checkout-form-list mb-40">
                                        <label>Order Notes</label>
                                        <textarea id="checkout-mess" placeholder="Notes about your order, e.g. special notes for delivery." class="form-control pt-20 pl-20"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col -->
                    <div class="col-xl-6  col-lg-6  col-md-12  col-sm-12 col-12">
                        <div class="your-order mb-30 pt-30 pr-40 pb-45 pl-40 mt-1">
                            <h4 class="pb-10 mb-20 border-b-light-gray">Your order</h4>
                            <div class="your-order-table table-responsive">
                                <table class="width100">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum suscipit <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$165.00</span>
                                            </td>
                                        </tr>
                                        <tr class="cart_item">
                                            <td class="product-name">
                                                Vestibulum dictum magna <strong class="product-quantity"> × 1</strong>
                                            </td>
                                            <td class="product-total">
                                                <span class="amount">$50.00</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">$215.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li class="d-flex">
                                                        <input type="radio" class="r-inpt mb-2 mr-1"mlr-1>
                                                        <label>
                                                            Flat Rate: <span class="amount">$8.00</span>
                                                        </label>
                                                    </li>
                                                    <li class="d-flex">
                                                        <input type="radio" class="r-inpt mb-2 mr-1"mlr-1>
                                                        <label>Free Shipping:</label>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount text-danger"><b>$215.00</b></span></strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                            <div class="payment-method mt-40">
                                <div class="accordion" id="accordionExample">
                                    <div class="card border-gray rounded-0 mb-10 white-bg">
                                        <div class="card-header bg-white border-b-light-gray" id="headingOne">
                                            <h6 class="mb-0">
                                                <button class="btn-link border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Direct Bank Transfer
                                                </button>
                                            </h6>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <P class="mb-0">Make your payment directly into our bank account. Please use your Order ID
                                                    as the payment
                                                    reference. Your order won’t be
                                                    shipped until the funds have cleared in our account.</P>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-gray rounded-0 mb-10 white-bg">
                                        <div class="card-header bg-white border-b-light-gray" id="headingTwo">
                                            <h6 class="mb-0">
                                                <button class="btn-link collapsed border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Cheque Payment
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="card-body">
                                                    <P class="mb-0">Please send your cheque to Store Name, Store Street, Store Town, StoreState / County, StorePostcode.
                                                    </P>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-gray rounded-0 mb-10 white-bg">
                                        <div class="card-header bg-white border-b-light-gray" id="headingThree">
                                            <h6 class="mb-0">
                                                <button class="btn-link collapsed border-0 text-uppercase" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    PayPal
                                                </button>
                                            </h6>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                            <div class="card-body">
                                                <P class="mb-0">Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</P>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment mt-20">
                                    <a href="#" class="sub-btn d-inline-block text-white theme-bg border-0 width100">Place order</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- /col -->
                    <div class="bottom-line pt-60"></div>
                </div><!-- /row -->
            </div><!-- /container -->
        </div>
        <!-- checkout-area-end -->

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
