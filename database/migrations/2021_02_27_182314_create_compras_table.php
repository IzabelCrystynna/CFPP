<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**Migração da compra*/
    /**Nessa migração determina os campos da tabela compra e o tipo de cada campo*/
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->boolean('finalizado');
            /**Definição da chave estrangeira de cliente*/
            $table->UnsignedBigInteger('cliente_id');
            $table->foreign('cliente_id')
                  ->references('id')
                  ->on('clientes')->onDelete('cascade'); // O método cascade excluir tudo correspondente a esse campo
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
        Schema::dropIfExists('compras');
    }
}
