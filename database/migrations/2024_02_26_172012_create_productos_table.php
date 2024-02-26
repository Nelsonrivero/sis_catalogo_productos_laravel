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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_producto');
            $table->string('referencia')->unique();
            $table->enum('talla', ['S', 'M', 'L']);
            $table->string('observaciones')->nullable();
            $table->unsignedBigInteger('marca_id');
            $table->integer('cantidad_inventario');
            $table->date('fecha_embarque');
            $table->timestamps();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
