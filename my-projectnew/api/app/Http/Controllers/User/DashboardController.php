<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
		return view('home');
	}

    public function loginuser(){
		return view('login');
	}

	public function product(){
		return view('product');
	}

	public function shop(){
		return view('/shop');
	}
}
