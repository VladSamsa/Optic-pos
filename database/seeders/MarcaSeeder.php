<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use App\Models\Marca;
use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    public function run()
    {
        $marcas = [
            // Alimentos
            'Nestlé', 'Coca Cola', 'Pepsi', 'Bimbo', 'Lala', 'Barcel', 'Gamesa', 'Sabritas', 'Jumex', 'Herdez', 'La Costeña', 'Knorr', 'Alpura', 'Zwan', 'La Moderna', 'La Villita', 'La Huerta', 'La Morena', 'La Sierra', 'La Cima', 'La Finca', 'La Fina', 'La Campiña', 'La Cabaña',
            // Tecnología
            'Apple', 'Samsung', 'Microsoft', 'Sony', 'LG', 'Huawei', 'Dell', 'HP', 'Lenovo', 'Asus', 'Acer', 'Canon', 'Nikon', 'GoPro', 'Bose', 'JBL', 'Logitech', 'Seagate', 'Western Digital', 'Kingston',
            // Automóviles
            'Toyota', 'Volkswagen', 'Ford', 'Hyundai', 'Chevrolet', 'Nissan', 'Honda', 'Audi', 'Mercedes-Benz', 'BMW', 'Lexus', 'Porsche', 'Ferrari', 'Lamborghini', 'Maserati', 'Aston Martin', 'Bentley', 'Rolls-Royce', 'Jeep', 'Subaru',
            // Moda
            'Nike', 'Adidas', 'Puma', 'Under Armour', 'Reebok', 'New Balance', 'Converse', 'Vans', 'Levi\'s', 'Calvin Klein', 'Tommy Hilfiger', 'Ralph Lauren', 'Gucci', 'Prada', 'Versace', 'Armani', 'Louis Vuitton', 'Chanel', 'Dior', 'Burberry'
        ];

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
