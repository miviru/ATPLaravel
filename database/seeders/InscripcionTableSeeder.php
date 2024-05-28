<?php

namespace Database\Seeders;

use App\Models\Inscripcion;
use App\Models\Tenista;
use App\Models\Torneo;
use Illuminate\Database\Seeder;

class InscripcionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $torneos = Torneo::all();
        $tenistas = Tenista::all();

        foreach ($torneos as $torneo) {
            foreach ($tenistas as $tenista) {
                Inscripcion::create([
                    'torneo_id' => $torneo->id,
                    'tenista_id' => $tenista->id,
                    'puntos' => 100,
                    'ganancias' => 123000000,
                ]);
            }
        }
    }
}
