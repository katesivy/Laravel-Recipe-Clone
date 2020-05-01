<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
// use App\Http\Resources\RecipesCollection;
// use App\Http\Resources\Recipes;
 use App\Recipe;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('ingredients');
            $table->text('directions');
            // $table->unsignedBigInteger('rating');
            $table->text('nutrition_facts');
            // $table->imageUrl('image');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}
