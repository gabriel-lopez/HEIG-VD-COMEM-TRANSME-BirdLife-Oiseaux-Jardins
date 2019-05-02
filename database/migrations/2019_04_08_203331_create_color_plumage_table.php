<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColorPlumageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('color_plumage', function (Blueprint $table) {
            $table->unsignedInteger('bird_id');
            $table->unsignedInteger('color_id');

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('color_id')->references('id')->on('colors');
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

        Schema::dropIfExists('color_plumage');

        Schema::enableForeignKeyConstraints();
    }
}
