<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdHabitatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('bird_habitat', function (Blueprint $table) {
            $table->bigInteger('bird_id');
            $table->bigInteger('habitat_id');

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('habitat_id')->references('id')->on('habitats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bird_habitat');
    }
}
