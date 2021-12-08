<?php

namespace Database\Factories;

use App\Models\Bodega;
use App\Models\Inventario;
use Illuminate\Database\Eloquent\Factories\Factory;

class BodegaFactory extends Factory
{
    protected $model = Bodega::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->text(25),
            'inventory_id' => Inventario::inRandomOrder()->first()->id
        ];
    }
}
