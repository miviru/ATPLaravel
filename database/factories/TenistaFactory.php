<?php

namespace Database\Factories;

use App\Models\Tenista;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenistaFactory extends Factory
{
    protected $model = Tenista::class;

    public function definition()
    {
        return [
            'puntos' => $this->faker->numberBetween(0, 2000),
            'nombre' => $this->faker->name,
            'pais' => $this->faker->country,
            'fecha_nacimiento' => $this->faker->date,
            'altura' => $this->faker->numberBetween(150, 200),
            'peso' => $this->faker->numberBetween(50, 100),
            'profesional_desde' => $this->faker->year,
            'mano' => $this->faker->randomElement(['DIESTRO', 'ZURDO']),
            'reves' => $this->faker->randomElement(['UNA_MANO', 'DOS_MANOS']),
            'modo' => $this->faker->randomElement(['INDIVIDUAL', 'DOBLES', 'AMBOS']),
            'entrenador' => $this->faker->name,
            'ganancias' => $this->faker->numberBetween(0, 1000000),
            'mejor_ranking' => $this->faker->numberBetween(1, 100),
            'victorias' => $this->faker->numberBetween(0, 100),
            'derrotas' => $this->faker->numberBetween(0, 100),
            'imagen' => 'https://brandemia.org/sites/default/files/inline/images/atp_logo_tour.jpg',
        ];
    }
}
