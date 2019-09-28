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
            $table->string('nome', 50);
            $table->string('cpf', 14)->unique();
            $table->string('fone_res', 14)->nullable();
            $table->string('fone_cel', 15);
            $table->string('endereco', 50);
            $table->string('bairro', 30);
            $table->string('cep', 10);
            $table->string('cidade', 50);
            $table->char('uf', 2);
            $table->string('email', 50);
            $table->date('dt_nasc');
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
