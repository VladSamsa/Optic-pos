<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;
use App\Models\Presentacione;

class PresentacionSeeder extends Seeder
{

    public function run()
    {
        $materiales =[ 'Plastico', 'Carton', 'Vidrio', 'Metal', 'Madera', 'Tela', 'Papel', 'Ceramica', 'Piedra', 'Otros'];
        $faker = \Faker\Factory::create();
        foreach ($materiales as $material) {
            $caracteristica = Caracteristica::factory()->create(
                ['nombre' => $material, 'estado' => 1]
            );
            Presentacione::factory()->create([
                'caracteristica_id' => $caracteristica->id,
            ]);
        }
    }
}
