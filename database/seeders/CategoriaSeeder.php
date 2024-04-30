<?php

namespace Database\Seeders;

use App\Models\Caracteristica;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public $categorias = [
        'Belleza', 'Hogar', 'Tecnología', 'Deportes', 'Moda', 'Juguetes', 'Mascotas', 'Libros', 'Electrodomésticos', 'Jardinería',
        'Música', 'Cine', 'Fotografía', 'Arte', 'Literatura', 'Ciencia', 'Educación', 'Salud', 'Fitness', 'Viajes',
        'Gastronomía', 'Automóviles', 'Inmobiliaria', 'Finanzas', 'Negocios', 'Marketing', 'Diseño', 'Programación', 'Videojuegos', 'Medicina',
        'Bricolaje', 'Decoración', 'Muebles', 'Ropa', 'Zapatos', 'Accesorios', 'Joyería', 'Relojes', 'Perfumería', 'Cosméticos',
        'Bebidas', 'Alimentos', 'Cocina', 'Bebés', 'Niños', 'Adolescentes', 'Adultos', 'Ancianos', 'Hombres', 'Mujeres'
    ];

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
