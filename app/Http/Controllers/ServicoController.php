<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function index(Type $var = null)
    {
        $servicos = Servico::simplePaginate(10);
        
        return view('servicos.index')->with('servicos', $servicos);
    }

    public function create(Type $var = null)
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        # code...        
        $dados = $request->except('_token');
        $retorno = Servico::create($dados);

        if($retorno){
            return redirect()->route('servicos.index');
        }
    }

    public function edit(int $id)
    {
        $servico = Servico::findOrFail($id);

        return view('servicos.edit')->with('servico', $servico);
    }

    public function update(int $id, Request $request)
    {
        $dados = $request->except(['_token', '_method']);
        $servico = Servico::findOrFail($id);

        $servico->update($dados);

        return redirect()->route('servicos.index');
    }

    public function delete(int $id)
    {
        $servico = Servico::findOrFail($id);

        $servico->delete();

        return redirect()->route('servicos.index');
    }
}
