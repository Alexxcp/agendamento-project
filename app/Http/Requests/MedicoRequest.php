<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicoRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case "POST": // CRIAR NOVO CONTATO
                return [
                    'nome' => 'required|max:100',
                    'telefone' => 'required|max:15',
                    'crm' => 'required|max:20',
                    'especializacoes' => 'required|max:255',
                    'email' => 'email|max:200|unique:medicos',
                    'password' => 'required|string|min:6|confirmed',
                ];
                break;

            case "PUT": // ATUALIZAR CONTATO
                return [
                    'nome' => 'required|max:100',
                    'telefone' => 'required|max:15',
                    'crm' => 'required|max:20',
                    'especializacoes' => 'required|max:255',
                    'email' => 'email|max:200|unique:medicos,email,' . $this->id,
                ];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo Nome é obrigatório',
            'email.email' => 'Informe um e-mail válido'
        ];
    }
}