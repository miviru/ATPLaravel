<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscripcion extends Model
{

    use HasFactory;
    protected $fillable = [
        'torneo_id',
        'tenista_id',
        'puntos',
        'ganancias',
        'entradas_individual',
        'entradas_dobles',
        'participantes',
        'isDeleted'
    ];

    protected $hidden = [
        'torneo_id',
        'tenista_id',
        'isDeleted',
    ];

    protected $casts = [
        'isDeleted' => 'boolean',
    ];

    //    Realcion ManyToOne
    public function torneo(): BelongsTo
    {
        return $this->belongsTo(Torneo::class);
    }

    //    Realcion ManyToOne
    public function tenista(): BelongsTo
    {
        return $this->belongsTo(Tenista::class);
    }
}
