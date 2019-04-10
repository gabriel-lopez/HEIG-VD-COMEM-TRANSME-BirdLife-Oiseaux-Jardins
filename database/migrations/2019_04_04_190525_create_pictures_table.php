<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePicturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');

            $table->string('filename')->unique();
            $table->text('caption')->nullable();
            $table->text('author');
            $table->text('website')->nullable();

            $table->unsignedInteger('bird_id')->nullable();

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('bird_id')->references('id')->on('birds');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pictures');
    }
}
