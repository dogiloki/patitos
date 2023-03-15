<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Area>
 */
class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->randomElement(['Administración','Ventas','Producción','Compras','Almacén','Mantenimiento','Seguridad','Calidad','Recursos Humanos','Finanzas','Contabilidad','Informática','Comunicaciones','Logística','Servicios Generales']),
            'description'=>$this->faker->text(50)
        ];
    }
}
