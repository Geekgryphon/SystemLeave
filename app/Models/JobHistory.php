<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistory extends Model
{
    use HasFactory;
    protected $table = 'JobHistory';
    protected $primaryKey = 'id';
    protected $fillable = ['Account','JobPositionID', 'BeginDate', 'EndDate'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
