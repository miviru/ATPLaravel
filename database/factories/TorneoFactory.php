<?php

namespace Database\Factories;

use App\Models\Torneo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TorneoFactory extends Factory
{
    protected $model = Torneo::class;

    public function definition()
    {
        return [
            'id_secundario' => $this->faker->numberBetween(1, 10000),
            'nombre' => $this->faker->word,
            'ubicacion' => $this->faker->city,
            'modo' => $this->faker->randomElement(['INDIVIDUAL', 'DOBLES', 'AMBOS']),
            'categoria' => $this->faker->randomElement(['ATP_250', 'ATP_500', 'MASTERS_1000']),
            'superficie' => $this->faker->randomElement(['ARCILLA', 'DURA', 'HIERBA']),
            'entradas_individual' => $this->faker->numberBetween(0, 96),
            'entradas_dobles' => $this->faker->numberBetween(0, 64),
            'premio' => $this->faker->numberBetween(1000, 50000),
            'puntos' => $this->faker->numberBetween(0, 1000),
            'fecha_inicio' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'imagen' => 'https://www.palco23.com/files/2020/19_redaccion/competiciones/tenis/atp/atp-tour-federacion-espa%C3%B1ola-728.jpg',
            'logo' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0Gkm2pZ8Pi4_t5PLb3Nimau_lwvz19_0NDw&s',
        ];
    }
}
