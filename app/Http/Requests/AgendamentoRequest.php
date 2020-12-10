<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgendamentoRequest extends FormRequest
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
                return [];
                break;

            case "PUT": // ATUALIZAR CONTATO
                return [];
                break;
            default:
                break;
        }
    }

    public function messages()
    {
        return [];
    }
}