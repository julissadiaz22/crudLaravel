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
            $table->id();
            $table->unsignedBigInteger('id_recetas');
            $table->unsignedBigInteger('id_unidad_medida');
            $table->unsignedBigInteger('id_usuario');
            $table->string('nombre_ingreso');
            $table->string('tipo_movimiento');
            $table->double('costo_unitario', 10, 2);
            $table->double('costo_total', 15, 2);
            $table->double('saldo', 15, 2);
            $table->integer('cantidad');
            $table->string('motivo')->nullable();
            $table->string('referencia')->nullable();
            $table->date('fecha_movimiento');
            $table->date('fecha_vencimiento')->nullable();
            $table->string('estado');
            $table->timestamps();
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
