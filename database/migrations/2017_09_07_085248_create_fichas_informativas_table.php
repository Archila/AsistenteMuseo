<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasInformativasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas_informativas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('historia',800);
            $table->string('multimedia',500);
            $table->string('epoca',50);
            $table->string('pieza');
            $table->foreign('pieza')->references('cod_pieza')->on('piezas');
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
        Schema::dropIfExists('fichas_informativas');
    }
}
