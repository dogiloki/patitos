<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduleDay>
 */
class ScheduleDayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $time_start=["06:00:00","07:00:00","08:00:00","14:00:00","15:00:00","16:00:00","21:00:00"];
        $time_end=["18:00:00","19:00:00","20:00:00","21:00:00","06:00:00"];
        return [
            'day'=>$this->faker->randomElement(['Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo']),
            'time_start'=>preg_replace_callback("/00/",function(){
                return rand(0,5).rand(0,9);
            },$this->faker->randomElement($time_start)),
            'time_end'=>preg_replace_callback("/00/",function(){
                return rand(0,5).rand(0,9);
            },$this->faker->randomElement($time_end))
        ];
    }
}
