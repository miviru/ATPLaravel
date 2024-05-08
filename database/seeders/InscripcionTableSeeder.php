<?php

namespace Database\Seeders;

use App\Models\Inscripcion;
use Illuminate\Database\Seeder;

class InscripcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Inscripcion::create([
//            'torneo_id_secundario' => 1,
            'tenista_id' => 1,
            'puntos' => 100,
            'ganancias' => 123000000,
        ]);

        Inscripcion::create([
//            'torneo_id_secundario' => 1,
            'tenista_id' => 2,
            'puntos' => 90,
            'ganancias' => 129000000,
        ]);
    }
}
