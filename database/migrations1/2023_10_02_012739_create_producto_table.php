<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('ID_PRODUCTO');
            $table->string('NOM_PRODUCTO', 30);
            $table->decimal('VALOR_PRODUCTO', 10, 0);
            $table->string('CATEGORIA_PRODUCTO', 50);
            $table->integer('CANT_PRODUCTO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
