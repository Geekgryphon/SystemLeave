<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovalStatus extends Model
{
    use HasFactory;

    protected $table = 'ApprovalCode';
    protected $primaryKey = 'id';
    protected $fillable = ['Name','ApprovalCode', 'Used', 'Seq'];

    public function leaveForms(){
        return $this->hasMany(LeaveForm::class);
    }
}
