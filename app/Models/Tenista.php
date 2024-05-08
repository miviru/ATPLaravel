<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    //    Realcion OneToMany
    public function inscripcion(): HasMany
    {
        return $this->hasMany(Inscripcion::class);
    }

}
