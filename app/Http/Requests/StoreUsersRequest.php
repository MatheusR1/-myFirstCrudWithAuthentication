<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
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

            'first_name' => 'required | unique:contacts',
            'last_name' => 'required',
            'email' => 'required | unique:contacts',

        ];
    }

    public function messages()
    {
        return [
            'first_name.required'=>'O primeiro nome é obrigatório',
            'last_name.required'=>'O ultimo nome é obrigatório',
            'email.required'=>'O email é obrigatório',
            'city.required'=>'informe a cidade',
            'country.required'=>'informe o estado',
            'job_title.required'=>'informe o seu cargo',
            'email.unique' =>'endereço já em uso!',
            'first_name.unique'=>'nome já foi escolhido!'
        ];
    }
}
