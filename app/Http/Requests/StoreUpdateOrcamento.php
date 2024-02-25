<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**Classe de Request para validação dos dados de criação e atualização de Orçamento. */
class StoreUpdateOrcamento extends FormRequest
{
    /**
     * Determina se o usuário está autorizado a fazer esta requisição.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Regras de validação para os dados do orçamento.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'vendedor' => 'required|min:3|max:30',
            'cliente' => 'required|min:3|max:30',
            'descricao' => ['nullable', 'min:5', 'max:10000'],
            'valor' => 'required'
        ];
    }
}
