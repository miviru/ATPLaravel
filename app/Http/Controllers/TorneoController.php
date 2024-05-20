<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Exception;
use Illuminate\Http\Request;

class TorneoController extends Controller
{
    public function index() {
        $torneos = Torneo::all();
        return view('torneos.index') -> with('torneos', $torneos);
    }

    public function indexPrincipal() {

        return view('indexPrincipal');

    }

    public function create() {
        return view('torneos.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'nombre' => 'required|string',
            'ubicacion' => 'required|string',
            'modo' => 'required|in:INDIVIDUAL,DOBLES,AMBOS',
            'categoria' => 'required|in:ATP_250,ATP_500,MASTERS_1000',
            'superficie' => 'required|in:DURA,HIERBA,ARCILLA',
            'entradas_individual' => 'required|integer',
            'entradas_dobles' => 'required|integer',
            'premio' => 'required|integer',
            'puntos' => 'required|integer',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date',
        ]);
        try {
            $torneo = new Torneo($request->all());
            $torneo->imagen = 'https://brandemia.org/sites/default/files/inline/images/atp_logo_tour.jpg';
            $torneo->save();
            return redirect()->route('torneos.index')->with('success', 'Torneo creado exitosamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al crear el Torneo: ' . $e->getMessage());
        }
    }

    public function show($id) {
        $torneo = Torneo::find($id);
        return view('torneos.show') -> with('torneo', $torneo);
    }

    public function edit($id) {
        $torneo = Torneo::find($id);
        return view('torneos.edit') -> with('torneo', $torneo);
    }

    public function update(Request $request, $id) {
        $torneo = Torneo::find($id);
        if (!$torneo) {
            return redirect()->route('torneos.index')->with('error', 'Torneo no encontrado');
        }
        $request -> validate([
            'nombre' => 'string',
            'ubicacion' => 'string',
            'modo' => 'in:INDIVIDUAL,DOBLES,AMBOS',
            'categoria' => 'in:ATP_250,ATP_500,MASTERS_1000',
            'superficie' => 'in:DURA,HIERBA,ARCILLA',
            'entradas_individual' => 'integer',
            'entradas_dobles' => 'integer',
            'premio' => 'integer',
            'puntos' => 'integer',
            'fecha_inicio' => 'date',
            'fecha_fin' => 'date',
        ]);
        try {
            $torneo->update($request->all());
            return redirect()->route('torneos.index')->with('success', 'Torneo actualizado exitosamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al actualizar el torneo: ' . $e->getMessage());
        }
    }

    public function destroy($id) {
        $torneo = Torneo::find($id);
        if (!$torneo) {
            return redirect()->route('torneos.index')->with('error', 'Torneo no encontrado');
        }
        try {
            $torneo->delete();
            return redirect()->route('torneos.index')->with('success', 'Torneo borrado exitosamente.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Error al borrar el torneo: ' . $e->getMessage());
        }
    }
}
