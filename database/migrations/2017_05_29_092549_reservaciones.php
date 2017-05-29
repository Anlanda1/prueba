<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservacion', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horainicio');
            $table->time('horafin');
            $table->integer('npersonas');
            $table->integer('mesa_id')->unsigned();
            $table->foreign('mesa_id')->references('id')->on('mesa');
            $table->integer('empleado_id')->unsigned();
            $table->foreign('empleado_id')->references('id')->on('users');
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
        //
    }
}
