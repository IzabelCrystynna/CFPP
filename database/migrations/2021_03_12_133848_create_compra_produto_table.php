<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraProdutoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_produto', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger('produto_id');
            $table->foreign('produto_id')
                  ->references('id')
                  ->on('produtos');
            $table->UnsignedBigInteger('compra_id');
            $table->foreign('compra_id')
                  ->references('id')
                  ->on('compras');
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
        Schema::dropIfExists('compra_produto');
    }
}
