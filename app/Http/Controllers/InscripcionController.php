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

