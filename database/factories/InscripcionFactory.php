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
            'torneo_id' => Torneo::factory(),
            'tenista_id' => Tenista::factory(),
            'puntos' => $this->faker->numberBetween(0, 2000),
            'ganancias' => $this->faker->numberBetween(1000, 50000),
            'entradas_individual' => $this->faker->numberBetween(0, 1000),
            'entradas_dobles' => $this->faker->numberBetween(0, 500),
            'participantes' => $this->faker->numberBetween(1, 32),
        ];
    }
}
