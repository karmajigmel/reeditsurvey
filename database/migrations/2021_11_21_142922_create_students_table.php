<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('S1');
            $table->string('S2');
            $table->string('S3');
            $table->string('S4');
            $table->string('S5');
            $table->string('S6');
            $table->string('S7');
            $table->string('S8');
            $table->string('S9');
            $table->string('S10');
            $table->string('S11');
            $table->string('S12');
            $table->string('S13');
            $table->string('S14');
            $table->string('S15');
            $table->string('S16');
            $table->string('S17');
            $table->string('S18')->nullable();
            $table->string('S19')->nullable();
            $table->string('S20')->nullable();
            $table->string('S21')->nullable();
            $table->string('S22')->nullable();
            $table->string('S23')->nullable();
            $table->string('S24');
            $table->string('S25');
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
        Schema::dropIfExists('students');
    }
}
