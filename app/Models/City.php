<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['PostalCode','Name', 'Used', 'Seq'];

    protected $table = 'cities';
    // protected $primaryKey = ''; 默認是id 可透過定義來修正
    // protected $keyType = 'string'; // 主key的資料型態

    public function cityAreas(){
        return $this->hasMany(CityArea::class);
    }
}

