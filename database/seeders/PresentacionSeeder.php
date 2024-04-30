<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;
use App\Models\Presentacione;

class PresentacionSeeder extends Seeder
{

    public function run()
    {
        // Materiales de lentes
        $materiales = ['Acetato',
            'Metal',
            'Titanio',
            'Aluminio',
            'Plástico',
            'Nylon',
            'Policarbonato',
            'TR90',
            'Silicona',
            'Goma',
            'Madera',
            'Caucho',
            'Cristal',
            'Vidrio',
            'Papel',
            'Cartón',
            'Tela',
            'Cuero',
            'Fibra de carbono',
            'Fibra de vidrio',
            'Fibra de aramida',
            'Fibra de basalto',
            'Fibra de kevlar',
            'Fibra de polietileno',
            'Fibra de polipropileno',
            'Fibra de poliéster',
            'Fibra de poliamida',
            'Fibra de poliuretano',
            'Fibra de polivinilo',
            'Fibra de poliacrilonitrilo',
            'Fibra de poliaramida',
            'Fibra de poliéster',
            ];
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
