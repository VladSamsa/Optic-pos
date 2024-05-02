<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public $categorias = ['Armazón', 'Mica', 'Lente', 'Estuche', 'Paño', 'Líquido', 'Cordón', 'Funda', 'Clip'];

    public function run(): void
    {
        $faker = \Faker\Factory::create();
        foreach ($this->categorias as $categoria) {
            $caracteristica = Caracteristica::factory()->create(
                ['nombre' => $categoria, 'estado' => 1]
            );
            Categoria::factory()->create([
                'caracteristica_id' => $caracteristica->id,
            ]);
        }
    }
}
