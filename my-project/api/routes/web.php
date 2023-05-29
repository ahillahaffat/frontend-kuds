<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get('/akun', function () {
    return view('akun');
});
Route::get('/produk', function () {
    return view('produk');
});
Route::get('/order', function () {
    return view('order');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
