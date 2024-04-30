<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use App\Models\Persona;
class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        $personas = Persona::factory()->count(10)->create(); // replace 10 with the number of records you want to create

        foreach ($personas as $persona) {
            Cliente::factory()->create(['persona_id' => $persona->id]);
        }
    }
}
