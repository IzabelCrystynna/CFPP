<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /**Migração da compra_produtos, que relaciona a tabela compra com a de produto*/
    /**Nessa migração determina os campos da tabela compra_produtos e o tipo de cada campo*/
    public function up()
    {
        Schema::create('compra_produtos', function (Blueprint $table) {
            $table->id();
            $table->double('valor_unidade', 8, 2);
            $table->bigInteger('quantidade');
            /**Definição da chave estrangeira de produto*/
            $table->UnsignedBigInteger('produto_id');
            $table->foreign('produto_id')
                  ->references('id')
                  ->on('produtos')->onDelete('cascade'); // O método cascade excluir tudo correspondente a esse campo

            /**Definição da chave estrangeira de compra*/
            $table->UnsignedBigInteger('compra_id');
            $table->foreign('compra_id')
                  ->references('id')
                  ->on('compras')->onDelete('cascade'); // O método cascade excluir tudo correspondente a esse campo
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
        Schema::dropIfExists('compra_produtos');
    }
}
