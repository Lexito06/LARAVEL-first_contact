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
        Schema::create('biblioteca', function (Blueprint $table) {
            $table->foreignId('id_usuario')->constrained('users')->onDelete('cascade')->onUpdate('cascade'); // Clave foránea
            $table->foreignId('id_juego')->constrained('juego')->onDelete('cascade')->onUpdate('cascade'); // Clave foránea
            $table->date('fecha_adquisicion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biblioteca');
    }
};
