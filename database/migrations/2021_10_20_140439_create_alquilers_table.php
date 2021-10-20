<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_entrada");
            $table->date("fecha_salida");
            $table->integer("costo_total");
            $table->text("observacion");
            $table->unsignedBigInteger("fkHabitacion");
            $table->unsignedBigInteger("fkCliente");
            $table->unsignedBigInteger("fkRegistrador");
            $table->unsignedBigInteger("fkEstado");
            $table->timestamps();
            $table->foreign("fkHabitacion")->references("id")->on("habitacions");
            $table->foreign("fkCliente")->references("id")->on("clientes");
            $table->foreign("fkRegistrador")->references("id")->on("registradors");
            $table->foreign("fkEstado")->references("id")->on("estados");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquilers');
    }
}
