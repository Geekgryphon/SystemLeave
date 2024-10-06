<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalStatus extends Model
{
    use HasFactory;

    protected $table = 'approval-status';
    protected $primaryKey = 'id';
    protected $fillable = ['name','approval_code', 'used', 'seq'];
    public $timestamps = false;

    public function leaveForms(){
        return $this->hasMany(LeaveForm::class);
    }
}
