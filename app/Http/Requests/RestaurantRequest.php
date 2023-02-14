<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'ruc'=>'required|min:13|max:14',
            'local_name'=>'required',
            'local_address'=>'required',
            'type_local'=>'required',
            'owner_name'=>'required',
            'local_email'=>'nullable',
            'local_tel'=>'nullable|min:9|max:14',
            'description'=>'nullable',
            'id_user'=>'nullable'
        ];
    }
    public function messages()
    {
        return [
            'ruc.required'=>'Ingrese el número de Ruc o RIMPE ',
            'local_name.required'=>'Ingrese el nombre del negocio',
            'local_address.required'=>'Ingrese la dirección del negocio',
            'type_local.required'=>'Ingrese la categoria de su negocio',
            'owner_name.required'=>'Ingrese su nombre o del gerente/dueño del negocio',
            'local_tel.min'=>'El número ingresado es incorrecto',
        ];
    }
}
