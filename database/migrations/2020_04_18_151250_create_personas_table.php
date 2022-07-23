<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('nacionalidad_id')->nullable();
            $table->foreign('nacionalidad_id')->references('id')->on('paises');
            $table->string('nombre',150);
            $table->string('apellido',150);
            $table->string('sexo',1);
            $table->string('telefono',20)->nullable();
            $table->string('documento',20);
            $table->date('fecha_nacimiento')->nullable();
            $table->text('foto')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
