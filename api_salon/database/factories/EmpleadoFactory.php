<?php

namespace Database\Factories;

use App\Models\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    protected $model = Empleado::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'apellido' => $this->faker->lastName(),
            'salario'  => $this->faker->randomFloat(),
            'posicion_trabajo' => $this->faker->jobTitle()
        ];
    }
}
