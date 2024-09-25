<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApprovalStage extends Model
{
    use HasFactory;

    protected $table = 'LeaveApprovalStage';
    protected $fillable = ['LeaveFormNo', 'Title','Step', 'Status', 'Memo', 'SignTime'];

    public function leaveform(){
        return $this->belongsTo(LeaveForm::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }
}
