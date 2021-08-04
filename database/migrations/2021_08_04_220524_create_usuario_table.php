<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_usuario', 50)->notNullable();
            $table->date('data_nascimento', 30)->notNullable();
            $table->enum('sexo', ['M', 'F', 'N'])->notNullable();
            $table->string('email', 50)->unique()->notNullable();
            $table->string('senha', 50)->notNullable();
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
        Schema::dropIfExists('usuario');
    }
}
