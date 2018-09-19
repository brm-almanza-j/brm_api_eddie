<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtbUsuarioDetalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_usuario_detalle', function (Blueprint $table) {
            $table->integer('id_usuario');
            $table->integer('id_area');
            $table->integer('id_ciudad');
            $table->integer('id_grupo');
            $table->integer('id_perfil');
            $table->integer('id_franja_horaria');
            $table->integer('id_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_usuario_detalle');
    }
}
