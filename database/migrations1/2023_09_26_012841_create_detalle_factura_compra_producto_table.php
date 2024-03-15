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
        Schema::create('detalle_factura_compra_producto', function (Blueprint $table) {
            $table->bigInteger('ID_DETALLE_FCP');
            $table->bigInteger('ID_FACT_COMPRA_FK_DETALLE_COMPRA')->index('ID_FACT_COMPRA_FK_DETALLE_COMPRA');
            $table->bigInteger('ID_PRODUCTO_FK_DETALLE_COMPRA')->index('ID_PRODUCTO_FK_DETALLE_COMPRA');

            $table->primary(['ID_DETALLE_FCP', 'ID_FACT_COMPRA_FK_DETALLE_COMPRA', 'ID_PRODUCTO_FK_DETALLE_COMPRA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura_compra_producto');
    }
};
