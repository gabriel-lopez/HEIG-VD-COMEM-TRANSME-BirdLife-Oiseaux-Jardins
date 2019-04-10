<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bird_size', function (Blueprint $table) {
            $table->integer('bird_id');
            $table->integer('size_id');

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('size_id')->references('id')->on('sizes');
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

        Schema::dropIfExists('bird_size');

        Schema::enableForeignKeyConstraints();
    }
}
