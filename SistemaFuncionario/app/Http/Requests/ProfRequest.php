<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfRequest extends FormRequest
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
        return [
            'name' => 'required|min:3',
            'cpf' => 'required|unique:funcionario',
            
        ];
    }

    public function messages(){
        return[
        'name.required' => 'o campo nome é Obrigatorio!!',
        'name.min' => 'O campo nome deve ter no minimo 3 caracteres!!',
        'cpf.required' => 'CPF Obrigatorio !!!',
        'cpf.unique' => 'CPF já Existe em nossa Base de Dados!!! '

        ];
    }
}
