<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cName',100);
            $table->string('cMobile',100);
            $table->string('cEmail',100);
            $table->string('cAddress',100);
            $table->string('cQuantity',100);
            $table->string('rsHotel',100);
            $table->string('rsRoomtype',100);
            $table->string('rsRoomQuantity',100);
            $table->date('checkin');
            $table->date('checkout');
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
        Schema::dropIfExists('reservation');
    }
}
