<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DistrictsModel extends Model
{
    use HasFactory;
    protected $table = 'districts';

    public function city()
    {
        return $this->belongsTo(CityModel::class);
    }
    public function subdistrict()
    {
        return $this->hasMany(SubdistrictModel::class);
    }
}
