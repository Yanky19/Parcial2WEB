<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TareaRequest extends FormRequest
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

                'nombre'        =>'required|max:60',
                'apellido'        =>'required|max:60',
                'direccion'        =>'required|max:60',
                'telefono'        =>'required|max:60',

        ];
    }
}
