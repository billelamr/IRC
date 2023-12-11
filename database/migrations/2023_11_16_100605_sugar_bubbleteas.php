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
        Schema::create('sugar_bubbleteas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_sugar');
            $table->foreign('id_sugar')->references('id')->on('sugars');
            $table->unsignedBigInteger('id_bubbletea');
            $table->foreign('id_bubbletea')->references('id')->on('bubbleteas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sugar_bubbleteas');
    }
};
