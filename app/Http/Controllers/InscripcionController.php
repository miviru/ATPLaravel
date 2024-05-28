<?php

namespace App\Http\Controllers;

use App\Models\Torneo;
use Illuminate\Http\Request;

class InscripcionController extends Controller
{
    public function participarTorneo($torneo_id, $tenista_id) {
        $torneo = Torneo::find($torneo_id);

        if (!$torneo) {
            return redirect()->back()->with('error', 'Torneo no encontrado.');
        }

        $participantes = $torneo->participantes ?? [];

        if (in_array($tenista_id, $participantes)) {
            return redirect()->back()->with('info', 'El tenista ya está inscrito en este torneo.');
        }

        $numeroMaximoEntradas = $torneo->modo === 'INDIVIDUAL' ? $torneo->entradas_individual : $torneo->entradas_dobles;
        if (count($participantes) >= $numeroMaximoEntradas) {
            return redirect()->back()->with('error', 'No hay más espacio disponible para este torneo.');
        }

        $participantes[] = $tenista_id;
        $torneo->participantes = $participantes;

        $torneo->save();

        return redirect()->route('torneos.index')->with('success', 'Inscripción exitosa.');
    }

    public function verInscripciones($torneo_id) {
        $torneo = Torneo::find($torneo_id);

        if (!$torneo) {
            return redirect()->back()->with('error', 'Torneo no encontrado.');
        }

        $inscripciones = $torneo->inscripciones;

        return view('torneos.inscripciones')->with([
            'torneo' => $torneo,
            'inscripciones' => $inscripciones
        ]);
    }

    public function sumarPuntos($torneo_id, $tenista_id, $puntos) {
        $inscripcion = Inscripcion::where('torneo_id', $torneo_id)
            ->where('tenista_id', $tenista_id)
            ->first();

        if (!$inscripcion) {
            return redirect()->back()->with('error', 'Inscripción no encontrada.');
        }

        $inscripcion->puntos += $puntos;
        $inscripcion->save();

        return redirect()->route('torneos.index')->with('success', 'Puntos sumados exitosamente.');
    }

    public function sumarGanancias($torneo_id, $tenista_id, $ganancias) {
        $inscripcion = Inscripcion::where('torneo_id_secundario', $torneo_id)
            ->where('tenista_id', $tenista_id)
            ->first();

        if (!$inscripcion) {
            return redirect()->back()->with('error', 'Inscripción no encontrada.');
        }

        $inscripcion->ganancias += $ganancias;
        $inscripcion->save();

        return redirect()->route('torneos.index')->with('success', 'Ganancias sumadas exitosamente.');
    }
}

