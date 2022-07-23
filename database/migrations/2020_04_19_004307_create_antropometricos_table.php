<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntropometricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antropometricos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id')->unique();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->unsignedFloat('peso');
            $table->unsignedFloat('altura');
            $table->unsignedFloat('indice')->nullable();
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
        Schema::dropIfExists('antropometricos');
    }
}
