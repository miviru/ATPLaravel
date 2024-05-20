<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Torneo extends Model
{
    use HasUuids;

    public static string $IMAGE_DEFAULT = 'https://www.palco23.com/files/2020/19_redaccion/competiciones/tenis/atp/atp-tour-federacion-espa%C3%B1ola-728.jpg';


    protected $fillable = [
        'id',
        'id_secundario',
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
        'imagen',
        'isDeleted'
    ];

    protected $hidden = [
        'isDeleted',
        'id'
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
