<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Categoria::factory(10)->create();
        \App\Models\Supplier::factory(25)->create();
        \App\Models\Empleado::factory(25)->create();
        \App\Models\Producto::factory(25)->create();
        \App\Models\Servicio::factory(25)->create();
    }
}
