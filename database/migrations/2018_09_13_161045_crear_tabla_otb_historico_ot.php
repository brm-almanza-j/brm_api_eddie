<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtbHistoricoOt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_historico_ot', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha');
            $table->tinyInteger('id_estado');
            $table->text('comentario');
            $table->time('tiempo_gastado');
            $table->text('url');
            $table->integer('id_orden_trabajo');
            $table->integer('id_usuario_comenta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_historico_ot');
    }
}
