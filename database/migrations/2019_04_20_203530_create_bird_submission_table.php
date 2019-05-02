<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBirdSubmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bird_submission', function (Blueprint $table) {
            $table->unsignedInteger('bird_id');
            $table->unsignedInteger('submission_id');

            $table->integer('quantity')->default(0);

            $table->foreign('bird_id')->references('id')->on('birds');
            $table->foreign('submission_id')->references('id')->on('submissions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bird_submission');
    }
}
