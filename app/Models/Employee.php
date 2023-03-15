<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {
    use HasFactory;

    protected $table="employee";

    protected $fillable=[
        'name',
        'surname',
        'ns',
        'id_role',
        "id_salary"
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function salary(){
        return $this->belongsTo(Salary::class);
    }

    public function areaScheduleDays(){
        return $this->belongsToMany(AreaScheduleDay::class);
    }

    public function holidaySchedules(){
        return $this->belongsToMany(HolidaySchedule::class);
    }

}
