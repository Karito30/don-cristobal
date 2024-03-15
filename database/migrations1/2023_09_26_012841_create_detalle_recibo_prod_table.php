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
        Schema::create('detalle_recibo_prod', function (Blueprint $table) {
            $table->bigInteger('ID_DETALLE_FVP');
            $table->bigInteger('ID_RECIBO_FK_DETALLE_PROD')->index('ID_RECIBO_FK_DETALLE_PROD');
            $table->bigInteger('ID_PRODUCTO_FK_DETALLE_VENTA')->index('ID_PRODUCTO_FK_DETALLE_VENTA');

            $table->primary(['ID_DETALLE_FVP', 'ID_RECIBO_FK_DETALLE_PROD', 'ID_PRODUCTO_FK_DETALLE_VENTA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_recibo_prod');
    }
};
