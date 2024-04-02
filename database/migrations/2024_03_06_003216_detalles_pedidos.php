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
        Schema::create('detalles_envios', function (Blueprint $table) {
            $table->id();
            $table->integer('Cantidad')->length(4);
            $table->string('Estado_Pedido');
            $table->string('id_pedidos', 5);
            $table->string('id_envio', 5);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_envios');
    }
};
