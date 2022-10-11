<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Http\Requests\ServicoRequest;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Lista os serviços
     *  
     */
    public function index(Type $var = null)
    {
        $servicos = Servico::simplePaginate(10);
        
        return view('servicos.index')->with('servicos', $servicos);
    }

    /**
     * Mostra o formulário vazio para a criação
     */
    public function create(Type $var = null)
    {
        return view('servicos.create');
    }

    /**
     * Salva o serviço no banco de dados
     */
    public function store(ServicoRequest $request)
    {
        # code...        
        $dados = $request->except('_token');
        $retorno = Servico::create($dados);

        if($retorno){
            return redirect()->route('servicos.index')->with('message', 'Serviço criado com sucesso!');
        }
    }

    /**
     * Mostra o formulário com os dados de um serviço do banco de dados
     */
    public function edit(Servico $servico)
    {
        return view('servicos.edit')->with('servico', $servico);
    }

    /**
     * Atualiza os dados no banco de dados
     */
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->except(['_token', '_method']);
        $servico->update($dados);

        return redirect()->route('servicos.index')->with('message', 'Serviço atualizado com sucesso!');
    }
/**
 * Deleta o serviço do banco de dados
 */
    public function delete(Servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index')->with('message', 'Serviço removido com sucesso!');
    }
}
