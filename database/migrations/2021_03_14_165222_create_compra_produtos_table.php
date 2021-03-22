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
    public function up()
    {
        Schema::create('compra_produtos', function (Blueprint $table) {
            $table->id();
            $table->double('valor_unidade', 8, 2);
            $table->bigInteger('quantidade');
            $table->UnsignedBigInteger('produto_id');
            $table->foreign('produto_id')
                  ->references('id')
                  ->on('produtos')->onDelete('cascade');
            $table->UnsignedBigInteger('compra_id');
            $table->foreign('compra_id')
                  ->references('id')
                  ->on('compras')->onDelete('cascade');
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
