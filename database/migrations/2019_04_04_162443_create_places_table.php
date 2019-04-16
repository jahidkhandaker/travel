<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->bigIncrements('pId');
            $table->string('pName',20);
            $table->string('pCity',20);
            $table->string('pDistrict',20);
            $table->string('pDescription',200);
            $table->string('pAbout1',100);
            $table->string('pAbout2',100);
            $table->binary('pImg');
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
        Schema::dropIfExists('places');
    }
}
