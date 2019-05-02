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
            $table->unsignedInteger('bird_id');
            $table->unsignedInteger('beak_shape_id');

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('beak_shape_id')->references('id')->on('beak_shapes');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('beak_shape_bird');

        Schema::enableForeignKeyConstraints();
    }
}
