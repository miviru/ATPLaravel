<?php

use App\Http\Controllers\InscripcionController;
use App\Http\Controllers\TenistaController;
use App\Http\Controllers\TorneoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminVerify;



Route::get('/', [TenistaController::class, 'indexPrincipal'])->name('indexPrincipal');

Route::group(['prefix' => 'tenistas'], function () {
    //Todos los tenistas
    Route::get('/', [TenistaController::class, 'index'])->name('tenistas.index');
    //Formulario para crear tenista
    Route::get('/create', [TenistaController::class, 'create'])->name('tenistas.create')->middleware(['auth', AdminVerify::class]);
    //Guardar tenista nuevo
    Route::post('/', [TenistaController::class, 'store'])->name('tenistas.store')->middleware(['auth', AdminVerify::class]);
    //Mostrar datos de un tenista
    Route::get('/{id}', [TenistaController::class, 'show'])->name('tenistas.show');
    //Formulario para editar un tenista
    Route::get('/{id}/edit', [TenistaController::class, 'edit'])->name('tenistas.edit')->middleware(['auth', AdminVerify::class]);
    //Actualizar un tenista
    Route::put('/{id}', [TenistaController::class, 'update'])->name('tenistas.update')->middleware(['auth', AdminVerify::class]);
    //Eliminar un tenista
    Route::delete('/{id}', [TenistaController::class, 'destroy'])->name('tenistas.destroy')->middleware(['auth', AdminVerify::class]);

    Route::get('descargar/{id}', [TenistaController::class, 'descargarPDF'])->name('descargar');
});

Route::group(['prefix' => 'torneos'], function () {
    //Todos los torneos
    Route::get('/', [TorneoController::class, 'index'])->name('torneos.index');
    //Formulario para crear torneo
    Route::get('/create', [TorneoController::class, 'create'])->name('torneos.create')->middleware(['auth', AdminVerify::class]);
    //Guardar torneo nuevo
    Route::post('/', [TorneoController::class, 'store'])->name('torneos.store')->middleware(['auth', AdminVerify::class]);
    //Mostrar datos de un torneo
    Route::get('/{id}', [TorneoController::class, 'show'])->name('torneos.show');
    //Formulario para editar un torneo
    Route::get('/{id}/edit', [TorneoController::class, 'edit'])->name('torneos.edit')->middleware(['auth', AdminVerify::class]);
    //Actualizar un torneo
    Route::put('/{id}', [TorneoController::class, 'update'])->name('torneos.update')->middleware(['auth', AdminVerify::class]);
    //Eliminar un torneo
    Route::delete('/{id}', [TorneoController::class, 'destroy'])->name('torneos.destroy')->middleware(['auth', AdminVerify::class]);
});

//Rutas de inscripciones
Route::get('/torneos/{id}/participar', [InscripcionController::class, 'participarTorneo'])->name('torneos.participar');
Route::get('/torneos/{id}/inscripciones', [InscripcionController::class, 'verInscripciones'])->name('torneos.inscripciones');
Route::get('/tenistas/{id}/torneos', [InscripcionController::class, 'verTorneosInscritos'])->name('tenistas.torneos');
Route::delete('/torneos/{torneo_id}/eliminar-inscripcion/{id}', [InscripcionController::class, 'eliminarInscripcion'])->name('torneos.eliminarInscripcion')->middleware('auth', AdminVerify::class);
Route::post('/torneos/{torneo_id}/inscribir/{tenista_id}', [InscripcionController::class, 'inscribirTenista'])->name('torneos.inscribirTenista');
//ruta para el metodo ganador
Route::post('/torneos/{torneo_id}/ganador/{id}', [InscripcionController::class, 'ganador'])->name('torneos.ganador')->middleware('auth', AdminVerify::class);

// Rutas de autenticación, incluyendo logout
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
