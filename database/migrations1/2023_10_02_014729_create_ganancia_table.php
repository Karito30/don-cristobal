<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGananciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ganancia', function (Blueprint $table) {
            $table->increments('ID_GANANCIA');
            $table->decimal('INGRESOS', 10, 0);
            $table->decimal('GASTOS', 10, 0);
            $table->decimal('GANANCIAS', 10, 0);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ganancia');
    }
}
