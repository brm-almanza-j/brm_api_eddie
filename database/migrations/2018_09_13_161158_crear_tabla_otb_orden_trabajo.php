<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtbOrdenTrabajo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_orden_trabajo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificador');
            $table->timestamp('fecha');
            $table->tinyInteger('id_estado');
            $table->string('titulo', 45);
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('id_cliente');
            $table->integer('id_marca');
            $table->integer('id_grupo');
            $table->integer('id_tipo_ot');
            $table->time('tiempo_asignado');
            $table->integer('id_usuario_crea');
            $table->integer('id_franja_horaria');
            $table->time('tiempo_gastado');
            $table->text('url_archivos');
            $table->date('fecha_cierre');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_orden_trabajo');
    }
}
