@extends('adminlte::page')

@section('title', 'ImovelCerto')

@section('content_header')
    <h1><i class="fas fa-fx fa-user"></i>Edição dos dados do Corretor</h1>
@stop

@section('content')
<form action="{{route('corretores.update',$corretor->id)}}" method="post" enctype="multipart/form-data">
    <div class="panel panel-default">

      <div class="panel-heading">
        <i class="fas fa-fx fa-user"></i>Tela de alteração de dados
      </div>

      <div class="panel-body">
        {{csrf_field()}}

          <div class="row">
            <div class="form-group col-md-6">
              <label for="nome_corretor">Nome do Corretor <span class="text-red">*
              </span></label>
              <input type="text" name="nome" id="nome" class="form-control" required value="{{$corretor->nome_corretor}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-2">
              <label for="creci">Nº do CRECI <span class="text-red">*
              </span></label>
              <input type="text" name="creci" id="creci" class="form-control" required value="{{$corretor->creci}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-3">
              <label for="fone">Nº do Telefone </label>
              <input type="tel" name="fone" id="fone" class="form-control" required value="{{$corretor->fone}}">
            </div>
          </div>
          
          <div class="row">
            <div class="form-group col-md-4">
              <label for="email">E-mail <span class="text-red">*
              </span></label>
              <input type="email" name="emial" id="email" class="form-control" required value="{{$corretor->email}}">
            </div>
          </div>
                    
            
      </div>  
      <div class="panel-footer">
         <a href="{{route('corretores.index')}}" class="btn btn-default"><i class="fas fa-reply"></i> Voltar</a>
          <button type="submit" class="btn btn-success">
            <i class="fas fa-save"></i> Salvar
          </button>      
      </div>     
    </div>
  </form> 
@stop

@section('css')
  
@stop

@section('js')
    
@stop