<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveKind extends Model
{
    use HasFactory;
    protected $table = "LeaveKind";
    protected $primaryKey = 'id'; 
    protected $fillable = ["id","Name","Seq","Used"];

    public function leaveform(){
        return $this->hasmany(LeaveKind::class);
    }
}
