<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveForm extends Model
{
    use HasFactory;

    protected $fillable = ['LeaveFormNo','LeaveKindID', 'LeaveFormReason', 'Applicant', 'Proxy', 'BeginTime', 'EndTime', 'AttatchmentName1', 'AttatchmentName2'];

    protected $table = 'LeaveForm';
    protected $primaryKey = 'LeaveFormNo'; // 默認是id 可透過定義來修正
    protected $keyType = 'string'; // 主key的資料型態

    public function leavekind(){
        return $this->belongsTo(LeaveKind::class);
    }

    public function applicant(){
        return $this->belongsTo(Employee::class);
    }

    public function proxy(){
        return $this->belongsTo(Employee::class);
    }
}
