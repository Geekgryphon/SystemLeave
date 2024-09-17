<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityArea extends Model
{
    use HasFactory;
    protected $table = 'cityareas';
    protected $fillable = ['PostalCode', 'CityID', 'Name', 'Used', 'Seq'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}
