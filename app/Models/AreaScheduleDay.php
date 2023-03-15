<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreaScheduleDay extends Model{
    use HasFactory;

    protected $table="area_schedule_day";

    public function employees(){
        return $this->belongsToMany(Employee::class);
    }

    public function scheduleDays(){
        return $this->belongsToMany(ScheduleDay::class);
    }

    public function areas(){
        return $this->belongsToMany(Area::class);
    }

}
