<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    protected $model = Supplier::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address()
        ];
    }
}
