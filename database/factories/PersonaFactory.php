<?php

namespace Database\Factories;

use App\Models\Documento;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PersonaFactory extends Factory
{
    protected $model = Persona::class;

    public function definition(): array
    {
        return [
            'razon_social' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'numero_documento' => $this->faker->randomNumber(8, true),
            'tipo_persona' => $this->faker->randomElement(['Natural', 'Juridica']),
            'estado' => $this->faker->biasedNumberBetween(0,1),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'documento_id' => $this->faker->randomElement(Documento::pluck('id')),
        ];
    }
}
