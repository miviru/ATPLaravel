<?php

namespace Tests\Feature;

use App\Models\Tenista;
use App\Models\User;
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
        // Autenticar un usuario
        $user = $this->createUser('admin');
        $this->actingAs($user);

        $response = $this->get(route('tenistas.create'));

        $response->assertStatus(200);
        $response->assertViewIs('tenistas.create');
    }

    public function testStore()
    {
        $user = $this->createUser('admin');
        $this->actingAs($user);

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


        // Verificar la redirección a la página de índice de tenistas
        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseHas('tenistas', ['nombre' => 'Test Tenista']);
        Storage::disk('public')->assertExists('tenistas/' . $data['imagen']->hashName());
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
        $user = $this->createUser('admin');
        $this->actingAs($user);

        $tenista = Tenista::factory()->create();

        $response = $this->get(route('tenistas.edit', $tenista->id));

        $response->assertStatus(200);
        $response->assertViewHas('tenista');
    }

    public function testUpdate()
    {
        // Crear y autenticar un usuario admin
        $user = $this->createUser('admin');
        $this->actingAs($user);

        // Crear un tenista
        $tenista = Tenista::factory()->create();

        // Simular el almacenamiento de una imagen en el almacenamiento público
        Storage::fake('public');

        // Datos para actualizar el tenista
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

        // Hacer una solicitud PUT a la ruta de actualización
        $response = $this->put(route('tenistas.update', $tenista->id), $data);

        // Verificar la redirección a la página de índice de tenistas
        $response->assertRedirect(route('tenistas.index'));

        // Verificar que el tenista se ha actualizado en la base de datos
        $this->assertDatabaseHas('tenistas', [
            'id' => $tenista->id,
            'entrenador' => 'Updated Coach'
        ]);

        // Verificar que la imagen se haya almacenado correctamente
        Storage::disk('public')->assertExists('tenistas/' . $data['imagen']->hashName());
    }


    public function testDestroy()
    {
        // Autenticar un usuario
        $user = $this->createUser('admin');
        $this->actingAs($user);

        // Crear un tenista
        $tenista = Tenista::factory()->create();

        // Llamar a la ruta de eliminación
        $response = $this->delete(route('tenistas.destroy', $tenista->id));

        // Comprobar redirección y que el tenista se ha eliminado correctamente
        $response->assertRedirect(route('tenistas.index'));
        $this->assertDatabaseMissing('tenistas', ['id' => $tenista->id]);
    }

    public function testDestroyTenistaNotFound()
    {
        // Autenticar un usuario
        $user = $this->createUser('admin');
        $this->actingAs($user);

        // Intentar eliminar un tenista que no existe (ID inválido)
        $response = $this->delete(route('tenistas.destroy', 999));

        // Comprobar redirección y mensaje de error
        $response->assertRedirect(route('tenistas.index'));
        $this->assertTrue(session()->has('error'));
    }

    public function testDestroyError()
    {
        // Autenticar un usuario
        $user = $this->createUser('admin');
        $this->actingAs($user);

        // Crear un tenista
        $tenista = Tenista::factory()->create();

        // Forzar un error al intentar eliminar el tenista (por ejemplo, intentar eliminar un tenista que está relacionado con otros datos)
        $mock = $this->partialMock(Tenista::class, function ($mock) {
            $mock->shouldReceive('delete')->andThrow(new \Exception('Error al eliminar el tenista'));
        });

        // Llamar a la ruta de eliminación
        $response = $this->delete(route('tenistas.destroy', $tenista->id));

        // Comprobar redirección y mensaje de error
        $response->assertRedirect();
        $this->assertFalse(session()->has('error'));
    }

    public function testDescargarPDF()
    {
        $tenista = Tenista::factory()->create();

        $response = $this->get(route('descargar', $tenista->id));

        $response->assertStatus(200);
        $response->assertHeader('content-type', 'application/pdf');
    }

    public function testDescargarPDFTenistaNotFound()
    {
        $response = $this->get(route('descargar', 999));

        $response->assertStatus(302);
        $this->assertTrue(session()->has('error'));
    }



    private function createUser($role)
    {
        return User::factory()->create([
            'role' => $role,
        ]);
    }

}
