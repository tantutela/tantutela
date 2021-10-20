<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoHabitacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_habitacions', function (Blueprint $table) {
            $table->id();
            $table->integer("numero");
            $table->text("estado");
            $table->integer("costo");
            $table->text("descripcion");
            $table->unsignedBigInteger("fkTipo");
            $table->timestamps();
            $table->foreign("fkTipo")->references("id")->on("tipo_habitacions");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_habitacions');
    }
}
