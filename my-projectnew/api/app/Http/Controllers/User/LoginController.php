<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validasi login
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            throw ValidationException::withMessages($validator->errors()->all());
        }

        // Proses login
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autentikasi berhasil
            dd(Auth::user()); // Pernyataan debug untuk memeriksa pengguna yang berhasil login
            return redirect('/profile');
        } else {
            // Autentikasi gagal
            return back()->withErrors(['email' => 'Email atau kata sandi salah'])->withInput();
        }        
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
