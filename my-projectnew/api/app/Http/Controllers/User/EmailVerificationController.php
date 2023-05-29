<?php

namespace App\Http\Controllers\User;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmailVerificationController extends Controller
{
    public function verifyEmail($verification_code)
    {
        $user = UserModel::where('verification_code', $verification_code)->first();

        if (!$user) {
            return Redirect::to('/')->with('error', 'Invalid verification code');
        }

        if ($user->email_verified) {
            return Redirect::to('/')->with('message', 'Email already verified');
        }

        $user->email_verified = true;
        $user->verification_code = null;
        $user->save();

        return Redirect::to('/')->with('message', 'Email verification successful');
    }
}
