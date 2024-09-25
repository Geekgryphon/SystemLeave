<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $table = 'JobPosition';
    protected $primaryKey = 'id';
    protected $fillable = ['Title','EngTitle', 'Used', 'Seq'];

    public function jobposition(){
        return $this->hasMany(JobHistory::class);
    }

}
