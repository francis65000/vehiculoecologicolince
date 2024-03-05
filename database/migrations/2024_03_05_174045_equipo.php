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
        //
        Schema::create('equipo', function (Blueprint $table) {
            $table->id();
            $table->string('anio');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_imagen');
            $table->timestamps();

            // Definición de la clave foránea
            $table->foreign('id_imagen')->references('id')->on('medios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('equipo');
    }
};
