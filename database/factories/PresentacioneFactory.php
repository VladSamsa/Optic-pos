<?php

namespace Database\Factories;

use App\Models\Caracteristica;
use App\Models\Presentacione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PresentacioneFactory extends Factory
{
    protected $model = Presentacione::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'caracteristica_id' => Caracteristica::factory(),
        ];
    }
}
