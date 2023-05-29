<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();

        return view('edit', compact('user'));
    }
    public function updateGeneralInfo(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi foto profil (opsional)
    ]);

    // Mengupdate data pengguna
    $user->name = $request->name;

    // Memeriksa apakah ada file foto yang diunggah
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoPath = $photo->store('profile_photos', 'public'); // Simpan foto profil ke dalam direktori storage/app/public/profile_photos
        $user->photo = $photoPath;
    }

    $user->save();

    return redirect()->back()->with('success', 'Informasi umum berhasil diperbarui!');
}


    public function updateEmailPhone(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'phone' => 'nullable|string',
        ]);

        // Mengupdate data pengguna
        $user->email = $request->email;
        $user->no_telp = $request->phone;
        $user->save();

        return redirect()->back()->with('success', 'Email dan nomor telepon berhasil diperbarui!');
    }

    public function updatePassword(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'old_password' => 'required|string',
        'new_password' => 'required|string|min:8|confirmed',
    ]);

    // Memeriksa kecocokan kata sandi lama
    if (!Hash::check($request->old_password, $user->password)) {
        return redirect()->back()->withErrors(['old_password' => 'Kata sandi lama tidak cocok']);
    }

    // Mengupdate kata sandi baru
    $user->password = Hash::make($request->new_password);
    $user->save();

    // Logout pengguna
    Auth::logout();

    // Alihkan ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Kata sandi berhasil diperbarui! Silakan login ulang.');
}
}
