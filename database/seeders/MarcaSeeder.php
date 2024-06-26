<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    public function run()
    {
        // Marcas de lentes
        $marcas = ['Ray-Ban',
            'Oakley',
            'Prada',
            'Gucci',
            'Versace',
            'Dior',
            'Armani',
            'Burberry',
            'Fendi',
            'Tom Ford',
            'Persol',
            'Polo Ralph Lauren',
            'Michael Kors',
            'Tiffany & Co.',
            'Bvlgari',
            'Dolce & Gabbana',
            'Chanel',
            'Coach',
            'Calvin Klein',
            'Hugo Boss',
            'Lacoste',
            'Guess',
            'Nike',
            'Adidas',
            'Puma',
            'Reebok',
            'Converse',
            'Vans',
            'New Balance',
            'Under Armour',
            'Skechers',
            'Asics',
            'Fila',
            'Crocs',
            'Timberland',
            'Dr. Martens',
            'Caterpillar',
            'Merrell',
            'Sorel',
            'Salomon',
            'The North Face',
            'Columbia',
            'Patagonia',
            'Marmot',
            'Arc’teryx',
            'Mountain Hardwear',
            'Black Diamond',
            'Petzl',
            'La Sportiva',
            'Scarpa',
            'Five Ten',
            'Evolv',
            'Mad Rock',
            'Metolius',
            'Trango',
            'Edelrid',
            'Beal',
            'Mammut',
            'Grivel',
            'Camp',
            'Black Diamond',
            'Petzl',
            'La Sportiva',
            'Scarpa',
            'Five Ten',
            'Evolv',
            'Mad Rock',
            'Metolius',
            'Trango',
            'Edelrid',
            'Beal',
            'Mammut',
            'Grivel',
            'Camp',
            'Black Diamond',
            'Petzl',
            'La Sportiva',
            'Scarpa',
            'Five Ten',
            'Evolv',
            'Mad Rock',
            'Metolius',
            'Trango',
            'Edelrid',
            'Beal',
            'Mammut',
            'Grivel',
            'Camp',
            'Black Diamond',
            'Petzl',
            'La Sportiva',
            'Scarpa',
            'Five Ten',
            'Evolv',
            'Mad Rock',
            'Metolius',
            'Trango',
            'Edelrid',
            'Beal',
            'Mammut',
            'Grivel',
            'Camp',
            'Black Diamond',
            'Petzl',
            'La Sportiva',
            'Scarpa',
            'Five Ten',
            'Evolv',
            'Mad Rock',
            'Metolius',
            'Trango',
            'Edelrid',
            'Beal'];

        foreach ($marcas as $marca) {
            $caracteristica = Caracteristica::factory()->create(
                ['nombre' => $marca, 'estado' => 1]
            );
            Marca::factory()->create([
                'caracteristica_id' => $caracteristica->id,
            ]);
        }
    }
}
