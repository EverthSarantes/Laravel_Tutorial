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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id'); // Id del Producto con un Incremento
            $table->string('name', 60); // Nombre del Producto con un Limite de 60 Caracteres
            $table->string('brand'); // Marca del Producto
            $table->text('description'); // Descripcion del Producto;

            // Relacionar la Tabla Products con la Tabla Brands
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps(); // Fecha de Creacion y Actualizacion del Producto
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
