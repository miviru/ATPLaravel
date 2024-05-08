<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tenistas', function (Blueprint $table) {
            $table->id();
            $table->integer('puntos');
            $table->string('nombre');
            $table->string('pais');
            $table->date('fecha_nacimiento');
            $table->double('altura');
            $table->double('peso');
            $table->integer('profesional_desde');
            $table->enum('mano', ['DIESTRO', 'ZURDO']);
            $table->enum('reves', ['UNA_MANO', 'DOS_MANOS']);
            $table->enum('modo', ['INDIVIDUAL', 'DOBLES', 'AMBOS']);
            $table->string('entrenador');
            $table->integer('ganancias');
            $table->integer('mejor_ranking');
            $table->integer('victorias');
            $table->integer('derrotas');
            $table->integer('edad');
            $table->integer('win_rate');
            $table->string('imagen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenistas');
    }
};
