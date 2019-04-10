<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('birds', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name')->unique();
            $table->string('name_de')->nullable();
            $table->string('name_fr')->nullable();
            $table->string('name_it')->nullable();

            $table->enum('gender_de', ['m', 's', 'w'])->nullable();

            $table->text('description_de')->nullable();
            $table->text('description_fr')->nullable();
            $table->text('description_it')->nullable();

            $table->boolean('garden');

            $table->integer('singing_xeno_canto_id')->unique()->nullable();

            $table->unsignedInteger('family_id')->nullable();
            $table->unsignedInteger('order_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('family_id')->references('id')->on('families');
            $table->foreign('order_id')->references('id')->on('orders');
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

        Schema::dropIfExists('birds');

        Schema::enableForeignKeyConstraints();
    }
}
