<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->unsignedInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->text('calle_principal');
            $table->text('calle_secundaria')->nullable();
            $table->string('numero',10)->nullable();
            $table->text('referencias')->nullable();
            $table->text('latitud')->nullable();
            $table->text('longitud')->nullable();
            $table->boolean('es_principal');
            $table->text('barrio')->nullable();
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
        Schema::dropIfExists('direcciones');
    }
}
