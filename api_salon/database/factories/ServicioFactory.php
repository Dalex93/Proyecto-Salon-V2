<?php

namespace Database\Factories;

use App\Models\Empleado;
use App\Models\Producto;
use App\Models\Servicio;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServicioFactory extends Factory
{
    protected $model = Servicio::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'precio' => $this->faker->randomFloat(),
            'duracion' => $this->faker->dateTime(),
            'product_id' => Producto::inRandomOrder()->first()->id,
            'empleado_id' => Empleado::inRandomOrder()->first()->id
        ];
    }
}
