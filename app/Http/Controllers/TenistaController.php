<?php

namespace App\Http\Controllers;

use App\Models\Tenista;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TenistaController extends Controller
{
    public function index() {

        $tenistas = Tenista::all();
        return view('tenistas.index') -> with('tenistas', $tenistas);

    }

    public function create() {

        return view('tenistas.create');

    }

    public function store(Request $request) {

        $validator = Validator::make($request::all(), [
            'puntos' => 'required | integer',
            'nombre' => 'required | min:3 | max:100',
            'pais' => 'required | min:3 | max:100',
            'fecha_nacimiento' => 'required | date',
            'altura' => 'required | double',
            'peso' => 'required | double',
            'profesional_desde' => 'required | integer',
            'mano' => 'required | in:DIESTRO,ZURDO',
            'reves' => 'required | in:UNA_MANO,DOS_MANOS',
            'modo' => 'required | in:INDIVIDUAL,DOBLES,AMBOS',
            'entrenador' => 'required | min:3 | max:100',
            'ganancias' => 'required | integer',
            'mejor_ranking' => 'required | integer',
            'victorias' => 'required | integer',
            'derrotas' => 'required | integer',
            'edad' => 'integer',
            'win_rate' => 'integer',
            'imagen' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tenista = new Tenista();
        $tenista->puntos = $request->puntos;
        $tenista->nombre = $request->nombre;
        $tenista->pais = $request->pais;
        $tenista->fecha_nacimiento = $request->fecha_nacimiento;
        $tenista->altura = $request->altura;
        $tenista->peso = $request->peso;
        $tenista->profesional_desde = $request->profesional_desde;
        $tenista->mano = $request->mano;
        $tenista->reves = $request->reves;
        $tenista->modo = $request->modo;
        $tenista->entrenador = $request->entrenador;
        $tenista->ganancias = $request->ganancias;
        $tenista->mejor_ranking = $request->mejor_ranking;
        $tenista->victorias = $request->victorias;
        $tenista->derrotas = $request->derrotas;
        $tenista->edad = $request->edad;
        $tenista->win_rate = $request->win_rate;
        $tenista->imagen = $request->imagen;
        $tenista->save();

        return redirect()->route('tenistas.index')->with('success', 'Tenista creado correctamente');
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

        $validator = Validator::make($request::all(), [
            'puntos' => 'integer',
            'altura' => 'double',
            'peso' => 'double',
            'mano' => 'in:DIESTRO,ZURDO',
            'reves' => 'in:UNA_MANO,DOS_MANOS',
            'modo' => 'in:INDIVIDUAL,DOBLES,AMBOS',
            'ganancias' => 'integer',
            'mejor_ranking' => 'integer',
            'victorias' => 'integer',
            'derrotas' => 'integer',
            'win_rate' => 'integer',
            'imagen' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $tenista = Tenista::find($id);
        $tenista->puntos = $request->puntos;
        $tenista->altura = $request->altura;
        $tenista->peso = $request->peso;
        $tenista->mano = $request->mano;
        $tenista->reves = $request->reves;
        $tenista->modo = $request->modo;
        $tenista->ganancias = $request->ganancias;
        $tenista->mejor_ranking = $request->mejor_ranking;
        $tenista->victorias = $request->victorias;
        $tenista->derrotas = $request->derrotas;
        $tenista->win_rate = $request->win_rate;
        $tenista->imagen = $request->imagen;
        $tenista->save();

        return redirect()->route('tenistas.index')->with('success', 'Tenista actualizado correctamente');

    }

    public function destroy($id) {

        $tenista = Tenista::find($id);
        $tenista->delete();
        return redirect()->route('tenistas.index')->with('success', 'Tenista eliminado correctamente');

    }

}
