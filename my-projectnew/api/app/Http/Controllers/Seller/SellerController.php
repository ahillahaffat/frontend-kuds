<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\SellerModel;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class SellerController extends Controller
{
    public function index($id=null)
    {
        if ($id === null) {
            $seller = SellerModel::get();
        } else {
            $seller = SellerModel::find($id);
        }
        $response = [
            'status' => true,
            'message' => 'Success get data seller',
            'data' => $seller,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function update(Request $request,$id)
    {
        //
        $seller=SellerModel::find($id);
        $seller->update($request->all());
        $response = [
            'status' => true,
            'message' => 'Success update data seller',
            'data' => $seller
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        SellerModel::destroy($id);
        // return MapelModel::all();
        
        $response = [
            'status' => true,
            'message' => 'Success delete data',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }
    
}
