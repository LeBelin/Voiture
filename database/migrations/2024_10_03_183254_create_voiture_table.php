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
        Schema::create('voiture', function (Blueprint $table) {
            $table->integer('numVoiture')->primary();
            $table->integer('vin');
            $table->string('couleur');
            $table->integer('nbPlaces');
            $table->integer('cylindree');
            $table->integer('puissance');
            $table->integer('poids');
            $table->integer('longeur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voitures');
    }
};
