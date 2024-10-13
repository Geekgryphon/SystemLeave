<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;
    protected $table = 'job-historys';
    protected $primaryKey = 'id';
    protected $fillable = ['account','job_position_id', 'begin_date', 'end_date'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function jobposition(){
        return $this->belongsTo(JobPosition::class);
    }
}
