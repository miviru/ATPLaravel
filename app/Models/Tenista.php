<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenista extends Model
{
    public static string $IMAGE_DEFAULT = 'https://brandemia.org/sites/default/files/inline/images/atp_logo_tour.jpg';

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
        'modo',
        'entrenador',
        'ganancias',
        'mejor_ranking',
        'victorias',
        'derrotas',
        'edad',
        'win_rate',
        'imagen',
        'isDeleted'
    ];

    protected $hidden = [
        'isDeleted',
    ];

    protected $casts = [
        'isDeleted' => 'boolean',
    ];

    public function getEdad() {

        $fecha_actual = now();
        $fechaNacimiento = \Carbon\Carbon::createFromFormat('Y-m-d', $this->fecha_nacimiento);
        $edad = $fechaNacimiento->diffInYears(now());
        $edad = (int)$edad;

        return $edad;

    }

    public function getWinRate()
    {

        $victorias = $this->victorias;
        $derrotas = $this->derrotas;
        $win_rate = ($victorias / ($victorias + $derrotas)) * 100;
        $win_rate = (int)$win_rate;

        return $win_rate;
    }

    //    Realcion OneToMany
    public function inscripcion(): HasMany
    {
        return $this->hasMany(Inscripcion::class);
    }

}