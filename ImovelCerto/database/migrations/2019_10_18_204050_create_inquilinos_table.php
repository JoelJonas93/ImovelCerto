<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquilinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquilinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_inquilino', 50);
            $table->string('cpf_inquilino', 14)->unique();
            $table->string('fone_res', 14)->nullable();
            $table->string('fone_cel', 15);
            $table->string('endereco', 50);
            $table->string('bairro', 30);
            $table->string('cep', 10);
            $table->string('cidade', 50);
            $table->char('uf', 2);
            $table->string('email_inquilino', 50)->nullable();
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
        Schema::dropIfExists('inquilinos');
    }
}
