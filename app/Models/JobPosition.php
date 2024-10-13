<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosition extends Model
{
    use HasFactory;

    protected $table = 'job-positions';
    protected $primaryKey = 'id';
    protected $fillable = ['title','eng_title', 'used', 'seq'];
    public $timestamps = false;
    

    public function jobhistory(){
        return $this->hasMany(JobHistory::class);
    }

}
