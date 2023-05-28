<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('master');
    }

    public function produk()
    {
        return view('produk');
    }

    public function akun()
    {
        return view('akun');
    }
    public function order()
    {
        return view('order');
    }
    public function shop()
    {
        return view('shop');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
