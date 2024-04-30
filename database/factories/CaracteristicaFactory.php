<?php

namespace Database\Factories;

use App\Models\Caracteristica;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CaracteristicaFactory extends Factory
{
    protected $model = Caracteristica::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'estado' => $this->faker->numberBetween(0,1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
