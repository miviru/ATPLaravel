<?php

namespace Tests\Feature;

use App\Models\Inscripcion;
use App\Models\Torneo;
use App\Models\Tenista;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InscripcionControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testParticiparTorneo()
    {
        $torneo = Torneo::factory()->create();
        Tenista::factory()->count(3)->create();

        $response = $this->get(route('torneos.participar', $torneo->id));

        $response->assertStatus(200);
        $response->assertViewHas('torneo', $torneo);
        $response->assertViewHas('tenistasNoInscritos');
    }

    public function testInscribirTenista()
    {
        $torneo = Torneo::factory()->create();
        $tenista = Tenista::factory()->create();

        $response = $this->post(route('torneos.inscribirTenista', [$torneo->id, $tenista->id]));

        $response->assertRedirect();
        $this->assertDatabaseHas('inscripcions', [
            'torneo_id' => $torneo->id,
            'tenista_id' => $tenista->id,
        ]);
    }

    public function testVerInscripciones()
    {
        $torneo = Torneo::factory()->has(Inscripcion::factory()->count(3))->create();

        $response = $this->get(route('torneos.inscripciones', $torneo->id));

        $response->assertStatus(200);

        $response->assertViewHas('torneo', function($viewTorneo) use ($torneo) {
            return $viewTorneo->id === $torneo->id;
        });

        $response->assertViewHas('inscripciones', function($viewInscripciones) use ($torneo) {
            return $viewInscripciones->count() === $torneo->inscripciones->count();
        });
    }



    public function testVerTorneosInscritos()
    {
        $tenista = Tenista::factory()->create();
        Inscripcion::factory()->count(3)->create(['tenista_id' => $tenista->id]);

        $response = $this->get(route('tenistas.torneos', $tenista->id));

        $response->assertStatus(200);
        $response->assertViewHas('inscripciones');
        $response->assertViewHas('tenista_id', $tenista->id);
    }

    public function testGanador()
    {
        $user = $this->createUser('admin');
        $this->actingAs($user);

        $torneo = Torneo::factory()->create();
        $tenista = Tenista::factory()->create();
        $inscripcion = Inscripcion::factory()->create([
            'torneo_id' => $torneo->id,
            'tenista_id' => $tenista->id,
            'puntos' => 0,
            'ganancias' => 0,
        ]);

        $response = $this->post(route('torneos.ganador', [
            'torneo_id' => $torneo->id,
            'id' => $tenista->id,
        ]), [
            'puntos' => 10,
            'ganancias' => 1000,
        ]);


        $response->assertRedirect(route('torneos.index'));
        $this->assertDatabaseHas('inscripcions', [
            'torneo_id' => $torneo->id,
            'tenista_id' => $tenista->id,
            'puntos' => 10,
            'ganancias' => 1000,
        ]);
    }

    public function testEliminarInscripcion()
    {
        $torneo = Torneo::factory()->create();

        $inscripcion = Inscripcion::factory()->create(['torneo_id' => $torneo->id]);

        $response = $this->delete(route('torneos.eliminarInscripcion', ['torneo_id' => $torneo->id, 'id' => $inscripcion->id]));

        $this->assertDatabaseMissing('inscripcions', ['id' => $inscripcion->id]);

        $response->assertRedirect(route('torneos.index'));
    }

    private function createUser($role)
    {
        return User::factory()->create([
            'role' => $role,
        ]);
    }

}
