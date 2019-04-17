<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->bigIncrements('hId');
            $table->string('hName',20);
            $table->string('hCity',20);
            $table->string('hDistrict',20);
            $table->unsignedBigInteger('hpId');
            $table->foreign('hpId')->references('pId')->on('places');
            $table->string('hDescription',200);
            $table->string('hContact',30);
            $table->string('hAbout2',100);
            $table->binary('hImg');
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
        Schema::dropIfExists('hotels');
    }
}
