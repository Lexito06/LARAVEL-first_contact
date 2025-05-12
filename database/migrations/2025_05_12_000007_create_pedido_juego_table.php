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
        Schema::create('pedido_juego', function (Blueprint $table) {
            $table->foreignId('id_pedido')->constrained('pedido')->onDelete('cascade')->onUpdate('cascade'); // Clave foránea
            $table->foreignId('id_juego')->constrained('juego')->onDelete('cascade')->onUpdate('cascade'); // Clave foránea
            $table->decimal('precio_unitario', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_juego');
    }
};
