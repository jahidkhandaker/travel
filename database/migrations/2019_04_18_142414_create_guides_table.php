<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guides', function (Blueprint $table) {
            $table->bigIncrements('gId');
            $table->string('gName',20);
            $table->string('gAddress',20);
            $table->unsignedBigInteger('gpId');
            $table->foreign('gpId')->references('pId')->on('places');
            $table->string('gDescription',200);
            $table->string('gContact',30);
            $table->binary('gImg');
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
        Schema::dropIfExists('guides');
    }
}
