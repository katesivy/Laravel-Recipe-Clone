<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->unsignedBigInteger('ingredient_id');
            $table->text('quantity');
            $table->timestamps();
            $table->foreign('recipe_id')->references('id')->on('recipes'); 
            $table->foreign('ingredient_id')->references('id')->on('ingredients'); 
             

        });
    }


    public function down()
    {
        Schema::dropIfExists('ingredient_recipes');
    }
}
