<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otb_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('fecha');
            $table->string('nombre', 45);
            $table->string('usuario', 10);
            $table->string('contrasena', 100);
            $table->string('correo', 45);
            $table->tinyInteger('priv_admin');
            $table->tinyInteger('activo');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('otb_usuario');
    }
}
