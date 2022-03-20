<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyquestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveyquestions', function (Blueprint $table) {
            $table->id();
            $table->string('respondent_id');
            $table->string('question_no')->nullable();
            $table->text('item_details')->nullable();
            $table->text('response')->nullable();
            $table->string('response_type')->nullable();
            $table->string('item_no')->nullable();
            $table->string('mandatory')->nullable();
            $table->string('respondent_sub_category')->nullable();
            $table->string('respondent_sub_category_option')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveyquestions');
    }
}
