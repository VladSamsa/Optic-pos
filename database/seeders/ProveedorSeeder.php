<?php

namespace Database\Seeders;

use App\Models\Proveedore;
use App\Models\Persona;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personas = Persona::factory()->count(10)->create(); // replace 10 with the number of records you want to create

        foreach ($personas as $persona) {
            Proveedore::factory()->create(['persona_id' => $persona->id]);
        }
    }
}
