<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function loginuser()
    {
        return view('login');
    }

    public function product()
    {
        return view('product');
    }

    public function shop()
    {
        return view('shop');
    }
    public function profile()
    {
        return view('profile');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
