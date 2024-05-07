<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenista extends Model
{

    protected $fillable = [
        'puntos',
        'nombre',
        'pais',
        'fecha_nacimiento',
        'altura',
        'peso',
        'profesional_desde',
        'mano',
        'reves',
        'entrenador',
        'ganancias',
        'mejor_ranking',
        'victorias',
        'derrotas',
//        'edad',
        'win_rate',
        'imagen'

    ];

}
