<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class SellerController extends Controller
{
    public function index($id=null)
    {
        if ($id === null) {
            $seller = UserModel::get();
        } else {
            $seller = UserModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Success get data seller',
            'data' => $seller,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }
}
