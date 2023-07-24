<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadoscarrerasTable extends Migration
{
    public function up()
    {
        Schema::create('empleadoscarreras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_empleado');
            $table->foreign('id_empleado')->references('id')->on('empleados')->onDelete('cascade');
            $table->unsignedBigInteger('id_carrera');
            $table->foreign('id_carrera')->references('id')->on('carreras')->onDelete('cascade');
            $table->unsignedBigInteger('id_periodo');
            $table->foreign('id_periodo')->references('id')->on('periodos')->onDelete('cascade');
            $table->date('fecha');
            $table->string('usuariomodifica');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('empleadocarreras');
    }
}
