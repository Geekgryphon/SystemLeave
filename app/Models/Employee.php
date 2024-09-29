<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'Employees';
    protected $primaryKey = 'Account';
    protected $fillable = ['Account','Name', 'Password', 'email', 'Birthday', 'CityID', 'CityAreaID', 'CityStreetID', 'Address', 'StateDate', 'EndDate'];

    public function city(){
        return $this->hasOne(City::class);
    }

    public function cityarea(){
        return $this->hasOne(CityArea::class);
    }

    public function citystreet(){
        return $this->hasOne(CityStreet::class);
    }

    public function leaveform(){
        return $this->hasMany(LeaveForm::class);
    }

    public function jobhistory(){
        return $this->hasMany(JobHistory::class);
    }

    public function leaveapprovalstage(){
        return $this->hasMany(LeaveApprovalStage::class);
    }
}
