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
        Schema::create('shider_imgs', function (Blueprint $table) {
            $table->increments('id_shider');
            $table->string('imagen',400);
            $table->string('titulo',100);
            $table->string('descripcion',250);
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
        Schema::dropIfExists('shider_imgs');
    }
};
