<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('profesional_id');
            $table->foreign('profesional_id')->references('id')->on('profesionales');
            $table->unsignedInteger('dia_id')->nullable();
            $table->foreign('dia_id')->references('id')->on('dias');
            $table->time('hora_desde');
            $table->time('hora_hasta');
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
        Schema::dropIfExists('horarios');
    }
}
