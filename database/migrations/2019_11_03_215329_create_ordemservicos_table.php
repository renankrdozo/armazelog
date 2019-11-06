<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemservicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordemservicos', function (Blueprint $table) {
            $table->time('hora');
            $table->date('data');
            $table->string('naturezacarga');
            $table->decimal('valortotal');
            $table->string('status');
            $table->bigInteger('entrada_id')->unsigned();
            $table->timestamps();
            $table->foreign('entrada_id')->references('id')->on('entradas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordemservicos');
    }
}
