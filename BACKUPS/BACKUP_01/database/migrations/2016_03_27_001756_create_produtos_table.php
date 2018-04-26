<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Tabela produtos
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_prod');
            $table->string('valor_prod');
            $table->text('descricao_prod');
            $table->string('image_principal');
            $table->string('image_2');
            $table->string('image_3');
            $table->string('image_4');
            $table->integer('id_categoria')->unsigned();
            $table->foreign('id_categoria')->references('id')->on('categoria');
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
        //
    }
}
