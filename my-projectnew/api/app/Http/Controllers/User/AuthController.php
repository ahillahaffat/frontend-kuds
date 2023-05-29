<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user',
            'password' => 'required|string|min:8',
            'gender' => 'required|string',
            'no_telp' => 'required|string',
            'date_of_birth' => 'required|date|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), HttpFoundationResponse::HTTP_BAD_REQUEST);
        }

        $user = UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'no_telp' => $request->no_telp,
            'date_of_birth' => $request->date_of_birth,
        ]);

        $response = [
            'status' => true,
            'message' => 'User registration successful',
            'data' => $user,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            if ($validator->errors()->has('password')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Password must be at least 8 characters long',
                ], HttpFoundationResponse::HTTP_BAD_REQUEST);
            } else {
                return response()->json($validator->errors(), HttpFoundationResponse::HTTP_BAD_REQUEST);
            }
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return redirect()->intended('/')->with('success', 'Welcome! You have successfully logged in.');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();

        return [
            'message' => 'You have successfully logged out.'
        ];
    }
}
