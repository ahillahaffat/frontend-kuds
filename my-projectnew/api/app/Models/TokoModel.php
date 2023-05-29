<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TokoModel extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table= 'toko';
    protected $guard = 'toko';
    protected $fillable = [
        'nama_toko', 'alamat_toko', 'link_toko','no_telp_toko','kecamatan','kota','provinsi','kodepos','alamat','jam_operasional','jenis_usaha','logo_toko','foto_toko1','foto_toko2','foto_toko3','deskripsi','status','saldo','id_seller',
    ];
}
