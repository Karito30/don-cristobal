<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reporte', function (Blueprint $table) {
            $table->increments('ID_REPORTE');
            $table->date('FECHA_REPORTE');
            $table->string('TIPO_REPORTE', 45);
            $table->bigInteger('ID_PRODUCTO_FK_REPORTE')->index('ID_PRODUCTO_FK_REPORTE');
            $table->bigInteger('ID_RECIBO_FK_REPORTE')->index('ID_RECIBO_FK_REPORTE');
            $table->bigInteger('ID_FACT_COMPRA_FK_REPORTE')->index('ID_FACT_COMPRA_FK_REPORTE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reporte');
    }
}
