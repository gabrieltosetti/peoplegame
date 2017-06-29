<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
            'nome' => 'required|max:120',
            'email' => 'required|max:100|unique:players,email', 
            'idade' => 'required|max:2',
            'celular' => 'required|max:14',
            'aluno' => 'required',
            'jogo_manha' => 'required',
            'jogo_tarde' => 'required',



        ];
    }

    public function messages()
    {
        return [
            'required'  => 'O campo :attribute não pode ser vazio.',
            'max'       => 'O campo :attribute não pode passar de :max caracteres.',
            'idade.max'       => 'O valor excede o permitido',
            'jogo_manha.required'       => 'Você precisa escolher uma das opções.',
            'jogo_tarde.required'       => 'Você precisa escolher uma das opções.',
            'email.unique'       => 'Este e-mail já está sendo usado.',
        ];
    }
}
