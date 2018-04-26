<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrcamentoRapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // Tabela orcamentorap
      Schema::create('orcamentorap', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nome_cliente');
          $table->string('email');
          $table->integer('celular');
          $table->string('nome_prod');
          $table->longText('descricao');
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
