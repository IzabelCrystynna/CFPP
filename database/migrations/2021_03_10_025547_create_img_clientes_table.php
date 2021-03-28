<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**Migração para editar a tabela cliente e adiciona o campo de imagem*/
    public function up()
    {
        /**Nesse campo vai armazenar o enderenço da imagem do cliente*/
        Schema::table('clientes', function (Blueprint $table) {
            $table->string('img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropIfExists('img');
        });
    }
}
