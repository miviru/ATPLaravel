<?php

namespace Tests\Feature;

use App\Models\Torneo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TorneoControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        Torneo::factory()->count(3)->create();

        $response = $this->get(route('torneos.index'));

        $response->assertStatus(200);
        $response->assertViewHas('torneos');
    }

    public function testCreate()
    {
        $response = $this->get(route('torneos.create'));

        $response->assertStatus(200);
        $response->assertViewIs('torneos.create');
    }

    public function testStore()
    {
        $data = [
            'id_secundario' => '123e4567-e89b-12d3-a456-426614174000',
            'nombre' => 'Test Torneo',
            'ubicacion' => 'Test City',
            'modo' => 'INDIVIDUAL',
            'categoria' => 'Test Category',
            'superficie' => 'CLAY',
            'entradas_individual' => 100,
            'entradas_dobles' => 50,
            'premio' => 5000,
            'puntos' => 100,
            'fecha_inicio' => '2024-01-01',
            'fecha_fin' => '2024-01-15',
            'imagen' => Torneo::$IMAGE_DEFAULT,
        ];

        $response = $this->post(route('torneos.store'), $data);

        $response->assertRedirect(route('torneos.index'));
        $this->assertDatabaseHas('torneos', ['nombre' => 'Test Torneo']);
    }

    public function testShow()
    {
        $torneo = Torneo::factory()->create();

        $response = $this->get(route('torneos.show', $torneo->id));

        $response->assertStatus(200);
        $response->assertViewHas('torneo');
    }

    public function testEdit()
    {
        $torneo = Torneo::factory()->create();

        $response = $this->get(route('torneos.edit', $torneo->id));

        $response->assertStatus(200);
        $response->assertViewHas('torneo');
    }

    public function testUpdate()
    {
        $torneo = Torneo::factory()->create();

        $data = [
            'nombre' => 'Updated Torneo',
            'ubicacion' => 'Updated City',
            'modo' => 'DOBLES',
            'categoria' => 'Updated Category',
            'superficie' => 'HARD',
            'entradas_individual' => 200,
            'entradas_dobles' => 100,
            'premio' => 10000,
            'puntos' => 200,
            'fecha_inicio' => '2024-02-01',
            'fecha_fin' => '2024-02-15',
            'imagen' => Torneo::$IMAGE_DEFAULT,
        ];

        $response = $this->put(route('torneos.update', $torneo->id), $data);

        $response->assertRedirect(route('torneos.index'));
        $this->assertDatabaseHas('torneos', ['nombre' => 'Updated Torneo']);
    }

    public function testDestroy()
    {
        $torneo = Torneo::factory()->create();

        $response = $this->delete(route('torneos.destroy', $torneo->id));

        $response->assertRedirect(route('torneos.index'));
        $this->assertDatabaseMissing('torneos', ['id' => $torneo->id]);
    }
}
