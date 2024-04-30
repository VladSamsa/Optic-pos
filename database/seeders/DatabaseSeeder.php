<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(DocumentoSeeder::class);
        $this->call(ComprobanteSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProveedorSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(PresentacionSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(MarcaSeeder::class);
    }
}
