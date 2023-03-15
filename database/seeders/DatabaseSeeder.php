<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        try{
            \App\Models\Salary::factory()->count(40)->create();
            \App\Models\Role::factory()->count(40)->create();
            \App\Models\Employee::factory()->count(40)->create();
            \App\Models\HolidaySchedule::factory()->count(40)->create();
            \App\Models\WorkSchedule::factory()->count(40)->create();
            \App\Models\ScheduleDay::factory()->count(40)->create();
            \App\Models\Area::factory()->count(10)->create();
            \App\Models\AreaScheduleDay::factory()->count(40)->create();
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}
