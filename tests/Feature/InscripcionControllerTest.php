<?php

namespace Tests\Feature;

use App\Models\Inscripcion;
use App\Models\Torneo;
use App\Models\Tenista;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InscripcionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        Inscripcion::factory()->count(3)->create();

        $response = $this->get(route('inscripciones.index'));

        $response->assertStatus(200);
        $response->assertViewHas('inscripciones');
    }

    public function testCreate()
    {
        $response = $this->get(route('inscripciones.create'));

        $response->assertStatus(200);
        $response->assertViewIs('inscripciones.create');
    }

    public function testStore()
    {
        $torneo = Torneo::factory()->create();
        $tenista = Tenista::factory()->create();

        $data = [
            'torneo_id' => $torneo->id,
            'tenista_id' => $tenista->id,
            'puntos' => 100,
            'ganancias' => 5000,
            'entradas_individual' => 50,
            'entradas_dobles' => 25,
            'participantes' => 10,
            'isDeleted' => false,
        ];

        $response = $this->post(route('inscripciones.store'), $data);

        $response->assertRedirect(route('inscripciones.index'));
        $this->assertDatabaseHas('inscripciones', ['puntos' => 100]);
    }

    public function testShow()
    {
        $inscripcion = Inscripcion::factory()->create();

        $response = $this->get(route('inscripciones.show', $inscripcion->id));

        $response->assertStatus(200);
        $response->assertViewHas('inscripcion');
    }

    public function testEdit()
    {
        $inscripcion = Inscripcion::factory()->create();

        $response = $this->get(route('inscripciones.edit', $inscripcion->id));

        $response->assertStatus(200);
        $response->assertViewHas('inscripcion');
    }

    public function testUpdate()
    {
        $inscripcion = Inscripcion::factory()->create();

        $data = [
            'puntos' => 200,
            'ganancias' => 10000,
            'entradas_individual' => 100,
            'entradas_dobles' => 50,
            'participantes' => 20,
        ];

        $response = $this->put(route('inscripciones.update', $inscripcion->id), $data);

        $response->assertRedirect(route('inscripciones.index'));
        $this->assertDatabaseHas('inscripciones', ['puntos' => 200]);
    }

    public function testDestroy()
    {
        $inscripcion = Inscripcion::factory()->create();

        $response = $this->delete(route('inscripciones.destroy', $inscripcion->id));

        $response->assertRedirect(route('inscripciones.index'));
        $this->assertDatabaseMissing('inscripciones', ['id' => $inscripcion->id]);
    }
}
