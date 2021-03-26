<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('cname');
            $table->string('flightid');
            $table->string('flyfrom');
            $table->string('flyto');
            $table->string('dtime');
            $table->string('atime');
            $table->integer('eseat');
            $table->integer('bseat');
            $table->integer('fseat');
            $table->string('date');
            $table->integer('ecost');
            $table->integer('bcost');
            $table->integer('fcost');

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
        Schema::dropIfExists('flights');
    }
}
