<?php

namespace Tests\Feature;

use App\Models\Tenista;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class TenistaControllerTest extends TestCase
{
    use RefreshDatabase;

    public function testIndex()
    {
        Tenista::factory()->count(3)->create();

        $response = $this->get(route('tenistas.index'));

        $response->assertStatus(200);
        $response->assertViewHas('tenistas');
    }

    public function testCreate()
    {
        $response = $this->get(route('tenistas.create'));

        $response->assertStatus(200);
        $response->assertViewIs('tenistas.create');
    }

    public function testStore()
    {
        Storage::fake('public');

        $data = [
            'puntos' => 1000,
            'nombre' => 'Test Tenista',
            'pais' => 'Test Country',
            'fecha_nacimiento' => '2000-01-01',
            'altura' => 180,
            'peso' => 75,
            'profesional_desde' => 2018,
            'mano' => 'DIESTRO',
            'reves' => 'DOS_MANOS',
            'modo' => 'INDIVIDUAL',
            'entrenador' => 'Test Coach',
            'ganancias' => 50000,
            'mejor_ranking' => 10,
            'victorias' => 20,
            'derrotas' => 10,
            'imagen' => UploadedFile::fake()->image('tenista.jpg')
        ];

        $response = $this->post(route('tenistas.store'), $data);

        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseHas('tenistas', ['nombre' => 'Test Tenista']);
    }

    public function testShow()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->get(route('tenistas.show', $tenista->id));

        $response->assertStatus(200);
        $response->assertViewHas('tenista');
    }

    public function testEdit()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->get(route('tenistas.edit', $tenista->id));

        $response->assertStatus(200);
        $response->assertViewHas('tenista');
    }

    public function testUpdate()
    {
        Storage::fake('public');

        $tenista = Tenista::factory()->create();

        $data = [
            'puntos' => 1500,
            'altura' => 185,
            'peso' => 80,
            'mano' => 'ZURDO',
            'reves' => 'UNA_MANO',
            'modo' => 'DOBLES',
            'entrenador' => 'Updated Coach',
            'ganancias' => 60000,
            'mejor_ranking' => 5,
            'victorias' => 30,
            'derrotas' => 5,
            'imagen' => UploadedFile::fake()->image('tenista_updated.jpg')
        ];

        $response = $this->put(route('tenistas.update', $tenista->id), $data);

        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseHas('tenistas', ['entrenador' => 'Updated Coach']);
    }

    public function testDestroy()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->delete(route('tenistas.destroy', $tenista->id));

        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseMissing('tenistas', ['id' => $tenista->id]);
    }

    public function testDescargarPDF()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->get(route('tenistas.pdf', $tenista->id));

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/pdf');
    }
}
