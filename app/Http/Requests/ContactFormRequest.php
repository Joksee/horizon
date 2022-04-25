<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            //regras de vlição o formulário
            'name_contacts'    => 'required',
            'email_contacts'   => 'required|email',
            'message_contacs' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_contacts.required'    => 'O campo Nome é obrigatório.',
            'email_contacts.required'   => 'O campo Email é obrigatório.',
            'email_contacts.email'      => 'Por gentileza, digite um e-mail no formato válido',
            'message_contacts.required' => 'O campo Mensagem é obrigatório.',
        ];
    }
}
