<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProprietariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',50);
            $table->string('cpf',14);
            $table->string('email',50);
            $table->date('data_nascimento');
            $table->string('fone_cel',15);
            $table->string('fone_res',14);
            $table->string('endereco',50);
            $table->string('cep',10);
            $table->string('uf');
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
        Schema::dropIfExists('proprietarios');
    }
}
