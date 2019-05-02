<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeatureSubmissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_submission', function (Blueprint $table) {
            $table->unsignedInteger('feature_id');
            $table->unsignedInteger('submission_id');

            $table->foreign('feature_id')->references('id')->on('features');
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
        Schema::dropIfExists('feature_submission');
    }
}
