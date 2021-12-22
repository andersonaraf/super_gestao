<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 50)->comment('NOME DA PESSOA QUE ENTROU EM CONTATO');
            $table->string('telefone', 20)->comment('TELEFONE DA PESSOA');
            $table->string('email', 80)->comment('EMAIL DA PESSOA');
            $table->integer('motivo_contato')->comment('INDEX COM O MOTIVO DO CONTATO, UMA CONSTATE NO CÓDIGO');
            $table->text('mensagem')->comment('MENSAGEM DO CONTATO');
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
        Schema::dropIfExists('site_contatos');
    }
}
