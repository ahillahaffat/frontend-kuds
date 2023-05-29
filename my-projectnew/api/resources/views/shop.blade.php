<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

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
    @include('navbar')
<div class="shop-area pt-160 pb-160">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div id="shop-categorie-1" class="tab-pane ">
                                <div class="shop-top-bar">
                                    <div class="shop-top-bar-left">
                                        <div class="shop-tab nav">
                                            <a href="#shop-1" class="active" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-grid.svg" alt=""></a>
                                            <a href="#shop-2" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-list.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="shop-top-bar-right">
                                        <div class="shop-page-list">
                                            <ul>
                                                <li>Show</li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">6</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content pt-30">
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-153.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Modern Light</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Modern Light</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-152.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Table Clock</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Table Clock</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-151.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Smart Watch</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Smart Watch</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-139.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Pen & Holder</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Pen & Holder</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Eco Bag</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Eco Bag</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Table Plant</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Table Plant</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                    <div id="shop-2" class="tab-pane ">
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-pagination-style text-center mt-50">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-categorie-2" class="tab-pane active">
                                <div class="shop-top-bar">
                                    <div class="shop-top-bar-left">
                                        <div class="shop-tab nav">
                                            <a href="#shop-3" class="active" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-grid.svg" alt=""></a>
                                            <a href="#shop-4" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-list.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="shop-top-bar-right">
                                        <div class="shop-page-list">
                                            <ul>
                                                <li>Show</li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">6</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content pt-30">
                                    <div id="shop-3" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Modern Light</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Modern Light</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Table Clock</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Table Clock</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Smart Watch</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Smart Watch</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Pen & Holder</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Pen & Holder</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Eco Bag</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Eco Bag</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-139.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Table Plant</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Table Plant</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-151.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-152.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-153.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                    <div id="shop-4" class="tab-pane ">
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-pagination-style text-center mt-50">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="shop-categorie-3" class="tab-pane">
                                <div class="shop-top-bar">
                                    <div class="shop-top-bar-left">
                                        <div class="shop-tab nav">
                                            <a href="#shop-5" class="active" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-grid.svg" alt=""></a>
                                            <a href="#shop-6" data-toggle="tab"><img class="inject-me" src="/images/icon-img/shop-list.svg" alt=""></a>
                                        </div>
                                    </div>
                                    <div class="shop-top-bar-right">
                                        <div class="shop-page-list">
                                            <ul>
                                                <li>Show</li>
                                                <li class="active"><a href="#">2</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">6</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-content pt-30">
                                    <div id="shop-5" class="tab-pane active">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-139.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Modern Light</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Modern Light</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Table Clock</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Table Clock</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Smart Watch</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Smart Watch</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Wood Pen & Holder</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Wood Pen & Holder</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Eco Bag</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Eco Bag</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Table Plant</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Table Plant</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-153.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-151.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                                <div class="product-wrap mb-50">
                                                    <div class="product-img product-img-zoom mb-25">
                                                        <a href="product">
                                                            <img src="/images/product/product-152.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="product-content">
                                                        <h4><a href="product">Product Title</a></h4>
                                                        <div class="product-price">
                                                            <span>$ 124</span>
                                                            <span class="old-price">$ 130</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-action-position-1 text-center">
                                                        <div class="product-content">
                                                            <h4><a href="product">Product Title</a></h4>
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
                                    <div id="shop-6" class="tab-pane ">
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-136.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-md-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-134.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-md-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-135.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-md-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-138.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-md-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="shop-list-wrap mb-50">
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-4">
                                                    <div class="product-list-img">
                                                        <a href="product">
                                                            <img src="/images/product/product-137.jpg" alt="">
                                                        </a>
                                                        <div class="shop-list-quickview">
                                                            <button data-toggle="modal" data-target="#exampleModal"><i class="icon-zoom"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-md-8">
                                                    <div class="shop-list-content ml-20">
                                                        <h3><a href="#">Product Title Here</a></h3>
                                                        <div class="pro-list-price">
                                                            <span>$50.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </div>
                                                        <p>Composition: 50% cotton,45% polyester, 5% polyamide. Filling: 100% polyester. Hood fur: 64% acrylic,23% modacrylic,13% polyester</p>
                                                        <div class="product-list-action">
                                                            <button title="Add to Compare"><i class="icon-compare"></i></button>
                                                            <div class="product-action-cart">
                                                                <button title="Add to Cart">Add to cart</button>
                                                            </div>
                                                            <button title="Add to Wishlist"><i class="icon-heart-empty"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-pagination-style text-center mt-50">
                                        <ul>
                                            <li><a class="active" href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#"><i class="icofont-long-arrow-right"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="shop-sidebar-style">
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Harga</h4>
                                <div class="price-filter mt-55 mb-65">
                                    <div id="slider-range"></div>
                                    <div class="price-slider-amount">
                                        <div class="label-input">
                                            <span>Price: </span><input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Kategori</h4>
                                <div class="sidebar-widget-categori mt-45 mb-70">
                                    <ul>
                                        <li><a href="#">All</a> </li>
                                        <li><a class="active" href="#">Clothing</a> </li>
                                        <li><a href="#">Shoes</a> </li>
                                        <li><a href="#">Watches</a> </li>
                                        <li><a href="#">Jewelry</a> </li>
                                        <li><a href="#">Accessories</a> </li>
                                        <li><a href="#"> Big & Tall </a> </li>
                                        <li><a href="#">Contemporary</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Ukuran</h4>
                                <div class="sidebar-widget-size mt-50 mb-75">
                                    <ul>
                                        <li><a href="#">XS</a> </li>
                                        <li><a href="#">S</a> </li>
                                        <li><a href="#">M</a> </li>
                                        <li><a href="#">L</a> </li>
                                        <li><a href="#">XL</a> </li>
                                        <li><a href="#">XXL</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Warna</h4>
                                <div class="pro-details-color-content sidebar-widget-color mt-45 mb-70">
                                    <ul>
                                        <li><a class="white" href="#">Black</a></li>
                                        <li><a class="azalea" href="#">Blue</a></li>
                                        <li><a class="dolly" href="#">Green</a></li>
                                        <li><a class="peach-orange" href="#">Orange</a></li>
                                        <li><a class="mona-lisa active" href="#">Pink</a></li>
                                        <li><a class="cupid" href="#">gray</a></li>
                                        <li><a class="one" href="#">one</a></li>
                                        <li><a class="two" href="#">two</a></li>
                                        <li><a class="three" href="#">three</a></li>
                                        <li><a class="four" href="#">four</a></li>
                                        <li><a class="five" href="#">five</a></li>
                                        <li><a class="six" href="#">six</a></li>
                                        <li><a class="seven" href="#">seven</a></li>
                                        <li><a class="eight" href="#">eight</a></li>
                                        <li><a class="nine" href="#">nine</a></li>
                                        <li><a class="ten" href="#">ten</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('footer')

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