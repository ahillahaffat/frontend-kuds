<!-- Menghubungkan dengan view template master -->
@extends('master')
@section('navbar')
<header class="header-area section-padding-1 header-ptb-1 transparent-bar sticky-bar">
<div class="header-large-device">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-0 col-md-0">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('images/logo/logo-2.png') }}" alt="logo">
                    </a>
                </div>
            </div>
            <div class="col-xl-11">
                <div class="header-action-wrap header-action-flex header-action-mrg-2">
                    <div class="categories-dropdown">
                        <select class="nice-select nice-select-style-1">
                            <option>Categories</option>
                            <option>Azerbaijan</option>
                            <option>Bahamas</option>
                            <option>Bahrain</option>
                            <option>Bangladesh</option>
                            <option>Barbados</option>
                        </select>
                    </div>
                    <div class="search-style-2 search-2-bg-white">
                        <form>
                            <div class="form-search-2">
                                <input class="input-text" value="" placeholder="Type to search (Ex: Phone, Laptop)" type="search">
                                <button>
                                    <i class="icofont-search-1"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="same-style header-cart mr-20">
                        <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                    </div>
                    <div class="relative sm:flex sm:justify-end sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
                    @auth
    <!-- Tampilkan nama pengguna dan gambar profil -->
    <div class="categories-dropdown">
        <a class="dropdown-toggle" role="button" id="profileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/fox.jpg" width="40" height="40" class="rounded-circle">
            <span class="text-xs font-semibold text-gray-600">{{ Auth::user()->name }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown">
            <!-- Account Management -->
            <div class="block px-4 py-2 text-xxs text-gray-400 font-semibold">
    {{ __('Manage Account') }}
</div>

            <a class="dropdown-item" href="profile">{{ __('Profile') }}</a>
            <div class="dropdown-divider"></div>
            <form method="POST" action="{{ route('logout') }}" x-data>
                @csrf
                <button class="dropdown-item" type="submit">{{ __('Log Out') }}</button>
            </form>
        </div>
    </div>
@else
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
        @endif
    </div>
@endauth
</div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="header-small-device">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo mobile-logo-width">
                        <a href="index.html">
                            <img alt="" src="/images/logo/logo-2.png">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-action-wrap header-action-flex header-action-mrg-1">
                        <div class="same-style header-cart">
                            <a class="cart-active" href="#"><i class="icofont-shopping-cart"></i></a>
                        </div>
                        <div class="same-style header-info">
                            <button class="mobile-menu-button-active">
                                <span class="info-width-1"></span>
                                <span class="info-width-2"></span>
                                <span class="info-width-3"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="sidebar-cart-active">
    <div class="sidebar-cart-all">
        <a class="cart-close" href="#"><i class="icofont-close-line"></i></a>
        <div class="cart-content">
            <h3>Shopping Cart</h3>
            <ul>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="/images/cart/cart-1.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Awesome Mobile</a></h4>
                        <span>1 × $49.00</span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
                <li class="single-product-cart">
                    <div class="cart-img">
                        <a href="#"><img src="/images/cart/cart-2.jpg" alt=""></a>
                    </div>
                    <div class="cart-title">
                        <h4><a href="#">Smart Watch</a></h4>
                        <span>1 × $49.00</span>
                    </div>
                    <div class="cart-delete">
                        <a href="#">×</a>
                    </div>
                </li>
            </ul>
            <div class="cart-total">
                <h4>Subtotal: <span>$170.00</span></h4>
            </div>
            <div class="cart-checkout-btn">
                <a class="btn-hover cart-btn-style" href="cart.html">view cart</a>
                <a class="no-mrg btn-hover cart-btn-style" href="checkout.html">checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection