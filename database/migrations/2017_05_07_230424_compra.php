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
        $table->increments('idCompra');
        $table->boolean('fecha');
        $table->boolean('monto');
        $table->integer('mesa_id')->unsigned();
        $table->foreign('mesa_id')->references('idMesa')->on('mesa');
        $table->integer('producto_id')->unsigned();
        $table->foreign('preducto_id')->references('idProducto')->on('producto');
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
