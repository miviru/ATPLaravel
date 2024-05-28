<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use Exception;
use Illuminate\Http\Request;


class TenistaController extends Controller
{
    public function index(Request $request)
    {
        try {
            $tenistas = Tenista::search($request->search)->orderBy('puntos', 'desc')->paginate(2);
            return view('tenistas.index')->with('tenistas', $tenistas);
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al obtener los tenistas: ' . $e->getMessage());

        }

    }

    public function indexPrincipal()
    {

        return view('indexPrincipal');

    }

    public function create()
    {

        return view('tenistas.create');

    }

    public function store(Request $request) {

        $request->validate([
            'puntos' => 'required|integer|min:0',
            'nombre' => 'required|string',
            'pais' => 'required|string',
            'fecha_nacimiento' => 'required|date|before:today',
            'altura' => 'required|numeric|min:0',
            'peso' => 'required|numeric|min:0',
            'profesional_desde' => 'required|integer',
            'mano' => 'required|in:DIESTRO,ZURDO',
            'reves' => 'required|in:UNA_MANO,DOS_MANOS',
            'modo' => 'required|in:INDIVIDUAL,DOBLES,AMBOS',
            'entrenador' => 'required|string',
            'ganancias' => 'required|integer|min:0',
            'mejor_ranking' => 'required|integer|min:1',
            'victorias' => 'required|integer|min:0',
            'derrotas' => 'required|integer|min:0',
            'imagen' => 'required|image',
        ]);
        try {
            $tenista = new Tenista($request->all());
            $tenista->edad = 20;
            $tenista->win_rate = 50;
            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->storeAs('tenistas', $request->file('imagen')->getClientOriginalName(), 'public');
                $tenista->imagen = $imagenPath;
            } else {
                $tenista->imagen = Tenista::$IMAGE_DEFAULT;
            }
            $tenista->save();
            return redirect()->route('tenistas.index')->with('success', 'Tenista creado exitosamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el tenista: ' . $e->getMessage());
        }
    }

    public function show($id)
    {

        $tenista = Tenista::find($id);
        return view('tenistas.show')->with('tenista', $tenista);

    }

    public function edit($id)
    {

        $tenista = Tenista::find($id);
        return view('tenistas.edit')->with('tenista', $tenista);

    }

    public function update(Request $request, $id) {
        $tenista = Tenista::find($id);
        if (!$tenista) {
            return redirect()->route('tenistas.index')->with('error', 'Tenista no encontrado');
        }
        $request->validate([
            'puntos' => 'integer|min:0',
            'altura' => 'numeric|min:0',
            'peso' => 'numeric|min:0',
            'mano' => 'in:DIESTRO,ZURDO',
            'reves' => 'in:UNA_MANO,DOS_MANOS',
            'modo' => 'in:INDIVIDUAL,DOBLES,AMBOS',
            'entrenador' => 'string',
            'ganancias' => 'integer|min:0',
            'mejor_ranking' => 'integer|min:1',
            'victorias' => 'integer|min:0',
            'derrotas' => 'integer|min:0',
            'imagen' => 'file',
        ]);
        try {
            if ($request->hasFile('imagen')) {
                $imagenPath = $request->file('imagen')->storeAs('tenistas', $request->file('imagen')->getClientOriginalName(), 'public');
                $tenista->imagen = $imagenPath;
            }
            $tenista->update($request->except('imagen'));

            return redirect()->route('tenistas.index')->with('success', 'Tenista actualizado exitosamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el Tenista: ' . $e->getMessage());
        }
    }

    public function getTenistas($id)
    {
        return Tenista::find($id);
    }

    public function destroy($id)
    {
        $tenista = Tenista::find($id);
        if (!$tenista) {
            return redirect()->route('tenistas.index')->with('error', 'Tenista no encontrado');
        }
        try {
            $tenista->delete();
            return redirect()->route('tenistas.index')->with('success', 'Tenista eliminado correctamente');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al eliminar el Tenista: ' . $e->getMessage());
        }

    }
}
