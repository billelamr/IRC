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
        Schema::create('command_bubleteas', function (Blueprint $table) {

            $table->id();
            $table->timestamp('date_command');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->unsignedBigInteger('id_bubbletea');
            $table->foreign('id_bubbletea')->references('id')->on('bubbleteas');
            $table->unsignedBigInteger('id_popping');         
            $table->foreign('id_popping')->references('id')->on('poppings');
            $table->unsignedBigInteger('id_sugar');
            $table->foreign('id_sugar')->references('id')->on('sugars');
            $table->unsignedBigInteger('id_size');
            $table->foreign('id_size')->references('id')->on('sizes');
            $table->integer('quantity');
            $table->float('final_price'); //with all options added
            $table->string('status'); //en cours, payé ...
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
