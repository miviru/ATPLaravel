<?php

namespace Database\Seeders;

use App\Models\Tenista;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tenista::create([
            'puntos'=> 100,
            'nombre' => 'Rafael Nadal',
            'pais' => 'España',
            'fecha_nacimiento' => '1986-06-03',
            'altura' => 185,
            'peso' => 85,
            'profesional_desde' => 2001,
            'mano' => 'ZURDO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Carlos Moya',
            'ganancias' => 123000000,
            'mejor_ranking' => 1,
            'victorias' => 1000,
            'derrotas' => 200,
            'edad' => 35,
            'win_rate' => 83,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/n409',
        ]);

        Tenista::create([
            'puntos'=> 90,
            'nombre' => 'Roger Federer',
            'pais' => 'Suiza',
            'fecha_nacimiento' => '1981-08-08',
            'altura' => 185,
            'peso' => 85,
            'profesional_desde' => 1998,
            'mano' => 'DIESTRO',
            'reves' => 'UNA_MANO',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Ivan Ljubicic',
            'ganancias' => 129000000,
            'mejor_ranking' => 1,
            'victorias' => 1200,
            'derrotas' => 300,
            'edad' => 40,
            'win_rate' => 80,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/f324',
        ]);

        Tenista::create([
            'puntos'=> 80,
            'nombre' => 'Novak Djokovic',
            'pais' => 'Serbia',
            'fecha_nacimiento' => '1987-05-22',
            'altura' => 188,
            'peso' => 80,
            'profesional_desde' => 2003,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Marian Vajda',
            'ganancias' => 147000000,
            'mejor_ranking' => 1,
            'victorias' => 900,
            'derrotas' => 200,
            'edad' => 34,
            'win_rate' => 82,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/d643',
        ]);
    }
}
