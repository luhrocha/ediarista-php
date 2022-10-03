<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ServicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required','min:2', 'max:255'],
            'icone' => ['required', Rule::in(['twf-cleaning-1', 'twf-cleaning-2', 'twf-cleaning-3'])],
            'posicao' => ['required', 'integer','min:1', 'max:99'],
            'valor_minimo' => ['required', 'numeric'],
            'quantidade_horas' => ['required', 'integer', 'min:1', 'max:8'],
            'porcentagem' => ['required', 'integer', 'min:1', 'max:99'],
            'valor_quarto' => ['required', 'numeric'],
            'horas_quarto' => ['required', 'integer', 'min:1', 'max:8'],
            'valor_sala' => ['required', 'numeric'],
            'horas_sala' => ['required', 'integer', 'min:1', 'max:8'],
            'valor_banheiro' => ['required', 'numeric'],
            'horas_banheiro' => ['required', 'integer', 'min:1', 'max:8'],
            'valor_cozinha' => ['required', 'numeric'],
            'horas_cozinha' => ['required', 'integer', 'min:1', 'max:8'],
            'valor_quintal' => ['required', 'numeric'],
            'horas_quintal' => ['required', 'integer', 'min:1', 'max:8'],
            'valor_outros' => ['required', 'numeric'],
            'horas_outros' => ['required', 'integer','min:1', 'max:8']
        ];     
    }

    /** 
     * Substitui os valores antes da validação
     * 
     */
    public function validationData()
    {
        $dados = $this->all();
        
        $dados['valor_minimo'] = $this->formatMonetaryValue($dados['valor_minimo']);
        $dados['valor_quarto'] = $this->formatMonetaryValue($dados['valor_quarto']);
        $dados['valor_sala'] = $this->formatMonetaryValue($dados['valor_sala']);
        $dados['valor_banheiro'] = $this->formatMonetaryValue($dados['valor_banheiro']);
        $dados['valor_cozinha'] = $this->formatMonetaryValue($dados['valor_cozinha']);
        $dados['valor_quintal'] = $this->formatMonetaryValue($dados['valor_quintal']);
        $dados['valor_outros'] = $this->formatMonetaryValue($dados['valor_outros']);

        $this->replace($dados);
        
        return $dados;
    }

    /** 
     * Formata o valor do padrão brasileiro, para o formato internacional
     */
    protected function formatMonetaryValue(string $value)
    {
        return str_replace(['.', ','], ['', '.'], $value);
    }
}
