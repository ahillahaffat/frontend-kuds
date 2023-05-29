<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('admin/register-admin', [App\Http\Controllers\Admin\AuthController::class, 'register']);
Route::post('admin/login-admin', [App\Http\Controllers\Admin\AuthController::class, 'login']);

Route::post('seller/register-seller', [App\Http\Controllers\Seller\AuthController::class, 'register']);
Route::post('seller/login-seller', [App\Http\Controllers\Seller\AuthController::class, 'login']);

Route::post('user/register-user', [App\Http\Controllers\User\AuthController::class, 'register']);
Route::post('user/login-user', [App\Http\Controllers\User\AuthController::class, 'login']);
Route::post('seller/produk-create', [App\Http\Controllers\Seller\ProdukController::class, 'store']);

Route::get('lokasi/province', [App\Http\Controllers\Lokasi\ProvinceController::class, 'index']);
Route::get('lokasi/cities/{id_province}', [App\Http\Controllers\Lokasi\CitiesController::class, 'index']);
Route::get('lokasi/districts/{id_city}', [App\Http\Controllers\Lokasi\DistrictsController::class, 'index']);
Route::get('lokasi/subdistricts/{id_district}', [App\Http\Controllers\Lokasi\SubDistrictsController::class, 'index']);



Route::prefix('admin')->middleware(['auth:sanctum', 'auth.admin'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });
    Route::get('/admin/{id?}', [App\Http\Controllers\admin\AdminController::class, 'index']);
    Route::put('/admin/update/{id}', [App\Http\Controllers\admin\AdminController::class, 'update']);
    Route::delete('/admin/delete/{id}', [App\Http\Controllers\admin\AdminController::class, 'destroy']);
    Route::post('/logout-admin', [App\Http\Controllers\Admin\AuthController::class, 'logout']);
    
    //route kategori global
    Route::get('/kategori-global/{id?}', [App\Http\Controllers\admin\KategoriGlobalController::class, 'index_kategori_global']);
    Route::put('/kategori-global-update/{id}', [App\Http\Controllers\admin\KategoriGlobalController::class, 'update_kategori_global']);
    Route::Post('/kategori-global-create', [App\Http\Controllers\admin\KategoriGlobalController::class, 'store_kategori_global']);
    Route::delete('/kategori-global-delete/{id}', [App\Http\Controllers\admin\KategoriGlobalController::class, 'destroy_Kategori_global']);
    
    //route tipe varian 
    Route::get('/tipe-varian/{id?}', [App\Http\Controllers\admin\TipeVarianController::class, 'index_tipe_varian']);
    Route::put('/tipe-varian-update/{id}', [App\Http\Controllers\admin\TipeVarianController::class, 'update_tipe_varian']);
    Route::Post('/tipe-varian-create', [App\Http\Controllers\admin\TipeVarianController::class, 'store_tipe_varian']);
    Route::delete('/tipe-varian-delete/{id}', [App\Http\Controllers\admin\TipeVarianController::class, 'destroy_tipe_varian']);
 
});

Route::prefix('seller')->middleware(['auth:sanctum', 'auth.seller'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });

    // Route Seller
    Route::get('/seller/{id?}', [App\Http\Controllers\Seller\SellerController::class, 'index']);
    Route::put('/seller/update/{id}', [App\Http\Controllers\Seller\SellerController::class, 'update']);
    Route::delete('/seller/delete/{id}', [App\Http\Controllers\Seller\SellerController::class, 'destroy']);
    Route::post('/logout-seller', [App\Http\Controllers\Seller\AuthController::class, 'logout']);

    // Route Toko
    Route::get('/toko/{id?}', [App\Http\Controllers\Seller\TokoController::class, 'index']);
    Route::post('/toko-create', [App\Http\Controllers\Seller\TokoController::class, 'store']);
    Route::put('/toko/update/{id}', [App\Http\Controllers\Seller\TokoController::class, 'update']);
    Route::delete('/toko/{id}', [App\Http\Controllers\Seller\TokoController::class, 'destroy']);

    // Route Produk
    Route::get('/produk/{id?}', [App\Http\Controllers\Seller\ProdukController::class, 'index']);
    Route::post('/produk-create', [App\Http\Controllers\Seller\ProdukController::class, 'store']);
    Route::put('/produk/update/{id}', [App\Http\Controllers\Seller\ProdukController::class, 'update']);
    Route::delete('/produk/delete/{id}', [App\Http\Controllers\Seller\ProdukController::class, 'destroy']);

    // Route Etalase
    Route::get('/etalase/{id?}', [App\Http\Controllers\Seller\EtalaseController::class, 'index_etalase']);
    Route::post('/etalase-create', [App\Http\Controllers\Seller\EtalaseController::class, 'store_etalase']);
    Route::put('/etalase/update/{id}', [App\Http\Controllers\Seller\EtalaseController::class, 'update_etalase']);
    Route::delete('/etalase/delete/{id}', [App\Http\Controllers\Seller\EtalaseController::class, 'destroy_etalase']);

});

Route::prefix('user')->middleware(['auth:sanctum', 'auth.user'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });

    Route::get('/user/{id?}', [App\Http\Controllers\User\UserController::class, 'index']);
    Route::put('/user/update/{id}', [App\Http\Controllers\User\UserController::class, 'update']);
    Route::delete('/user/delete/{id}', [App\Http\Controllers\User\UserController::class, 'destroy']);
    Route::post('/logout-user', [App\Http\Controllers\User\AuthController::class, 'logout']);

    Route::get('/alamat-user/{id?}', [App\Http\Controllers\User\AlamatUserController::class, 'index']);
    Route::put('/alamat-user-update/{id}', [App\Http\Controllers\User\AlamatUserController::class, 'update']);
    Route::delete('/alamat-user-delete/{id}', [App\Http\Controllers\User\AlamatUserController::class, 'destroy']);
    Route::post('/alamat-user-create', [App\Http\Controllers\User\AlamatUserController::class, 'store']);

    Route::get('/user/barang/{id?}', [App\Http\Controllers\User\BarangController::class, 'index']);
    Route::get('/user/seller{id?}', [App\Http\Controllers\User\SellerController::class, 'index']);
});
