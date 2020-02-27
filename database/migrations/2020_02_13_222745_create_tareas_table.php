<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tarea',255);
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('descripcion');
            $table->unsignedInteger('categoria_id')->nullable();
            $table->smallInteger('prioridad')->unsigned();
            $table->string('estatus')->nullable();
            $table->boolean('terminado')->default(false);
            $table->unsignedInteger('user_id')->nullable();
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
        Schema::dropIfExists('tareas');
    }
}
