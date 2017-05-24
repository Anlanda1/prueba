<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Compra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('compra', function (Blueprint $table) {
        $table->increments('id');
        $table->datetime('fecha');
        $table->float('monto');
        $table->integer('mesa_id')->unsigned();
        $table->foreign('mesa_id')->references('id')->on('mesa');
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
