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
        Schema::create('metodos_pago', function (Blueprint $table) {
            $table->string('Tipo_tarjetas');
            $table->string('Numero_tarjeta', 30);
            $table->date('Fecha_Vencimiento');
            $table->integer('Codigo_seguridad', 3);
            $table->string('id_pago');
            $table->string('id_cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metodos_pago');
    }
};
