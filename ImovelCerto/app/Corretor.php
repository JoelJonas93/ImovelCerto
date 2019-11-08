<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corretor extends Model
{
    //para saber qual a tabela do banco o model irá representar
    protected $table="corretores";

    protected $fillable = [
        'nome_corretor',
        'creci',
        'fone',
        'email',
    ];
}
