<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLivroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('livro', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('imagem_capa')->nullable();
            $table->string('titulo_livro', 50)->notNullable();
            $table->string('titulo_original', 50)->nullable();
            $table->string('idioma_livro', 20)->notNullable();
            $table->unsignedBigInteger('id_editora')->notNullable();
            $table->unsignedBigInteger('id_autor')->notNullable();
            $table->foreign('id_editora')->references('id')->on('editora');
            $table->foreign('id_autor')->references('id')->on('autor');
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
        Schema::dropIfExists('livro');
    }
}
