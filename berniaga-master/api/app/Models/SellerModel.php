<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class SellerModel extends Model
{
    use HasFactory, HasApiTokens, Notifiable;

    protected $table= 'seller';
    protected $guard = 'seller';
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'no_telp', 'date_of_birth'
    ];

    protected $hidden = [
        'password',
    ];
}
