<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-details</title>

    <link rel="stylesheet" href="{{ asset('/css/vendor/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/vandella.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/jellybelly.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/icofont.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/vendor/fontello.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/easyzoom.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/slick.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/nice-select.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/animate.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/magnific-popup.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/plugins/jquery-ui.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/informasi-umum.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/my-account.css') }}" />

<script src="{{ asset('/js/informasi-umu.js') }}"></script>
</head>
<body>
<div class="main-wrapper main-wrapper-2 main-wrapper-3">
    @include('navbar')

        <div class="product-details-area product-details-bg slider-mt-7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-tab-wrap">
                            <div class="product-details-tab-large tab-content pt-40 text-center">
                                <div class="tab-pane active" id="pro-details1">
                                    <div class="product-details-2-img ">
                                        <img src="/images/product-details/product-details-img-1.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details2">
                                    <div class="product-details-2-img ">
                                        <img src="/images/product-details/product-details-slider-2.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details3">
                                    <div class="product-details-2-img">
                                        <img src="/images/product-details/product-details-slider-3.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details4">
                                    <div class="product-details-2-img ">
                                        <img src="/images/product-details/product-details-slider-4.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details5">
                                    <div class="product-details-2-img ">
                                        <img src="/images/product-details/product-details-slider-5.png" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane" id="pro-details6">
                                    <div class="product-details-2-img ">
                                        <img src="/images/product-details/product-details-slider-2.png" alt="">
                                    </div>
                                </div>
                                <div class="product-details-shape pro-dec-shape1">
                                    <img src="/images/product-details/product-details-shape.png" alt="">
                                </div>
                            </div>
                            <div class="product-details-tab-small nav">
                                <a class="active" href="#pro-details1">
                                    <img src="/images/product-details/small-7.jpg" alt="">
                                </a>
                                <a href="#pro-details2">
                                    <img src="/images/product-details/small-8.jpg" alt="">
                                </a>
                                <a href="#pro-details3">
                                    <img src="/images/product-details/small-1.jpg" alt="">
                                </a>
                                <a href="#pro-details4">
                                    <img src="/images/product-details/small-5.jpg" alt="">
                                </a>
                                <a href="#pro-details5">
                                    <img src="/images/product-details/small-3.jpg" alt="">
                                </a>
                                <a href="#pro-details6">
                                    <img src="/images/product-details/small-8.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <div class="product-details-content main-product-details-content">
                            <h2>Fashion Shop</h2>
                            <div class="product-ratting-review-wrap">
                                <div class="product-ratting-digit-wrap">
                                    <div class="product-ratting">
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-rating"></i>
                                        <i class="icon-star-empty"></i>
                                    </div>
                                    <div class="product-digit">
                                        <span>4.0</span>
                                    </div>
                                </div>
                                <div class="product-review-order">
                                    <span>62 Reviews</span>
                                    <span>242 orders</span>
                                </div>
                            </div>
                            <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                            <div class="pro-details-price">
                                <span>US $75.72</span>
                                <span class="old-price">US $95.72</span>
                            </div>
                            <div class="pro-details-color-wrap">
                                <span>Color:</span>
                                <div class="pro-details-color-content">
                                    <ul>
                                        <li><a class="white" href="#">Black</a></li>
                                        <li><a class="azalea" href="#">Blue</a></li>
                                        <li><a class="dolly" href="#">Green</a></li>
                                        <li><a class="peach-orange" href="#">Orange</a></li>
                                        <li><a class="mona-lisa active" href="#">Pink</a></li>
                                        <li><a class="cupid" href="#">gray</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-size">
                                <span>Size:</span>
                                <div class="pro-details-size-content">
                                    <ul>
                                        <li><a href="#">XS</a></li>
                                        <li><a href="#">S</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">XL</a></li>
                                        <li><a href="#">XXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pro-details-quality">
                                <span>Quantity:</span>
                                <div class="cart-plus-minus">
                                    <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                </div>
                            </div>
                            <div class="product-details-meta">
                                <ul>
                                    <li><span>Model:</span> <a href="#">Odsy-1000</a></li>
                                    <li><span>Ship To</span> <a href="#">2834 Laurel Lane</a>, <a href="#">Mentone</a> , <a href="#">Texas</a></li>
                                </ul>
                            </div>
                            <div class="pro-details-action-wrap">
                                <div class="pro-details-buy-now">
                                    <a href="#">Buy Now</a>
                                </div>
                                <div class="pro-details-action">
                                    <a title="Add to Cart" href="#"><i class="icon-basket"></i></a>
                                    <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                    <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                    <div class="product-dec-social">
                                        <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook-square"></i></a>
                                        <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                        <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                        <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="description-review-wrapper pt-160 pb-155">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dec-review-topbar nav mb-65">
                            <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                            <a data-toggle="tab" href="#des-details2">Specification</a>
                            <a data-toggle="tab" href="#des-details3">Meterials </a>
                            <a data-toggle="tab" href="#des-details4">Reviews and Ratting </a>
                        </div>
                        <div class="tab-content dec-review-bottom">
                            <div id="des-details1" class="tab-pane active">
                                <div class="description-wrap">
                                    <p>Crafted in premium watch quality, fenix Chronos is the first Garmin timepiece to combine a durable metal case with integrated performance GPS to support navigation and sport. In the tradition of classic tool watches it features a tough design and a set of modern meaningful tools like Elevate wrist heart rate, various sports apps.</p>
                                    <p> advanced performance metrics for endurance sports, Garmin quality navigation features and smart notifications. In fenix Chronos top-tier performance meets sophisticated design in a highly evolved timepiece that fits your style anywhere, anytime. Solid brushed 316L stainless steel case with brushed stainless steel bezel and integrated EXOTM antenna for GPS + GLONASS support. High-strength scratch resistant sapphire crystal. Brown vintage leather strap with hand-sewn contrast stitching and nubuck inner lining and quick release mechanism.</p>
                                </div>
                            </div>
                            <div id="des-details2" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Name</td>
                                                <td>Salwar Kameez</td>
                                            </tr>
                                            <tr>
                                                <td>SKU</td>
                                                <td>0x48e2c</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Models</td>
                                                <td>FX 829 v1</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Categories</td>
                                                <td>Digital Print</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Size</td>
                                                <td>60’’ x 40’’</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Brand </td>
                                                <td>Individual Collections</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Color</td>
                                                <td>Black, White</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details3" class="tab-pane">
                                <div class="specification-wrap table-responsive">
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="width1">Top</td>
                                                <td>Cotton Digital Print Chain Stitch Embroidery Work</td>
                                            </tr>
                                            <tr>
                                                <td>Bottom</td>
                                                <td>Cotton Cambric</td>
                                            </tr>
                                            <tr>
                                                <td class="width1">Dupatta</td>
                                                <td>Digital Printed Cotton Malmal With Chain Stitch</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane">
                                <div class="review-wrapper">
                                    <h2>1 review for Sleeve Button Cowl Neck</h2>
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="/images/product-details/client-1.png" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-name">
                                                    <h5><span>John Snow</span> - March 14, 2019</h5>
                                                </div>
                                                <div class="review-rating">
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                    <i class="yellow icon-rating"></i>
                                                </div>
                                            </div>
                                            <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in vehicula lacus scelerisque</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ratting-form-wrapper">
                                    <span>Add a Review</span>
                                    <p>Your email address will not be published. Required fields are marked <span>*</span></p>
                                    <div class="ratting-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text">
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Email <span>*</span></label>
                                                        <input type="email">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="star-box-wrap">
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                        <div class="single-ratting-star">
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                            <a href="#"><i class="icon-rating"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style mb-20">
                                                        <label>Your review <span>*</span></label>
                                                        <textarea name="Your Review"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-submit">
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-155">
            <div class="container">
                <div class="section-title-8 mb-65">
                    <h2>You May Like Also</h2>
                </div>
                <div class="product-slider-active-4">
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="/images/product/product-151.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="/images/product/product-153.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="/images/product/product-154.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-wrap-plr-1">
                        <div class="product-wrap">
                            <div class="product-img product-img-zoom mb-25">
                                <a href="product-details.html">
                                    <img src="/images/product/product-152.jpg" alt="">
                                </a>
                            </div>
                            <div class="product-content">
                                <h4><a href="product-details.html">Product Title</a></h4>
                                <div class="product-price">
                                    <span>$ 124</span>
                                    <span class="old-price">$ 130</span>
                                </div>
                            </div>
                            <div class="product-action-position-1 text-center">
                                <div class="product-content">
                                    <h4><a href="product-details.html">Product Title</a></h4>
                                    <div class="product-price">
                                        <span>$ 124</span>
                                        <span class="old-price">$ 130</span>
                                    </div>
                                </div>
                                <div class="product-action-wrap">
                                    <div class="product-action-cart">
                                        <button title="Add to Cart">Add to cart</button>
                                    </div>
                                    <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                    <button title="Add to Compare"><i class="icon-compare"></i></button>
                                    <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')
    </div>

    <script src="{{ asset('/js/vendor/modernizr-3.6.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('/js/vendor/jquery-migrate-3.3.0.min.js') }}"></script>
<script src="{{ asset('/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/js/plugins/slick.js') }}"></script>
<script src="{{ asset('/js/plugins/countdown.js') }}"></script>
<script src="{{ asset('/js/plugins/wow.js') }}"></script>
<script src="{{ asset('/js/plugins/instafeed.js') }}"></script>
<script src="{{ asset('/js/plugins/svg-injector.min.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('/js/plugins/mouse-parallax.js') }}"></script>
<script src="{{ asset('/js/plugins/images-loaded.js') }}"></script>
<script src="{{ asset('/js/plugins/isotope.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery-ui-touch-punch.js') }}"></script>
<script src="{{ asset('/js/plugins/jquery-ui.js') }}"></script>
<script src="{{ asset('/js/plugins/magnific-popup.js') }}"></script>
<script src="{{ asset('/js/plugins/easyzoom.js') }}"></script>
<script src="{{ asset('/js/plugins/scrollup.js') }}"></script>
<script src="{{ asset('/js/plugins/ajax-mail.js') }}"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>