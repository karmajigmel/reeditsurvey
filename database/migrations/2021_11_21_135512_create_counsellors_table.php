<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCounsellorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counsellors', function (Blueprint $table) {
            $table->id();
            $table->string('C1');
            $table->string('C2');
            $table->string('C3');
            $table->string('C4');
            $table->string('C5');
            $table->string('C6');
            $table->string('C7');
            $table->string('C8');
            $table->string('C9');
            $table->integer('C10');
            $table->integer('C11');
            $table->string('C12');
            $table->string('C13');
            $table->string('C14');
            $table->string('C15');
            $table->string('C16');
            $table->string('C17');
            $table->string('C18');
            $table->string('C19');
            $table->string('C20');
            $table->string('C21');
            $table->string('C22');
            $table->string('C23');
            $table->string('C24');
            $table->string('C25');
            $table->string('C26');
            $table->string('C27');
            $table->string('C28');
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
        Schema::dropIfExists('counsellors');
    }
}
