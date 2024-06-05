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
            'id_secundario' => $this->faker->uuid,
            'nombre' => $this->faker->word,
            'ubicacion' => $this->faker->city,
            'modo' => $this->faker->randomElement(['INDIVIDUAL', 'DOBLES']),
            'categoria' => $this->faker->word,
            'superficie' => $this->faker->randomElement(['CLAY', 'HARD', 'GRASS']),
            'entradas_individual' => $this->faker->numberBetween(0, 1000),
            'entradas_dobles' => $this->faker->numberBetween(0, 500),
            'premio' => $this->faker->numberBetween(1000, 50000),
            'puntos' => $this->faker->numberBetween(0, 2000),
            'fecha_inicio' => $this->faker->date,
            'fecha_fin' => $this->faker->date,
            'imagen' => Torneo::$IMAGE_DEFAULT,
        ];
    }
}
