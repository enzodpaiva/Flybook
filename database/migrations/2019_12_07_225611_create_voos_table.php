<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data');
            $table->string('distancia');
            $table->string('altura');
            $table->string('direcao_vento');
            $table->string('status')->default('aguardando aprovação do instrutor');
            $table->string('lift');
            $table->string('termais');
            $table->string('visibilidade');
            $table->time('inicio');
            $table->time('fim');
            $table->string('velocidade_vento');
            $table->unsignedBigInteger('rampa_id');
            $table->foreign('rampa_id')->references('id')->on('rampas');
            $table->unsignedBigInteger('asaDelta_id');
            $table->foreign('asaDelta_id')->references('id')->on('asa_deltas');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('instrutor_id');
            $table->foreign('instrutor_id')->references('id')->on('instrutors');
            $table->text('observacoes')->nullable();
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
        Schema::dropIfExists('voos');
    }
}
