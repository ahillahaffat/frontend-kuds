<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SellerModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admin',
            'password' => 'required|string|min:8',
            'gender' => 'required|string',
            'no_telp' => 'required|string|',
            'date_of_birth' => 'required|date|min:8',
        ]);

        if($validator->fails())
        {
            return response() -> json($validator->errors());
        }

        $seller = SellerModel::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => Hash::make($request ->password),
            'gender' => $request ->gender,
            'no_telp' => $request ->no_telp,
            'date_of_birth' => $request ->date_of_birth,
        ]);

        $response = [
            'status' => true,
            'message' => 'Register Seller telah berhasil',
            'data' => $seller,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if($validator->fails())
        {
            if ($validator->errors()->has('password')) {
                return response()->json([
                    'status' => false,
                    'message' => 'Password minimal harus 8 karakter!',
                ], 400);
            } else {
                return response()->json($validator->errors(), 400);
            }
        }

        $seller = SellerModel::where('email', $request['email'])->first();
        if ($seller) {
            if (Hash::check($request->password, $seller->password)) {
                $token = $seller->createToken('auth_token_seller')->plainTextToken;
        
                return response()->json([
                    'status' => true,
                    'message' => 'Hi '.$seller->name.', welcome to home',
                    'access_token' => $token,
                    'token_type' => 'Bearer',
                    'seller' => $seller
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Email atau Password Salah!',
                ], 400);
            }
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Email atau Password Salah!',
            ], 400);
        }

    }
    
    public function logout()
    {
        auth()->user()->tokens()->delete();

        return [
            'message' => 'You have successfully logged out and the token was successfully deleted'
        ];
    }
}
