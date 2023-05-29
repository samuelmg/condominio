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
            $table->foreignId('pais_id')->nullable();
            $table->foreignId('estado_id')->nullable();
            $table->foreignId('municipio_id')->nullable();
            $table->string('localidad')->default('');
            $table->string('colonia')->default('');
            $table->string('calle')->default('');
            $table->string('numero')->default('');
            $table->string('cp', 10)->default('');
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
