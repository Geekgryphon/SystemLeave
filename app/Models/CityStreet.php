<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityStreet extends Model
{
    use HasFactory;
    protected $table = 'citystreets';
    protected $primaryKey = 'id';
    protected $fillable = ['PostalCode', 'CityAreaID', 'Name', 'Used', 'Seq'];

    public function cityarea(){
        return $this->belongsTo(CityArea::class);
    }

    public function employee(){
        return $this->hasMany(Employee::class);
    }

    
}
