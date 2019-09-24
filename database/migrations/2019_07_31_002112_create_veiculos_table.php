<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVeiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('placa', 10);
            $table->string('tipo', 10);
            $table->string('marca', 10);
            $table->string('modelo', 10);
            $table->integer('peso');
            $table->integer('ano'); 
            $table->bigInteger('transporte_id')->unsigned();
            $table->timestamps();

            $table->foreign('transporte_id')->references('id')->on('transportes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veiculos');
    }
}
