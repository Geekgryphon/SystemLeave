<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignState extends Model
{
    use HasFactory;

    protected $fillable = ['id','name', 'signCode', 'used', 'seq'];
    protected $primaryKey = 'id';
    protected $keyType = 'int';

    public function leaveapprovalstage(){
        return $this->hasMany(LeaveApprovalStage::class);
    }
} 
