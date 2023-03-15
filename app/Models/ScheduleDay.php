<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleDay extends Model{
    use HasFactory;

    protected $table="schedule_day";

    public function areaScheduleDays(){
        return $this->hasMany(AreaScheduleDay::class);
    }

}
