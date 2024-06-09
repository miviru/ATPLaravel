<?php

namespace App\Http\Controllers;

use App\Models\Inscripcion;
use App\Models\Tenista;
use App\Models\Torneo;

class InscripcionController extends Controller {
    public function participarTorneo($torneo_id) {
        $torneo = Torneo::with('inscripciones.tenista')->find($torneo_id);
        if (!$torneo) {
            return redirect()->back()->with('error', 'Torneo no encontrado.');
        }

        $tenistasNoInscritos = Tenista::tenistasNoInscritos($torneo_id)->get();

        return view('torneos.participar')->with([
            'torneo' => $torneo,
            'tenistasNoInscritos' => $tenistasNoInscritos
        ]);
    }

    public function inscribirTenista($torneo_id, $tenista_id) {
        $torneo = Torneo::find($torneo_id);
        if (!$torneo) {
            return redirect()->back()->with('error', 'Torneo no encontrado.');
        }

        $tenista = Tenista::find($tenista_id);
        if (!$tenista) {
            return redirect()->back()->with('error', 'Tenista no encontrado.');
        }

        $inscripcion = new Inscripcion();
        $inscripcion->torneo_id = $torneo->id;
        $inscripcion->tenista_id = $tenista->id;
        $inscripcion->puntos = 0;
        $inscripcion->ganancias = 0;
        $inscripcion->save();

        return redirect()->back()->with('success', 'Tenista inscrito correctamente.');
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

    public function verTorneosInscritos($tenista_id) {
        $inscripciones = Inscripcion::where('tenista_id', $tenista_id)->with('torneo')->get();

        return view('tenistas.torneos')->with([
            'inscripciones' => $inscripciones,
            'tenista_id' => $tenista_id
        ]);
    }

    public function ganador($torneo_id, $tenista_id, $puntos, $ganancias) {
        // Verificar que los puntos y las ganancias sean números
        if (!is_numeric($puntos) || !is_numeric($ganancias)) {
            return redirect()->back()->with('error', 'Los puntos y las ganancias deben ser números.');
        }

        // Buscar la inscripción correspondiente al torneo y tenista
        $inscripcion = Inscripcion::where('torneo_id', $torneo_id)
            ->where('tenista_id', $tenista_id)
            ->first();

        // Si la inscripción no se encuentra, devolver un error
        if (!$inscripcion) {
            return redirect()->back()->with('error', 'Inscripción no encontrada.');
        }

        // Usar una transacción para asegurar que ambas actualizaciones se realicen de manera atómica
        DB::transaction(function() use ($inscripcion, $puntos, $ganancias) {
            $inscripcion->puntos += $puntos;
            $inscripcion->ganancias += $ganancias;
            $inscripcion->save();
        });

        // Redirigir a la vista de torneos con un mensaje de éxito
        return redirect()->route('torneos.index')->with('success', 'Puntos y ganancias sumados exitosamente.');
    }



    public function eliminarInscripcion($torneo_id, $id)
    {
        try {
            $inscripcion = Inscripcion::findOrFail($id);
            $torneoId = $inscripcion->torneo_id;

            $inscripcion->delete();

            if (!Inscripcion::find($id)) {
                $inscripciones = Inscripcion::where('torneo_id', $torneoId)->orderBy('puntos', 'desc')->get();
                $ranking = 1;

                foreach ($inscripciones as $existeInscripcion) {
                    $existeInscripcion->tenista->ranking = $ranking;
                    $existeInscripcion->save();
                }

                return redirect()->back()->with('success', 'Inscripción eliminada exitosamente.');
            } else {
                return redirect()->back()->with('error', 'No se pudo eliminar la inscripción.');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Ocurrió un error al eliminar la inscripción: ' . $e->getMessage());
        }
    }

}

