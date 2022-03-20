<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachersens', function (Blueprint $table) {
            $table->id();
            $table->string('TS1');
            $table->string('TS2');
            $table->string('TS3');
            $table->string('TS4');
            $table->string('TS5');
            $table->string('TS6');
            $table->string('TS7');
            $table->string('TS8');
            $table->string('TS9');
            $table->string('TS10');
            $table->string('TS11');
            $table->string('TS12');
            $table->string('TS13');
            $table->string('TS14');
            $table->string('TS15');
            $table->string('TS16');
            $table->string('TS17');
            $table->string('TS18');
            $table->string('TS19');
            $table->string('TS20');
            $table->string('TS21');
            $table->string('TS22');
            $table->string('TS23');
            $table->string('TS24');
            $table->string('TS25');
            $table->string('TS26');
            $table->string('TS27');
            $table->string('TS28');
            $table->string('TS29');
            $table->string('TS30');
            $table->string('TS31');
            $table->string('TS32');
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
        Schema::dropIfExists('teachersens');
    }
}
