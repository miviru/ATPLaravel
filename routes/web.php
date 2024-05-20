<?php

use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TenistaController::class,'indexPrincipal']) -> name('indexPrincipal');

Route::group(['prefix' => 'tenistas'], function () {
    //Todos los tenistas
    Route::get('/', [TenistaController::class,'index']) -> name('tenistas.index');
    //Formulario para crear tenista
    Route::get('/create', [TenistaController::class,'create']) -> name('tenistas.create');
    //Guardar tenista nuevo
    Route::post('/', [TenistaController::class,'store']) -> name('tenistas.store');
    //Mostrar datos de un tenista
    Route::get('/{id}', [TenistaController::class,'show']) -> name('tenistas.show');
    //Formulario para editar un tenista
    Route::get('/{id}/edit', [TenistaController::class,'edit']) -> name('tenistas.edit');
    //Actualizar un tenista
    Route::put('/{id}', [TenistaController::class,'update']) -> name('tenistas.update');
    //Eliminar un tenista
    Route::delete('/{id}', [TenistaController::class,'destroy']) -> name('tenistas.destroy');
});

Route::group(['prefix' => 'torneos'], function () {
    //Todos los torneos
    Route::get('/', [TorneoController::class,'index']) -> name('torneos.index');
    //Formulario para crear torneo
    Route::get('/create', [TorneoController::class,'create']) -> name('torneos.create');
    //Guardar torneo nuevo
    Route::post('/', [TorneoController::class,'store']) -> name('torneos.store');
    //Mostrar datos de un torneo
    Route::get('/{id}', [TorneoController::class,'show']) -> name('torneos.show');
    //Formulario para editar un torneo
    Route::get('/{id}/edit', [TorneoController::class,'edit']) -> name('torneos.edit');
    //Actualizar un torneo
    Route::put('/{id}', [TorneoController::class,'update']) -> name('torneos.update');
    //Eliminar un torneo
    Route::delete('/{id}', [TorneoController::class,'destroy']) -> name('torneos.destroy');
});

