<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkSchedule>
 */
class WorkScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date_min="2023-01-01 06:00:00";
        $date_max="2023-12-31 21:00:00";
        $date_start=$this->faker->dateTimeBetween($date_min,$date_max);
        return [
            'id_employee'=>$this->faker->numberBetween(1,40),
            'date_start'=>$date_start,
            'date_end'=>date('Y-m-d H:i:s',(strtotime('+12 hours',$date_start->getTimestamp())))
        ];
    }
}
