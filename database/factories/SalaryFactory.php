<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'amount' => $this->faker->numberBetween(1000, 10000),
            'currency' => (['MXN','USD'])[rand(0,1)],
            'period' => (['semanal','quincenal','mensual'])[rand(0,2)],
        ];
    }
}
