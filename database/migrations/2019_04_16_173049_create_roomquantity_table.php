<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomquantityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomquantity', function (Blueprint $table) {
            $table->bigIncrements('qId');
            $table->unsignedBigInteger('qhId');
            $table->foreign('qhId')->references('hId')->on('hotels');
            $table->unsignedBigInteger('qrId');
            $table->foreign('qrId')->references('rId')->on('roomtype');
            $table->string('qAmount',3);
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
        Schema::dropIfExists('roomquantity');
    }
}
