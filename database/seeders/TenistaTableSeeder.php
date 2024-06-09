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
            'ranking'=> 1,
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
            'ranking'=> 2,
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
            'ranking'=> 3,
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

        Tenista::create([
            'ranking'=> 4,
            'puntos'=> 70,
            'nombre' => 'Jannick Sinner',
            'pais' => 'Italia',
            'fecha_nacimiento' => '2001-08-16',
            'altura' => 188,
            'peso' => 75,
            'profesional_desde' => 2018,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Riccardo Piatti',
            'ganancias' => 5000000,
            'mejor_ranking' => 2,
            'victorias' => 218,
            'derrotas' => 76,
            'edad' => 20,
            'win_rate' => 71,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/s0ag',
        ]);

        Tenista::create([
            'ranking'=> 5,
            'puntos'=> 60,
            'nombre' => 'Carlos Alcaraz',
            'pais' => 'España',
            'fecha_nacimiento' => '2003-05-05',
            'altura' => 183,
            'peso' => 75,
            'profesional_desde' => 2018,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Juan Carlos Ferrero',
            'ganancias' => 1000000,
            'mejor_ranking' => 1,
            'victorias' => 173,
            'derrotas' => 48,
            'edad' => 18,
            'win_rate' => 71,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/a0e2',
        ]);

        Tenista::create([
            'ranking'=> 6,
            'puntos'=> 50,
            'nombre' => 'Alexander Zverev',
            'pais' => 'Alemania',
            'fecha_nacimiento' => '1997-04-20',
            'altura' => 198,
            'peso' => 90,
            'profesional_desde' => 2013,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Alexander Zverev Sr.',
            'ganancias' => 25000000,
            'mejor_ranking' => 2,
            'victorias' => 422,
            'derrotas' => 186,
            'edad' => 24,
            'win_rate' => 69,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/z355',
        ]);

        Tenista::create([
            'ranking'=> 7,
            'puntos'=> 40,
            'nombre' => 'Daniil Medvedev',
            'pais' => 'Rusia',
            'fecha_nacimiento' => '1996-02-11',
            'altura' => 198,
            'peso' => 83,
            'profesional_desde' => 2014,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Gilles Cervara',
            'ganancias' => 20000000,
            'mejor_ranking' => 1,
            'victorias' => 357,
            'derrotas' => 143,
            'edad' => 25,
            'win_rate' => 68,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/mm58',
        ]);

        Tenista::create([
            'ranking'=> 8,
            'puntos'=> 30,
            'nombre' => 'Andrey Rublev',
            'pais' => 'Rusia',
            'fecha_nacimiento' => '1997-10-20',
            'altura' => 188,
            'peso' => 70,
            'profesional_desde' => 2014,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Fernando Vicente',
            'ganancias' => 10000000,
            'mejor_ranking' => 5,
            'victorias' => 314,
            'derrotas' => 167,
            'edad' => 24,
            'win_rate' => 67,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/re44',
        ]);

        Tenista::create([
            'ranking'=> 9,
            'puntos'=> 20,
            'nombre' => 'Casper Ruud',
            'pais' => 'Noruega',
            'fecha_nacimiento' => '1998-12-22',
            'altura' => 183,
            'peso' => 75,
            'profesional_desde' => 2015,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Christian Ruud',
            'ganancias' => 5000000,
            'mejor_ranking' => 2,
            'victorias' => 242,
            'derrotas' => 124,
            'edad' => 23,
            'win_rate' => 63,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/rh16',
        ]);

        Tenista::create([
            'ranking'=> 10,
            'puntos'=> 10,
            'nombre' => 'Hubert Hurkacz',
            'pais' => 'Polonia',
            'fecha_nacimiento' => '1997-02-11',
            'altura' => 196,
            'peso' => 80,
            'profesional_desde' => 2015,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Craig Boynton',
            'ganancias' => 5000000,
            'mejor_ranking' => 8,
            'victorias' => 196,
            'derrotas' => 134,
            'edad' => 24,
            'win_rate' => 59,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/hb71',
        ]);

        Tenista::create([
            'ranking'=> 11,
            'puntos'=> 5,
            'nombre' => 'Stefanos Tsitsipas',
            'pais' => 'Grecia',
            'fecha_nacimiento' => '1998-08-12',
            'altura' => 193,
            'peso' => 80,
            'profesional_desde' => 2016,
            'mano' => 'DIESTRO',
            'reves' => 'UNA_MANO',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Apostolos Tsitsipas',
            'ganancias' => 10000000,
            'mejor_ranking' => 3,
            'victorias' => 324,
            'derrotas' => 152,
            'edad' => 23,
            'win_rate' => 65,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/te51',
        ]);

        Tenista::create([
            'ranking'=> 12,
            'puntos'=> 5,
            'nombre' => 'Grigor Dimitrov',
            'pais' => 'Bulgaria',
            'fecha_nacimiento' => '1991-05-16',
            'altura' => 190,
            'peso' => 80,
            'profesional_desde' => 2008,
            'mano' => 'DIESTRO',
            'reves' => 'UNA_MANO',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Daniel Vallverdu',
            'ganancias' => 20000000,
            'mejor_ranking' => 3,
            'victorias' => 437,
            'derrotas' => 281,
            'edad' => 30,
            'win_rate' => 63,
            'imagen' => 'https://www.atptour.com/-/media/alias/player-gladiator-headshot/d875',
        ]);
    }
}