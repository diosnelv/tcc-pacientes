<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanesComidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes_comidas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('planes');
            $table->unsignedInteger('comida_id');
            $table->foreign('comida_id')->references('id')->on('comidas');
            $table->time('horario');
            $table->unsignedInteger('dia_id')->nullable();
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->unsignedInteger('tipo_id')->nullable();
            $table->foreign('tipo_id')->references('id')->on('comidas_tipos');
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
        Schema::dropIfExists('planes_comidas');
    }
}
