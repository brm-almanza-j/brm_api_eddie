<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtbFranjaHoraria extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_franja_horaria', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha');
            $table->string('franja_horaria', 45);
            $table->time('hora_inicio');
            $table->time('hora_fin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_franja_horaria');
    }
}
