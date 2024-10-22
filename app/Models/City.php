<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['postalcode','name', 'used', 'seq'];

    protected $table = 'cities';
    protected $primaryKey = 'id'; // 默認是id 可透過定義來修正
    // protected $keyType = 'string'; // 主key的資料型態

    public function cityAreas(){
        return $this->hasMany(CityArea::class);
    }

    public function employee(){
        return $this->hasMany(Employee::class);
    }
}

