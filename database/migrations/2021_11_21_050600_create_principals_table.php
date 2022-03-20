<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrincipalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principals', function (Blueprint $table) {
            $table->id();
            $table->string('P1');
            $table->string('P2');
            $table->string('P3');
            $table->string('P4');
            $table->string('P5');
            $table->string('P6');
            $table->string('P7');
            $table->string('P8');
            $table->string('P9');
            $table->string('P10');
            $table->string('P11');
            $table->string('P12');
            $table->string('P13');
            $table->string('P14');
            $table->string('P15');
            $table->string('P16');
            $table->string('P17');
            $table->string('P18');
            $table->string('P19');
            $table->string('P20');
            $table->string('P21');
            $table->string('P22');
            $table->string('P23');
            $table->string('P24');
            $table->string('P25');
            $table->string('P26');
            $table->string('P27');
            $table->string('P28');
            $table->string('P29');
            $table->string('P30');
            $table->string('P31');
            $table->string('P32');
            $table->string('P33');
            $table->string('P34');
            $table->string('P35');
            $table->string('P36');
            $table->string('P37');
            $table->string('P38');
            $table->string('P39');
            $table->string('P40');
            $table->string('P41');
            $table->string('P42');
            $table->string('P43');
            $table->string('P44');
            $table->string('P45');
            $table->string('P46');
            $table->string('P47');
            $table->string('P48');
            $table->string('P49');
            $table->string('P50');
            $table->string('P51');
            $table->string('P52');
            $table->string('P53');
            $table->string('P54');
            $table->string('P55');
            $table->string('P56');
            $table->string('P57');
            $table->string('P58');
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
        Schema::dropIfExists('principals');
    }
}
