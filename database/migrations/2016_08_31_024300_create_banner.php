<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBanner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create Banner
        // Tabela produtos
        Schema::create('banner', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descricao_banner');
            $table->string('valor_banner');
            $table->string('image_banner');
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
