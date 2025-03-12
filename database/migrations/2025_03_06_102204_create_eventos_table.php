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
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombreEvento')->nullable();
            $table->date('fechaInicio')->nullable();
            $table->date('fechaFin')->nullable();
            $table->enum('tipo', ['reunión', 'conferencia', 'taller', 'presentación', 'concierto'])->nullable();
            $table->integer('participantes')->nullable(); // Nota: se recomienda validar que esté entre 1 y 15 en la lógica de negocio o mediante validaciones
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
