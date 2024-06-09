<?php

namespace Database\Seeders;

use App\Models\Torneo;
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
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/madrid_tournimage_2019_night.jpg',
            'logo' => 'https://mutuamadridopen.com/wp-content/uploads/2022/12/logo23-09.png'
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
            'imagen' => 'https://www.atptour.com/-/media/images/news/2022/06/10/14/28/rome-tournament-profile.jpg',
            'logo' => 'https://upload.wikimedia.org/wikipedia/fr/thumb/c/c2/Logo_Masters_Rome.svg/941px-Logo_Masters_Rome.svg.png'
            ]);

        Torneo::create([
            'nombre' => 'Brisbane International',
            'ubicacion' => 'Brisbane, Australia',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2023-12-31',
            'fecha_fin' => '20224-01-07',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/brisbane_tournimage_16_1920x1015.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiUjPEDtj6X1s-D_Rw67VJw2jufj1SN3sfVg&s'
            ]);

        Torneo::create([
            'nombre' => 'Bank of China Hong Kong Tennis Open',
            'ubicacion' => 'Hong Kong, China',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-07',
            'imagen' => 'https://www.atptour.com/-/media/images/news/2023/09/15/05/28/hong-kong-2024-tournament-image.jpg',
            'logo' => 'https://www.hkmenstennisopen.com/assets/images/logos/boc_hkto_logo.svg'
            ]);

        Torneo::create([
            'nombre' => 'Adelaide International',
            'ubicacion' => 'Adelaide, Australia',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-01-08',
            'fecha_fin' => '2024-01-13',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/adelaide_2_tournimage_2022.jpg',
            'logo' => 'https://upload.wikimedia.org/wikipedia/en/9/9f/Adelaide_International.png'
            ]);

        Torneo::create([
            'nombre' => 'ASB Classic',
            'ubicacion' => 'Auckland, Nueva Zelanda',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-01-08',
            'fecha_fin' => '2024-01-13',
            'imagen' => 'https://www.atptour.com/-/media/images/news/2023/01/15/10/04/auckland-tournament-page.jpg',
            'logo' => 'https://play-lh.googleusercontent.com/gSIr4mUtctiP5AhH8b-8VG6guD1JMa0JkKmVEyy2LchMAV1r1o3usXn3Xwjq9Jv7NVZV'
            ]);

        Torneo::create([
            'nombre' => 'Open Sud de France',
            'ubicacion' => 'Montpellier, Francia',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-01-29',
            'fecha_fin' => '2024-02-04',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/montpellier_tournimage_2019_v2.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRvYwE3og5JW8bE9h9yihwxiysTL6NOq6zwPQ&s'
            ]);

        Torneo::create([
            'nombre' => 'Dallas Open',
            'ubicacion' => 'Dallas, Estados Unidos',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-05',
            'fecha_fin' => '2024-02-11',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/dallas_tournimage_2021.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRFa7-5JOYkjUlWEcSqYJ6NjD7eYKIjfVtJlQ&s'
            ]);

        Torneo::create([
            'nombre' => 'Open 13 Provence',
            'ubicacion' => 'Marsella, Francia',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-05',
            'fecha_fin' => '2024-02-11',
            'imagen' => 'https://www.atptour.com/-/media/images/news/2023/01/17/12/06/marseille-tournament-page-image-2022.jpg',
            'logo' => 'https://pbs.twimg.com/profile_images/1216713845303074818/pNI_TXk4_400x400.jpg'
        ]);

        Torneo::create([
            'nombre' => 'Cordoba Open',
            'ubicacion' => 'Cordoba, Argentina',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'ARCILLA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-05',
            'fecha_fin' => '2024-02-11',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/cordoba_tournimage_2022.jpg',
            'logo' => 'https://pbs.twimg.com/profile_images/1732157446410424320/BiNigPsl_400x400.jpg'
            ]);

        Torneo::create([
            'nombre' => 'ABM AMRO Open',
            'ubicacion' => 'Rotterdam, Holanda',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_500',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 1000000,
            'puntos' => 500,
            'fecha_inicio' => '2024-02-12',
            'fecha_fin' => '2024-02-18',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/rotterdam_tournimage_2022.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUoQ3TRzwUzgfgEy57aitnAvBJd2p5N4l-ng&s'
            ]);

        Torneo::create([
            'nombre' => 'Delray Beach Open',
            'ubicacion' => 'Delray Beach, Estados Unidos',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-12',
            'fecha_fin' => '2024-02-18',
            'imagen' => 'https://www.atptour.com/-/media/images/news/2023/01/17/12/20/delray-beach-tournament-profile-2022.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuGt14BPU92x4HFdzWGPj-Urwv4A1CtV7igQ&s'
            ]);

        Torneo::create([
            'nombre' => 'IEB+ Argentina Open',
            'ubicacion' => 'Buenos Aires, Argentina',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'ARCILLA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-12',
            'fecha_fin' => '2024-02-18',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/buenosaires_tournimage_2019.jpg',
            'logo' => 'https://pbs.twimg.com/profile_images/1605051177766354947/5sFsTFyj_400x400.jpg'
            ]);

        Torneo::create([
            'nombre' => 'Rio Open Presented by Claro',
            'ubicacion' => 'Rio de Janeiro, Brasil',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_500',
            'superficie' => 'ARCILLA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 1000000,
            'puntos' => 500,
            'fecha_inicio' => '2024-02-19',
            'fecha_fin' => '2024-02-25',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/rio_tournimage_2019.jpg',
            'logo' => 'https://www.coretennis.net/ct/1/image/Tournament_Logos/ATP/2020/Rio_Open_presented_by_Claro.jpg'
            ]);

        Torneo::create([
            'nombre' => 'Qatar ExxonMobil Open',
            'ubicacion' => 'Doha, Qatar',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'ATP_250',
            'superficie' => 'DURA',
            'entradas_individual' => 32,
            'entradas_dobles' => 16,
            'premio' => 500000,
            'puntos' => 250,
            'fecha_inicio' => '2024-02-19',
            'fecha_fin' => '2024-02-24',
            'imagen' => 'https://www.atptour.com/-/media/images/atp-tournaments/tournament-images/doha_tournimage19.jpg',
            'logo' => 'https://www.coretennis.net/ct/1/image/Tournament_Logos/ATP/2019/Qatar_ExxonMobil_Open.png'
            ]);

    }
}
