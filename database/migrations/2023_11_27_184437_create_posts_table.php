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
        Schema::create('posts', function (Blueprint $table) {
        $table->id(); // Columna de clave primaria autoincremental
        $table->string('title'); // Columna para el título del post
        $table->text('content'); // Columna para el contenido del post
        $table->timestamps(); // Columnas para las marcas de tiempo de creación y actualización
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
