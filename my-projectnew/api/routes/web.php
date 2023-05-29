<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RegisterController;
use App\Http\Controllers\User\EmailVerificationController;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


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

Route::get('loginuser', function () {
    return view('login');
});

Route::get('product', function () {
    return view('product');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/shop', function () {
    return view('shop');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('checkout', function () {
    return view('checkout');
});

Route::post('/upload-photo', 'User\UserController@uploadPhoto');
Route::post('/update-user-photo', 'User\UserController@updateUserPhoto');


// Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Register
Route::post('/register', [RegisterController::class, 'register'])->name('register');

// Profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/general-info', [ProfileController::class, 'updateGeneralInfo'])->name('profile.updateGeneralInfo');
Route::put('/profile/email-phone', [ProfileController::class, 'updateEmailPhone'])->name('profile.updateEmailPhone');
Route::put('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');  

