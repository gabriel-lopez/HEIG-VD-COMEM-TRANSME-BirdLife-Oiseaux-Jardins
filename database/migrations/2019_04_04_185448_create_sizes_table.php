<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('sizes', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name_de')->unique();
            $table->string('name_fr')->nullable();
            $table->string('name_it')->nullable();

            $table->integer('order')->unique();

            $table->timestamps();
            $table->softDeletes();
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

        Schema::dropIfExists('sizes');

        Schema::enableForeignKeyConstraints();
    }
}
