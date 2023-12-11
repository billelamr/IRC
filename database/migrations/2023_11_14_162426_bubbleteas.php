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
        Schema::create('bubbleteas', function (Blueprint $table) {
            /*$table->id();
            $table->string('size');
            $table->string('milk_sort');
            $table->string('fruit_sort');
            $table->integer('quantity_sugar');
            $table->string('name_poppings');
            $table->integer('price');*/
            $table->id();
            $table->string('name'); //lait-matcha-taro-citron.....
            $table->unsignedBigInteger('id_base'); //1=thé vert 2=thé noir
            $table->foreign('id_base')->references('id')->on('bases');
            $table->float('first_price'); //without option
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bubbleteas');
    }
};
