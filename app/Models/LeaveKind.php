<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveKind extends Model
{
    use HasFactory;
    protected $table = "leave-kinds";
    protected $primaryKey = 'id'; 
    protected $fillable = ["id","name","seq","used"];
    public $timestamps = true;

    public function leaveForms(){
        return $this->hasmany(LeaveForm::class, 'leave_kind_id');
    }
}
