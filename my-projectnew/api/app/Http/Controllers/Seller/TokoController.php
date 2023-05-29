<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\TokoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

class TokoController extends Controller
{
    public function index($id=null){
        if ($id == null) {
            $toko = TokoModel::get();
            $toko = $toko->map(function ($item) {
                return [
                    "id" => $item->id,
                    "nama_toko" => $item->nama_toko,
                    "alamat_toko" => $item->alamat_toko,
                    "link_toko" => $item->link_toko,
                    "no_telp_toko" => $item->no_telp_toko,
                    "kecamatan" => $item->kecamatan,
                    "kota" => $item->kota,
                    "provinsi" => $item->provinsi,
                    "kode_pos" => $item->kodepos,
                    "jam_operasional" => $item->jam_operasional,
                    "jenis_usaha" => $item->jenis_usaha,
                    "logo_toko" => $item ? (url(Storage::url('logo_toko/'.$item))) : null,
                    "foto_toko1" => $item ? (url(Storage::url('foto_toko'.$item))) : null,
                    "foto_toko2" => $item ? (url(Storage::url('foto_toko/'.$item))) : null,
                    "foto_toko3" => $item ? (url(Storage::url('foto_toko/'.$item))) : null,
                    "deskripsi" => $item->deskripsi,
                    "status" => $item->status,
                    "saldo" => $item->saldo,
                    "id_seller" => $item->id_seller,
                    "created_at" => $item->created_at,
                ];
            });
        } else {
            $toko = collect(TokoModel::where('id', $id)->first())->map(function ($item, $key) {
                if ($key === 'foto_toko1') {
                    return $item ? url(Storage::url('foto_toko/'.$item)) : null;
                }
                if ($key === 'foto_toko2') {
                    return $item ? url(Storage::url('foto_toko/'.$item)) : null;
                }
                if ($key === 'foto_toko3') {
                    return $item ? url(Storage::url('foto_toko/'.$item)) : null;
                }
                return $item;
            });
        }
        $response = [
            'status' => true,
            'message' => 'Data toko',
            'data' => $toko,
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'nama_toko' => 'required',
            'alamat_toko' => 'required',
            'link_toko' => 'required',
            'no_telp_toko' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kodepos' => 'required',
            'jam_operasional' => 'required',
            'jenis_usaha' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'saldo' => 'required',
            'id_seller' => 'required',            
        ]);

        if($request->hasFile('logo_toko'))
        {
            $logo_toko = $request->file('logo_toko');
            $logo_toko_name = $request->link_toko.'-'.$logo_toko->hashName();
            $logo_toko->storeAs('public/logo_toko/', $logo_toko_name);
        }

        if($request->hasFile('foto_toko1'))
        {
            $foto_toko = $request->file('foto_toko1');
            $foto_toko1_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko1_name);
        }

        if($request->hasFile('foto_toko2'))
        {
            $foto_toko = $request->file('foto_toko2');
            $foto_toko2_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko2_name);
        }

        if($request->hasFile('foto_toko3'))
        {
            $foto_toko = $request->file('foto_toko1');
            $foto_toko3_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko3_name);
        }

        $toko = TokoModel::create([
            'nama_toko' => $request -> nama_toko,
            'alamat_toko' => $request -> alamat_toko,
            'link_toko' => $request -> link_toko,
            'no_telp_toko' => $request -> no_telp_toko,
            'kecamatan' => $request -> kecamatan,
            'kota' => $request -> kota,
            'provinsi' => $request -> provinsi,
            'kodepos' => $request -> kodepos,
            'jam_operasional' => $request -> jam_operasional,
            'jenis_usaha' => $request -> jenis_usaha,
            'logo_toko' => $logo_toko_name,
            'foto_toko1' => $foto_toko1_name,
            'foto_toko2' => $foto_toko2_name,
            'foto_toko3' => $foto_toko3_name,
            'deskripsi' => $request -> deskripsi,
            'status' => $request -> status,
            'saldo' => $request -> saldo,
            'id_seller' => $request -> id_seller,
        ]);

        $response = [
            'status' => true,
            'message' => 'Sukses Menyimpan data toko',
            'data' => $toko
        ];

        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_toko' => 'required',
            'alamat_toko' => 'required',
            'link_toko' => 'required',
            'no_telp_toko' => 'required',
            'kecamatan' => 'required',
            'kota' => 'required',
            'provinsi' => 'required',
            'kode_pos' => 'required',
            'jam_operasional' => 'required',
            'jenis_usaha' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'saldo' => 'required',
            'id_seller' => 'required',
        ]);

        if($request->hasFile('logo_toko'))
        {
            $logo_toko = $request->file('logo_toko');
            $logo_toko_name = $request->link_toko.'-'.$logo_toko->hashName();
            $logo_toko->storeAs('public/logo_toko', $logo_toko_name);
        }

        if($request->hasFile('foto_toko1'))
        {
            $foto_toko = $request->file('foto_toko1');
            $foto_toko1_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko1_name);
        }

        if($request->hasFile('foto_toko2'))
        {
            $foto_toko = $request->file('foto_toko2');
            $foto_toko2_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko2_name);
        }

        if($request->hasFile('foto_toko3'))
        {
            $foto_toko = $request->file('foto_toko1');
            $foto_toko3_name = $request->link_toko.'-'.$foto_toko->hashName();
            $foto_toko->storeAs('public/foto_toko', $foto_toko3_name);
        }
        
        $toko = TokoModel::find($id);
        $toko->update([
            'nama_toko' => $request -> nama_toko,
            'alamat_toko' => $request -> alamat_toko,
            'link_toko' => $request -> link_toko,
            'no_telp_toko' => $request -> no_telp_toko,
            'kecamatan' => $request -> kecamatan,
            'kota' => $request -> kota,
            'provinsi' => $request -> provinsi,
            'kode_pos' => $request -> kode_pos,
            'jam_operasional' => $request -> jam_operasional,
            'jenis_usaha' => $request -> jenis_usaha,
            'logo_toko' => $logo_toko_name ?? $toko->logo_toko,
            'foto_toko1' => $foto_toko1_name ?? $toko->foto_toko,
            'foto_toko2' => $foto_toko2_name ?? $toko->foto_toko,
            'foto_toko3' => $foto_toko3_name ?? $toko->foto_toko,
            'deskripsi' => $request -> deskripsi,
            'status' => $request -> status,
            'saldo' => $request -> saldo,
            'id_seller' => $request -> id_seller,
        ]);

        $response = [
            'status' => true,
            'message' => 'Sukses Edit Data Toko',
            'data' => $toko
        ];

        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }

    public function destroy($id)
    {
        TokoModel::destroy($id);        
        $response = [
            'status' => true,
            'message' => 'Sukses Menghapus Data Toko',
        ];
        return response()->json($response, HttpFoundationResponse::HTTP_OK);
    }
    
}
