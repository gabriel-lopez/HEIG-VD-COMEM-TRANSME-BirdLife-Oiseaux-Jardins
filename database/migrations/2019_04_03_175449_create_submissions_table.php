<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('submissions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->date('birthday');

            $table->boolean('newsletter')->default(false);
            $table->boolean('newmember')->default(false);
            $table->boolean('order')->default(false);

            $table->date('observation_day');
            $table->time('observation_time');
            $table->integer('observation_npa');
            $table->string('observation_city');

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

        Schema::dropIfExists('submissions');

        Schema::enableForeignKeyConstraints();
    }
}
