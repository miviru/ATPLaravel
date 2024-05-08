<?php

namespace Database\Seeders;

use App\Models\Torneo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TorneoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Torneo::create([
            'nombre' => 'Master 100 Madrid',
            'ubicacion' => 'Madrid, España',
            'modo' => 'AMBOS',
            'categoria' => 'MASTERS_1000',
            'superficie' => 'ARCILLA',
            'entradas_individual' => 128,
            'entradas_dobles' => 64,
            'premio' => 34000000,
            'puntos' => 1000,
            'fecha_inicio' => '2021-06-28',
            'fecha_fin' => '2021-07-11',
            'imagen' => 'madrid.jpg',
        ]);

        Torneo::create([
            'nombre' => 'Master 1000 Roma',
            'ubicacion' => 'Roma, Italia',
            'modo' => 'AMBOS',
            'categoria' => 'MASTERS_1000',
            'superficie' => 'ARCILLA',
            'entradas_individual' => 128,
            'entradas_dobles' => 64,
            'premio' => 34000000,
            'puntos' => 1000,
            'fecha_inicio' => '2021-05-09',
            'fecha_fin' => '2021-05-16',
            'imagen' => 'roma.jpg',
        ]);
    }
}
