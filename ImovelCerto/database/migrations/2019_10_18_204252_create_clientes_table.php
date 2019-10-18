<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_cliente', 50);
            $table->string('cpf_cliente', 14)->unique();
            $table->string('fone_res_cliente', 14)->nullable();
            $table->string('fone_cel_cliente', 15);
            $table->string('endereco_cliente', 50);
            $table->string('bairro_cliente', 30);
            $table->string('cep_cliente', 10);
            $table->string('cidade_cliente', 50);
            $table->char('uf_cliente', 2);
            $table->string('email_cliente', 50)->nullable();
            $table->date('dt_nasc_cliente');
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
        Schema::dropIfExists('clientes');
    }
}
