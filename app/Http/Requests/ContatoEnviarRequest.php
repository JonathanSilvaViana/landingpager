<?php

namespace SistemaLaravel\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContatoEnviarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required',
            'sobrenome' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'textarea' => 'required'
        ];
    }
}
