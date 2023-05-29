<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>KUDS Market | Shopping Cart</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="/images/faviconn.png"
    />

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/vendor/vandella.css" />
    <link rel="stylesheet" href="/css/vendor/jellybelly.css" />
    <link rel="stylesheet" href="/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="/css/vendor/fontello.css" />
    <link rel="stylesheet" href="/css/plugins/easyzoom.css" />
    <link rel="stylesheet" href="/css/plugins/slick.css" />
    <link rel="stylesheet" href="/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="/css/plugins/animate.css" />
    <link rel="stylesheet" href="/css/plugins/magnific-popup.css" />
    <link rel="stylesheet" href="/css/plugins/jquery-ui.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="my-account.css" />
    <link rel="stylesheet" href="/css/checkout.css" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above
    <link rel="stylesheet" href="/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="/css/style.min.css"> -->
  </head>
  <body>
    <div class="main-wrapper main-wrapper-3">
    @include('navbar')
      <div class="breadcrumb-area breadcrumb-mt breadcrumb-ptb-2">
        <div class="container">
          <div class="breadcrumb-content">
            <ul>
              <li>
                <a href="index.html">Home </a>
              </li>
              <li><span> > </span></li>
              <li>
                <a href="index.html">Product </a>
              </li>
              <li><span> > </span></li>
              <li class="active">Checkout</li>
            </ul>
          </div>
        </div>
      </div>
 

       
            <div class="col-lg-10 ml-auto mr-auto">
              <div class="cart-check-order-link">
                <a href="cart.html">Shopping Cart</a>
                <a class="active" href="checkout.html">Check Out</a>
                <a href="order-complete.html">Order Complete</a>
              </div>
            </div>
          </div>
      </div>
      <div class="checkout-area bg-gray pt-80 pb-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="checkout-left-wrap">
                <div class="login-guest-top">
                  <div class="checkout-tab nav">

                    <a class="active" href="#checkout-guest" data-toggle="tab">
                      Buy as a Guest
                    </a>
                  </div>
                  <div class="tab-content">
                    <div id="checkout-login" class="tab-pane"></div>
                    <div id="checkout-guest" class="tab-pane active">
                      <div class="checkout-guest-wrap">
                        <h4>Contact information</h4>
                        <div class="checkout-guest-style">
                          <form action="#">
                            <input
                              type="text"
                              name="user-name"
                              placeholder="Enter Mobile Number or Email"
                            />
                            <div class="guest-login-toggle-btn">
                              <input type="checkbox" />
                              <label
                                >Keep me up to date on news and exclusive
                                offers</label
                              >
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="shipping-address-wrap">
                  <h4 class="checkout-title">Shipping address</h4>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="billing-info">
                        <input
                          type="text"
                          required=""
                          placeholder="Fast Name"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="billing-info">
                        <input
                          type="text"
                          required=""
                          placeholder="Last Name"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="billing-info">
                        <input
                          type="text"
                          required=""
                          placeholder="Address"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="billing-info">
                        <input
                          type="text"
                          required=""
                          placeholder="Address More"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <select
                        class="nice-select nice-select-style-3 cart-tax-select"
                      >
                        <option>Select Country</option>
                        <option>Bangladesh</option>
                        <option>Bahamas</option>
                        <option>Bahrain</option>
                        <option>India</option>
                        <option>Barbados</option>
                      </select>
                    </div>
                    <div class="col-lg-6">
                      <div class="billing-info">
                        <input
                          type="text"
                          required=""
                          placeholder="Postal Code"
                          name="name"
                        />
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="checkout-save-info">
                        <input class="checkout-checkbox2" type="checkbox" />
                        <span>Save this information for next time</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="payment-details mb-40">
                <h4 class="checkout-title">Payment Deatails</h4>
                <ul>
                  <li>Cart Subtotal <span>$155.00</span></li>
                  <li>Shipping and Handing <span>$15.00</span></li>
                  <li>Vat <span>$00.00</span></li>
                </ul>
                <div class="total-order">
                  <ul>
                    <li>Order Total <span>$170.00</span></li>
                  </ul>
                </div>
              </div>
              <div class="payment-details">
                <h4 class="checkout-title">Payment Deatails</h4>
                <div class="payment-method">
                  <div class="pay-top sin-payment">
                    <input
                      id="payment_method_1"
                      class="input-radio"
                      type="radio"
                      value="cheque"
                      checked="checked"
                      name="payment_method"
                    />
                    <label for="payment_method_1"> Paypal </label>
                    <div class="payment-box payment_method_bacs">
                      <form action="#">
                        <input
                          type="text"
                          required=""
                          placeholder="Enter Your Paypal Email"
                          name="name"
                        />
                      </form>
                    </div>
                  </div>
                  <div class="pay-top sin-payment">
                    <input
                      id="payment-method-2"
                      class="input-radio"
                      type="radio"
                      value="cheque"
                      name="payment_method"
                    />
                    <label for="payment-method-2">Card </label>
                    <div class="payment-box payment_method_bacs">
                      <form action="#">
                        <input
                          type="text"
                          required=""
                          placeholder="Enter Your Card Email"
                          name="name"
                        />
                      </form>
                    </div>
                  </div>
                  <div class="pay-top sin-payment">
                    <input
                      id="payment-method-3"
                      class="input-radio"
                      type="radio"
                      value="cheque"
                      name="payment_method"
                    />
                    <label for="payment-method-3">Bank or Check </label>
                    <div class="payment-box payment_method_bacs">
                      <p>
                        Make your payment directly into our bank account. Please
                        use your Order ID as the payment reference.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="back-continue-wrap">
            <a href="#">Back to cart</a>
            <a href="#">Please Order</a>
          </div>
        </div>
      </div>
      @include('footer')
    </div>

   <!-- All JS is here
============================================ -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/countdown.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/instafeed.js"></script>
    <script src="assets/js/plugins/svg-injector.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/mouse-parallax.js"></script>
    <script src="assets/js/plugins/images-loaded.js"></script>
    <script src="assets/js/plugins/isotope.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script> -->
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
  </body>
</html>

