<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations. // Metodo para Crear la Tabla
     */
    public function up(): void // Metodo para Crear la Tabla
    {
        Schema::create('brands', function (Blueprint $table) // Crear la Tabla Brands
        {
            $table->increments('id'); // Id de la Marca con un Incremento
            $table->string('name', 60); // Nombre de la Marca con un Limite de 60 Caracteres
            $table->timestamps(); // Fecha de Creacion y Actualizacion de la Marca
        });
    }

    /**
     * Reverse the migrations. // Metodo para Eliminar la Tabla
     */
    public function down(): void // Metodo para Eliminar la Tabla
    {
        Schema::dropIfExists('brands'); // Eliminar la Tabla Brands
    }
};
