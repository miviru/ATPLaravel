<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{

    protected $fillable = [
        'nombre',
        'ubicacion',
        'modo',
        'categoria',
        'superficie',
        'entradas_individual',
        'entradas_dobles',
        'premio',
        'puntos',
        'fecha_inicio',
        'fecha_fin',
        'imagen'
    ];

    use HasFactory;
}
