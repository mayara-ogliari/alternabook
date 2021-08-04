<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo_resumo', 50)->notNullable();
            $table->unsignedBigInteger('id_usuario')->notNullable();
            $table->unsignedBigInteger('id_livro')->notNullable();
            $table->longText('resumo')->notNullable();
            $table->foreign('id_usuario')->references('id')->on('usuario');
            $table->foreign('id_livro')->references('id')->on('livro');
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
        Schema::dropIfExists('resumo');
    }
}
