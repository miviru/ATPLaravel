<?php

namespace Database\Factories;

use App\Models\Inscripcion;
use App\Models\Torneo;
use App\Models\Tenista;
use Illuminate\Database\Eloquent\Factories\Factory;

class InscripcionFactory extends Factory
{
    protected $model = Inscripcion::class;

    public function definition()
    {
        return [
            'torneo_id' => function () {
                return Torneo::factory()->create()->id;
            },
            'tenista_id' => function () {
                return Tenista::factory()->create()->id;
            },
            'puntos' => $this->faker->numberBetween(0, 2000),
            'ganancias' => $this->faker->numberBetween(1000, 50000),
            'entradas_individual' => $this->faker->numberBetween(1, 96),
            'entradas_dobles' => $this->faker->numberBetween(1, 64),
        ];
    }
}
