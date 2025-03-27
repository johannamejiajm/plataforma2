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
        Schema::create('informacioninstitucional', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipo')->unsigned();
            $table->string('contenido',1000);
            $table->string('imagen')->nullable();
            $table->timestamps();
            $table->foreign('tipo')->references('id')->on('tipoinformacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informacioninstitucional');
    }
};
