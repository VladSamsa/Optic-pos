<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Proveedore;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedore>
 */
class ProveedoreFactory extends Factory
{
    protected $model = Proveedore::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'persona_id' => null,
        ];
    }
}
