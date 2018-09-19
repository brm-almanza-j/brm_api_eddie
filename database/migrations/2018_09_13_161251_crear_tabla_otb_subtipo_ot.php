<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtbSubtipoOt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_subtipo_ot', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha');
            $table->string('subtipo', 45);
            $table->integer('id_tipos_ot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_subtipo_ot');
    }
}
