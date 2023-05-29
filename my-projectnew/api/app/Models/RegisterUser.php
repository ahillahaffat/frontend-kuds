<?php

namespace App\Models;

use App\Http\Controllers\User\RegistersController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterUser extends Model
{

    
    protected $fillabel = ['name', 'email', 'password', 'gender', 'no_telp', 'date_of_birth'];
  
}
