<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    /**Migração do cliente*/
    /**Nessa migração determina os campos da tabela cliente e o tipo de cada campo*/
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->char('rua', 50);
            $table->bigInteger('numero_casa');
            $table->char('bairro', 50);
            $table->string('cidade');
            $table->string('UF');
            $table->char('CPF', 11);
            $table->char('telefone', 9);
            $table->double('renda', 8, 2);
            /**Definição da chave estrangeira de usuário*/
            $table->UnsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')->onDelete('cascade'); // O método cascade excluir tudo correspondente a esse campo
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
        Schema::dropIfExists('clientes');
    }
}
