<?php

namespace App\Http\Controllers\User;

use App\Models\UserModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailVerification;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required',
            'gender' => 'required',
            'no_telp' => 'required',
            'date_of_birth' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // Simpan data user ke database
        $user = UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'date_of_birth' => $request->date_of_birth,
        ]);

        // Menampilkan pop-up berhasil daftar
        session()->flash('message', 'Berhasil Daftar, Silahkan Login');

        return redirect('loginuser');
    }
}
