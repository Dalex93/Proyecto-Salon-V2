<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductoFactory extends Factory
{
    protected $model = Producto::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->text(20),
            'descripcion' => $this->faker->paragraph(2),
            'precio' => $this->faker->randomFloat(),
            'marca' => $this->faker->text(20),
            'category_id' => Categoria::inRandomOrder()->first()->id,
            'supplier_id' => Supplier::inRandomOrder()->first()->id 
        ];
    }
}
