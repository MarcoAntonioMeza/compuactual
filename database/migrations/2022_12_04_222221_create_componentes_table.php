<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('componentes', function (Blueprint $table) {
            $table->id();

            $table->string('Nombre');
            $table->longText('Descripcion');
            $table->float('Costo',8,2);
            $table->string('Proveedor');
            $table->integer('Cantidad');
            $table->string('Numero_serie');//
            $table->string('Garantia');//

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('componentes');
    }
}
