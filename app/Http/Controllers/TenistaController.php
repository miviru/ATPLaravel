<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class TenistaController extends Controller
{
    public function index() {

        $tenistas = Tenista::all();
        return view('tenistas.index') -> with('tenistas', $tenistas);

    }

    public function indexPrincipal() {

        return view('indexPrincipal');

    }

    public function create() {

        return view('tenistas.create');

    }

    public function store(Request $request) {

        $request -> validate([
            'puntos' => 'required|integer',
            'nombre' => 'required|string',
            'pais' => 'required|string',
            'fecha_nacimiento' => 'required|date',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'profesional_desde' => 'required|integer',
            'mano' => 'required|in:DIESTRO,ZURDO',
            'reves' => 'required|in:UNA_MANO,DOS_MANOS',
            'modo' => 'required|in:INDIVIDUAL,DOBLES,AMBOS',
            'entrenador' => 'required|string',
            'ganancias' => 'required|integer',
            'mejor_ranking' => 'required|integer',
            'victorias' => 'required|integer',
            'derrotas' => 'required|integer',
        ]);
        try {
            $tenista = new Tenista($request->all());
            $tenista->edad = 20;
            $tenista->win_rate = 50;
            $tenista->imagen = 'https://brandemia.org/sites/default/files/inline/images/atp_logo_tour.jpg';
            $tenista->save();
            return redirect()->route('tenistas.index');
        } catch (Exception $e) {
            flash('Error al crear el Producto' . $e->getMessage())->error()->important();
            return redirect()->back();
        }
    }

    public function show($id) {

        $tenista = Tenista::find($id);
        return view('tenistas.show') -> with('tenista', $tenista);

    }

    public function edit($id) {

        $tenista = Tenista::find($id);
        return view('tenistas.edit') -> with('tenista', $tenista);

    }

    public function update(Request $request, $id)
    {
        $tenista = Tenista::find($id);
        if(!$tenista) {
            return redirect()->route('tenistas.index')->with('error', 'Tenista no encontrado');
        }

         $validateDate = $request -> validate([
            'puntos' => 'integer',
            'altura' => 'numeric',
            'peso' => 'numeric',
            'mano' => 'in:DIESTRO,ZURDO',
            'reves' => 'in:UNA_MANO,DOS_MANOS',
            'modo' => 'in:INDIVIDUAL,DOBLES,AMBOS',
            'entrenador' => 'string',
            'ganancias' => 'integer',
            'mejor_ranking' => 'integer',
            'victorias' => 'integer',
            'derrotas' => 'integer'
        ]);
        try {
            $tenista->update($validateDate);
            return redirect()->route('tenistas.index');
        } catch (Exception $e) {
            flash('Error al actualizar el Producto' . $e->getMessage())->error()->important();
            return redirect()->back();
        }


    }
    public  function getTenistas($id) {
        return Tenista::find($id);
    }

    public function destroy($id) {

        $tenista = Tenista::find($id);
        $tenista->delete();
        return redirect()->route('tenistas.index')->with('success', 'Tenista eliminado correctamente');

    }

}
