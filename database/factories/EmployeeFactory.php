<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->firstName,
            'surname'=>$this->faker->lastName,
            'ns'=>$this->faker->unique()->numberBetween(1111111111,9999999999),
            'id_role'=>$this->faker->numberBetween(1,40),
            'id_salary'=>$this->faker->numberBetween(1,40),
        ];
    }
}
