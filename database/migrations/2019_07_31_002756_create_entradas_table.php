<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entradas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('hora');
            $table->date('data');
            $table->string('mercadoria');
            $table->decimal('peso');
            $table->integer('quantidade'); 
            $table->string('nota_fiscal');
            $table->string('conhecimento');
            $table->bigInteger('veiculo_id')->unsigned();
            $table->bigInteger('unidade_id')->unsigned();
            $table->timestamps();
            
            $table->foreign('unidade_id')->references('id')->on('unidades');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entradas');
    }
}
