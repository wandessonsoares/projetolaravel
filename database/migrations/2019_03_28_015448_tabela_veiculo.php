<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaVeiculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo', function(Blueprint $tabela){
            $tabela->increments('id');
            $tabela->string('nome', 50);
            $tabela->string('marca', 50);
            $tabela->string('modelo', 50);
            $tabela->string('tipo', 1)->nullable();
            $tabela->string('potencia', 10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('veiculo');
    }
}
