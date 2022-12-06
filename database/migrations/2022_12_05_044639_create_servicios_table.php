<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->id();
            
            $table->string('Cliente');
            $table->string('Nombre_servicio');
            $table->string('Estado');
            $table->string('Numero_servicio');
            $table->date('Fecha_recepcion');
            $table->longText('Caacteristicas');
            $table->longText('Descripcion_daño');
            $table->float('Costo_aprx',8,2);
            $table->float('Acuenta',8,2);



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
        Schema::dropIfExists('servicios');
    }
}
