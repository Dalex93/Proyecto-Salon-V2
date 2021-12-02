<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;  
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(25),
            'description' => $this->faker->text(50),
            'price'=> 350.00,
            'mark'  => $this->faker->text(25),
            'category_id' => Category::inRandomOrder()->first()->id ,
            'supplier_id' => Supplier::inRandomOrder()->first()->id 
        ];
    }
}
