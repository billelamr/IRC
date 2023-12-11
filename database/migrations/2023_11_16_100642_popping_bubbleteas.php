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
        Schema::create('popping_bubbleteas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_popping');
            $table->foreign('id_popping')->references('id')->on('poppings');
            $table->unsignedBigInteger('id_bubbletea');
            $table->foreign('id_bubbletea')->references('id')->on('bubbleteas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popping_bubbleteas');
    }
};
