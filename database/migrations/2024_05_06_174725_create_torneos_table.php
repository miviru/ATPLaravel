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
        Schema::create('torneos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->id('id_secundario')->unique()->autoIncrement();
            $table->string('nombre');
            $table->string('ubicacion');
            $table->enum('modo', ['INDIVIDUAL', 'DOBLES', 'AMBOS']);
            $table->enum('categoria', ['ATP_250', 'ATP_500', 'MASTERS_1000']);
            $table->enum('superficie', ['HIERBA','ARCILLA', 'DURA']);
            $table->integer('entradas_individual');
            $table->integer('entradas_dobles');
            $table->integer('premio');
            $table->integer('puntos');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('imagen');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('torneos');
    }
};
