<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('TG1');
            $table->string('TG2');
            $table->string('TG3');
            $table->string('TG4');
            $table->string('TG5');
            $table->string('TG6');
            $table->string('TG7');
            $table->string('TG8');
            $table->string('TG9');
            $table->string('TG10');
            $table->string('TG11');
            $table->string('TG12');
            $table->string('TG13');
            $table->string('TG14');
            $table->string('TG15');
            $table->string('TG16');
            $table->string('TG17');
            $table->string('TG18');
            $table->string('TG19');
            $table->string('TG20');
            $table->string('TG21');
            $table->string('TG22');
            $table->string('TG23');
            $table->string('TG24');
            $table->string('TG25');
            $table->string('TG26');
            $table->string('TG27');
            $table->string('TG28');
            $table->string('TG29');
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
        Schema::dropIfExists('teachers');
    }
}
