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
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idtipo')->unsigned();
            $table->string('titulo');
            $table->string('contenido');
            $table->string('imagen')->nullable();
            $table->string('idautor');
            $table->timestamps();

            $table->foreign('idtipo')->references('id')->on('tipopublicacion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacion');
    }
};
