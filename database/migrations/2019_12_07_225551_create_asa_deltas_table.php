<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsaDeltasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asa_deltas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('validade_manutencao');
            // $table->unsignedBigInteger('tipo_asa_deltas_id');
            // $table->foreign('tipo_asa_deltas_id')->references('id')->on('tipo_asa_deltas');
            $table->unsignedBigInteger('fabricante_id');
            $table->foreign('fabricante_id')->references('id')->on('fabricantes');
            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelo_asa_deltas');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('asa_deltas');
    }
}
