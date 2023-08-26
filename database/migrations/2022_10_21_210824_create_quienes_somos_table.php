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
        Schema::create('quienes_somos', function (Blueprint $table) {
            $table->increments('id_quienes_somos');
            $table->string('titulo',200);
            $table->string('biografia',1000);
            $table->string('imagen',400);
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
        Schema::dropIfExists('quienes_somos');
    }
};
