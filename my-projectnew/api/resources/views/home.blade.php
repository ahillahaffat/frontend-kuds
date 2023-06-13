<!-- Menghubungkan dengan view template master -->
@extends('master')

@section('navbar')
    @include('navbar')
@endsection
<!-- Main COntent -->
@section('main_content')
<div class="slider-banner-area slider-mt-7">
     <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="slider-area mr-15">
          <div class="slider-active-5 dot-style-6 dot-style-6-position-1">
            <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image: url(/images/slider/kuds-01.png)">
              <div class="container">
                <div class="slider-content-12 slider-animated-1">
                  <h1 class="animated">Koperasi <br /><span class="bold">Urun Dana</span> <br /><span class="blue"> Sejahtera</span></h1>
                  <p class="animated">Datang dan jadilah agen perubahan di masa depan!</p>
                </div>
              </div>
            </div>
            <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image: url(/images/slider/kuds-02.png)">
              <div class="container">
                <div class="slider-content-12 slider-animated-1">
                  <h1 class="animated">Koperasi <br /><span class="bold">Urun Dana</span> <br /><span class="blue">Sejahtera</span></h1>
                  <p class="animated">Datang dan jadilah agen perubahan di masa depan!</p>
                </div>
              </div>
            </div>
            <div class="single-slider slider-height-13 custom-d-flex custom-align-item-center bg-img" style="background-image: url(/images/slider/kuds-01.png)">
              <div class="container">
                <div class="slider-content-12 slider-animated-1">
                  <h1 class="animated">Koperasi <br /><span class="bold">Urun Dana</span> <br /><span class="blue">Sejahtera</span> </h1>
                  <p class="animated">Datang dan jadilah agen perubahan di masa depan!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      <div class="categorie-area">
        <div class="container p-0">
          <div class="col-lg-8 col-md-8">
            <div class="section-title-8 pt-50 pb-20">
              <h2 class="bold">Kategori</h2>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/fashion.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Fashion</a></h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/gadgets.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4>
                    <a class="color-light" href="/shop">Gadgets</a>
                  </h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/furniture.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Furniture</a></h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/sofa.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Chair</a></h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/food-icon.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4>
                    <a class="color-light" href="/shop">Food Needs</a>
                  </h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/live-music.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Music</a></h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/car.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Otomotif</a></h4>
                </div>
              </div>
            </div>
            <div class="custom-col-8 col-md-3">
              <div class="single-categories-5 text-center">
                <div class="single-categories-5-img">
                  <a href="/shop"
                    ><img
                      class="inject-me"
                      src="/images/icon-img/house.png"
                      alt=""
                      style="max-width: 50%"
                  /></a>
                </div>
                <div class="categorie-content-6">
                  <h4><a class="color-light" href="/shop">Property</a></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>      
      <div class="product-area pt-160 pb-115">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8">
              <div class="section-title-8">
                <h2 class="bold">Deal Of The Month</h2>
              </div>
            </div>
            <div class="col-lg-4 col-md-4">
              <div
                class="banner-btn-4 black-2 banner-btn-4-right banner-btn-4-mrg-none"
              >
                <a href="/shop"
                  >Browse All Products
                  <img
                    class="inject-me arrow-mrg-dec"
                    src="/images/icon-img/right-arrow-banner-2.svg"
                    alt=""
                /></a>
              </div>
            </div>
          </div>
          <div class="product-tab-list-1 tab-list-1-left nav mt-100 mb-65">
            <a class="active" href="#product-1" data-toggle="tab"> All </a>
            <a href="#product-2" data-toggle="tab"> Gadget </a>
            <a href="#product-3" data-toggle="tab"> Fashion </a>
            <a href="#product-4" data-toggle="tab"> Furniture </a>
            <a href="#product-5" data-toggle="tab"> Food Needs </a>
            <a href="#product-6" data-toggle="tab"> Property </a>
          </div>
          <div class="tab-content jump">
            <div id="product-1" class="tab-pane active">
              <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/docmart.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Dr. Martens</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Dr Martens</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/rolex.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Rolex GMT-Master II</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Rolex GMT-Master II</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/sarungbhs.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Sarung BHS</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Sarung BHS</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/batik.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Batik Keris</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Batik Keris</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/bag.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Leather Bag</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Leather Bag</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/telur.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Egg</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Egg</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/kursi.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Wood Chair</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Wood Chair</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/Daging-Ayam.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Daging Ayam Segar</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Daging Ayam Segar</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/minyak.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Minyak Goreng</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Minyak Goreng</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/airmineral.png"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Air Mineral (Santri)</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Air Mineral (Santri)</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/beras.jpeg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Beras</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Beras</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="product-2" class="tab-pane">
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-141.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-142.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-143.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-144.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-145.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-146.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-147.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-148.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-149.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-150.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-140.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="product-3" class="tab-pane">
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-141.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-142.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-140.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-143.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-144.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-145.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-146.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-147.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-148.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-149.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-150.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="product-4" class="tab-pane">
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-141.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-142.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-143.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-144.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-140.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-145.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-146.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-147.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-148.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-149.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-150.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="product-5" class="tab-pane">
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-141.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-142.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-143.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-144.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-145.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-146.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-140.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-147.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-148.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-149.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-150.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="product-6" class="tab-pane">
              <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-141.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-142.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-143.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-144.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-145.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-146.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-147.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-148.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-140.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-149.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                  <div class="product-wrap mb-40">
                    <div class="product-img product-img-zoom mb-25">
                      <a href="product">
                        <img
                          src="/images/product/product-150.jpg"
                          alt=""
                        />
                      </a>
                    </div>
                    <div class="product-content">
                      <h4><a href="product">Product Title</a></h4>
                      <div class="product-price">
                        <span>Rp. 124</span>
                        <span class="old-price">Rp. 130</span>
                      </div>
                    </div>
                    <div class="product-action-position-1 text-center">
                      <div class="product-content">
                        <h4>
                          <a href="product">Product Title</a>
                        </h4>
                        <div class="product-price">
                          <span>Rp. 124</span>
                          <span class="old-price">Rp. 130</span>
                        </div>
                      </div>
                      <div class="product-action-wrap">
                        <div class="product-action-cart">
                          <button class="padding-dec" title="Add to Cart">
                            Add to cart
                          </button>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal">
                          <i class="icon-zoom"></i>
                        </button>
                        <button title="Add to Compare">
                          <i class="icon-compare"></i>
                        </button>
                        <button title="Add to Wishlist">
                          <i class="icon-heart-empty"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="service-area section-padding-10 pt-10 pb-110">
        <div class="container p-0">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
              <div class="card border-0 shadow">
                <div class="card-body d-flex align-items-center">
                  <img class="card-icon" src="/images/icon-img/box.svg" style="width: 30%;">
                  <div class="ml-0 pl-0">
                    <h3 class="card-title mb-0">Gratis Ongkir</h3>
                    <p class="card-text">Gratis ongkir untuk pesanan lebih dari Rp.50k</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
              <div class="card border-0 shadow">
                <div class="card-body d-flex align-items-center">
                  <img class="card-icon" src="/images/icon-img/moneyback.svg" style="width: 30%;">
                  <div class="ml-0 pl-0">
                    <h3 class="card-title mb-0">Garansi Uang Kembali</h3>
                    <p class="card-text">Garansi uang kembali jika tidak puas</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
              <div class="card border-0 shadow">
                <div class="card-body d-flex align-items-center">
                  <img class="card-icon" src="/images/icon-img/secure.svg" style="width: 30%;">
                  <div class="ml-0 pl-0">
                    <h3 class="card-title mb-0">Pembayaran Aman</h3>
                    <p class="card-text">Pembayaran aman dan terjamin</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-30">
              <div class="card border-0 shadow">
                <div class="card-body d-flex align-items-center">
                  <img class="card-icon" src="/images/icon-img/support.svg" style="width: 30%;">
                  <div class="ml-0 pl-0">
                    <h3 class="card-title mb-0">Dukungan 24/7</h3>
                    <p class="card-text">Dapatkan dukungan 24 jam/7 hari</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('footer')
    @include('footer')
@endsection