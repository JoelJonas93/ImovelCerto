@extends('adminlte::page')

@section('title', 'ImovelCerto')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i>Inclusão de Corretores</h1>
@stop

@section('content')
    <div class="panel panel-default">

      <div class="panel-heading">
        <i class="fas fa-fx fa-user">Tela de cadastramento de corretor</i>
      </div>

      <div class="panel-body">
        <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <label for="nome_corretor">Nome do Corretor <span class="text-red">*
            </span></label>
            <input type="text" name="nome" id="nome" class="form-control">
          </div>

          <div class="form-group">
            <label for="creci">Nº do CRECI <span class="text-red">*
            </span></label>
            <input type="text" name="creci" id="creci" class="form-control">
          </div>

          <div class="form-group">
            <label for="fone">Nº do Telefone </label>
            <input type="text" name="fone" id="fone" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">E-mail <span class="text-red">*
            </span></label>
            <input type="text" name="emial" id="email" class="form-control">
          </div>
          <!-- falta colocar os botões-->
        </form>     
      </div>   
    
    </div>
@stop

@section('css')
  
@stop

@section('js')
    
@stop