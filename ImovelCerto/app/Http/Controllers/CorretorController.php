<?php

namespace App\Http\Controllers;
//indicação de qual model o controller irá se comunicar
use App\Corretor;
use Illuminate\Http\Request;

class CorretorController extends Controller
{
    /*
    -index
        Receber dados de uma tabela e enviar para uma view.
    -create
        Exibir um formulario para que o usuario possa cadastrar um novo registro
    -store
        Recebe os dados do form (create) e envia para o banco de dados
    -show
        Exibe um determinado registo
    -edit
        Recebe os dados de um registro e envia para um form para ser atualizada
    -update
        Recebe os dados de um form (edit) e atualiza no banco de dados
    -destroy
        Deleta um registro no banco de dados
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corretores = Corretor::all();

        return view('corretor.index', compact("corretores"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('corretor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Corretor::create($request->all());

        return redirect()->route('corretores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function show(Corretor $corretor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$corretor = Corretor::find($id)
        //return view('corretor.edit',compact('corretor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Corretor $corretor)
    {
        Corretor::update($request->all());

        return redirect()->route('corretores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Corretor  $corretor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Corretor $corretor)
    {
        //
    }
}
