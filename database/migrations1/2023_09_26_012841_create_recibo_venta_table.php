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
        Schema::create('recibo_venta', function (Blueprint $table) {
            $table->increments('ID_RECIBO');
            $table->date('FECHA_RECIBO');
            $table->decimal('VALOR_RECIBO', 10, 0);
            $table->decimal('IVA_RECIBO', 10, 0);
            $table->integer('CANT_RECIBO');
            $table->integer('MESA')->nullable();
            $table->bigInteger('ID_EMPLEADO_FK_VENTA')->index('ID_EMPLEADO_FK_VENTA');
            $table->bigInteger('ID_PRODUCTO_FK_VENTA')->index('ID_PRODUCTO_FK_VENTA');
            $table->bigInteger('ID_CLIENTE_FK_VENTA')->index('ID_CLIENTE_FK_VENTA');
            $table->bigInteger('ID_METODO_PAGO_FK_VENTA')->index('ID_METODO_PAGO_FK_VENTA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recibo_venta');
    }
};
