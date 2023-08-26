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
        Schema::create('reservacion_habitacion', function (Blueprint $table) {
            $table->increments('id_reservacion_habitacion');
            $table->string('tipo_habitacion',100);
            $table->string('descripcion',1000);
            $table->string('imagen',1000);
            $table->string('servicios',2000);
            $table->integer('id_tarifas')->unsigned();
            $table->foreign('id_tarifas')->references('id_tarifas')->on('tarifas_habitacion');
            $table->double('precio_efectivo',8,2);
            $table->double('precio_targeta',8,2);
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
        Schema::dropIfExists('reservacion_habitacion');
    }
};
