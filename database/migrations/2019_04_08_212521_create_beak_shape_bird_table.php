<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeakShapeBirdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('beak_shape_bird', function (Blueprint $table) {
            $table->integer('bird_id');
            $table->integer('beak_shape_id');

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('beak_shape_id')->references('id')->on('beak_shapes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beak_shape_bird');
    }
}
