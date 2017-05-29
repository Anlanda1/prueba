<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pedido extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
        $table->increments('id');
        $table->string('estado');
        $table->integer('mesa_id')->unsigned();
        $table->foreign('mesa_id')->references('id')->on('mesa');
        $table->integer('empleado_id')->unsigned();
        $table->foreign('empleado_id')->references('id')->on('users');
        $table->integer('producto_id')->unsigned();
        $table->foreign('producto_id')->references('id')->on('producto');
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
