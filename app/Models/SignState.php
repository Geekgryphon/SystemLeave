<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignState extends Model
{
    use HasFactory;

    protected $table = "sign-states";
    protected $fillable = ['id','name', 'signcode', 'used', 'seq'];
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $timestamps = false;

    public function leaveapprovalstage(){
        return $this->hasMany(LeaveApprovalStage::class);
    }
} 
