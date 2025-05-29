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
        Schema::create('juego', function (Blueprint $table) {
            $table->id(); // id_juego
            $table->string('nombre', 45);
            $table->text('descripcion');
            $table->decimal('precio', 6, 2);
            $table->string('imagen', 100)->default('default.jpeg');
            $table->unsignedTinyInteger('nota')->default(0); // 0 = no notado, 1 = notado
            $table->foreignId('id_categoria')->constrained('categoria')->onDelete('cascade')->onUpdate('cascade'); // Clave foránea
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('juego');
    }
};
