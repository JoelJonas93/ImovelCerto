@extends('adminlte::page')

@section('title', 'Lista de Corretores')

@section('content_header')
    <h1><i class="fas fa-bars"></i> Listar Corretores</h1>
@stop

@section('content')
    <div class="panel panel-default">

        <div class="panel-heading clearfix">
            Relação dos corretores
            <div class="pull-right">
                <a href="{{ route('corretores.index') }}" class="btn btn-info"><i class="fas fa-sync"></i> Atualizar a tela</a>
                <a href="{{ route('corretores.create') }}" class="btn btn-sucess"><i class="fas fa-plus"></i> Inserir um novo registro</a>
            </div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nome do Corretor</td>
                        <td>E-Mail</td>
                        <td>Ações</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($corretores as $corretor)
                        <tr>
                            <td>{{ $corretor->id }}</td>
                            <td>{{ $corretor->nome }}</td>
                            <td>{{ $corretor->email }}</td>
                            <td>

                                <!--Botão de detalhe do registro  -->
                                <a href="{{ route('corretores.show', $corretor) }}" class="btn btn-xs btn-primary">
                                    <i class="fas fa-fx fa-eye"></i>
                                </a>
                                <!--Botão de edição do registro  -->
                                <a href="{{ route('corretores.edit', $corretor) }}" class="btn btn-xs btn-warning">
                                    <i class="fas fa-fx fa-pencil-alt"></i>
                                </a>
                                <!--Botão de exclusão do registro  -->
                                <form action="{{ route('corretores.destroy', $corretor) }}" method="post" 
                                onsubmit="return confirm('Você tem certeza de' +
                                'que quer excluir este registro?');" 
                                style="display: inline-block">

                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <button type="submit" class="btn btn-xs btn-danger">
                                        <i class="fas fa-fx fa-trash"></i>
                                    </button>
                                
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop