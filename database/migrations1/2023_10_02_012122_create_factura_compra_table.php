<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura_compra', function (Blueprint $table) {
            $table->increments('ID_FACT_COMPRA');
            $table->date('FECHA_FACTURA');
            $table->decimal('VALOR_FACTURA', 10, 0);
            $table->decimal('IVA_FACTURA', 10, 0);
            $table->integer('CANT_COMPRA');
            $table->decimal('SUBTOTAL_COMPRA', 10, 0);
            $table->bigInteger('ID_EMPLEADO_FK_FACTURA_COMPRA')->index('ID_EMPLEADO_FK_FACTURA_COMPRA');
            $table->bigInteger('ID_PROVEEDOR_FK_COMPRA')->index('ID_PROVEEDOR_FK_COMPRA');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura_compra');
    }
}
