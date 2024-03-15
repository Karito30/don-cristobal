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
        Schema::create('proveedor', function (Blueprint $table) {
            $table->increments('ID_PROVEEDOR');
            $table->string('NOMBRE_PROVEEDOR', 50);
            $table->string('DIRECCION_PROVEEDOR', 50)->nullable();
            $table->bigInteger('TEL_PROVEEDOR');
            $table->bigInteger('ID_EMPLEADO_FK_PROVEEDOR')->index('ID_EMPLEADO_FK_PROVEEDOR');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedor');
    }
};
