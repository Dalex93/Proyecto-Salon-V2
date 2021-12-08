<?php

namespace Database\Factories;

use App\Models\Servicio;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    protected $model = Cita::class;

    public function definition()
    {
        $hour = Carbon::parse( $this->faker->dateTimeThisYear())->format('h:i A');

        return [
            'fecha'       => $this->faker->date(),
            'hora'        => $hour,
            'cliente'     => $this->faker->name(),
            'email'       => $this->faker->email(),
            'dni'         => $this->faker->text(13),
            'servicio_id' => Servicio::inRandomOrder()->first()->id
        ];
    }
}
