<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Direction;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe_id');
            $table->text('direction')->nullable();
            $table->timestamps();
            $table->foreign('recipe_id')->references('id')->on('recipes'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('directions');
    }
}
