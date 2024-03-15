<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('ID_USUARIO');
            $table->string('PRIMER_NOM_USUARIO', 30);
            $table->string('SEGUNDO_NOMBRE_USUARIO', 30)->nullable();
            $table->string('PRIMER_APELLIDO_USUARIO', 30);
            $table->string('SEGUNDO_APELLIDO_USUARIO', 30);
            $table->string('EMAIL_USUARIO', 45);
            $table->bigInteger('TELEFONO_USUARIO');
            $table->string('CONT_USUARIO', 35);
            $table->bigInteger('ID_EMPLEADO_FK_USUARIO')->index('ID_EMPLEADO_FK_USUARIO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
