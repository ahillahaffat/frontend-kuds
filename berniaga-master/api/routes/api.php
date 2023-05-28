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


Route::prefix('admin')->middleware(['auth:sanctum', 'auth.admin'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });

    Route::post('/logout-admin', [App\Http\Controllers\Admin\AuthController::class, 'logout']);
});

Route::prefix('seller')->middleware(['auth:sanctum', 'auth.seller'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });
    
    Route::get('/seller/{id?}', [App\Http\Controllers\Seller\SellerController::class, 'index']);
    Route::put('/seller/update/{id}', [App\Http\Controllers\Seller\SellerController::class, 'update']);
    Route::delete('/seller/delete/{id}', [App\Http\Controllers\Seller\SellerController::class, 'destroy']);
    Route::post('/logout-seller', [App\Http\Controllers\Seller\AuthController::class, 'logout']);
});

Route::prefix('user')->middleware(['auth:sanctum', 'auth.user'])->group(function () {
    Route::get('/profiles', function (Request $request) {
        return auth()->user();
    });


    Route::get('/user/{id?}', [App\Http\Controllers\User\UserController::class, 'index']);
    Route::put('/user/update/{id}', [App\Http\Controllers\User\UserController::class, 'update']);
    Route::delete('/user/delete/{id}', [App\Http\Controllers\User\UserController::class, 'destroy']);
    Route::post('/logout-user', [App\Http\Controllers\User\AuthController::class, 'logout']);
});
