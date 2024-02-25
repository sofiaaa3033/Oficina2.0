<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**Classe de migração para criar a tabela "orcamento". */
class CreateOrcamentoTable extends Migration
{
    /**
     * Executa as migrações.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamento', function (Blueprint $table) { 
            $table->id();
            $table-> string('cliente', 100);
            $table->string('vendedor',100);
            $table->bigInteger('valor');
            $table-> text('descricao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverte as migrações para excluir a tabela "orcamento".
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orcamento');
    }
}
