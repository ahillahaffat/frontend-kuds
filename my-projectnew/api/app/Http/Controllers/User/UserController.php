<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getUserDetails()
    {
        $user = Auth::user();
        $email = $user->email;
        $phone = $user->phone;
        
        return view('user-details', compact('email', 'phone'));
    }

    public function uploadPhoto(Request $request)
    {
        // Validasi permintaan dan pastikan file foto ada
        $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Simpan foto ke direktori penyimpanan (misalnya storage/app/public/photos)
        $path = $request->file('photo')->store('public/photos');

        // Simpan nama file atau path file dalam kolom 'photo' dalam tabel pengguna
        $user = Auth::user();
        $user->photo = $path;
        $user->save();

        return response()->json([
            'message' => 'Foto berhasil diunggah dan disimpan.',
            'path' => $path,
        ]);
    }

    public function updateUserPhoto(Request $request)
    {
        // Update kolom 'photo' dalam tabel pengguna dengan foto baru
        $user = Auth::user();
        $user->photo = $request->photo;
        $user->save();

        return response()->json([
            'message' => 'Foto pengguna berhasil diperbarui.',
            'photo' => $user->photo,
        ]);
    }
}
