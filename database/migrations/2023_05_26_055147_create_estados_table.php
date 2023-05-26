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
        Schema::create('estados', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pais_id')->constrained('paises');
            $table->string('estado');
            $table->string('abr', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estados');
    }
};
