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
        Schema::create('condominios', function (Blueprint $table) {
            $table->id();
            $table->string('condominio');
            $table->foreignId('pais_id')->constrained('paises');
            $table->foreignId('estado_id')->constrained();
            $table->foreignId('municipio_id')->constrained();
            $table->string('localidad');
            $table->string('colonia');
            $table->string('calle');
            $table->string('numero');
            $table->string('cp', 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condominios');
    }
};
