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
        Schema::create('persona_vivienda', function (Blueprint $table) {
            $table->id();
            $table->foreignId('persona_id')->constrained()->onDelete('cascade');
            $table->foreignId('vivienda_id')->constrained()->onDelete('cascade');
            $table->string('tipo', 20);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona_vivienda');
    }
};
