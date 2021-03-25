<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderStoreRequest extends FormRequest
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
      'name' => 'required|string|max:255',
      'email' => 'required|email|string|max:200|unique:providers',
      'ruc_number' => 'required|string|max:11|min:8|unique:providers',
      'address' => 'nullable|string|max:255',
      'phone' => 'required|string|max:12|min:8|unique:providers',
        ];
    }

       public function Message()
     {
        return [
            'name.required'=>'Este campo es requerido. ',
            'name.string'=>'El valor no es correcto. ',
            'name.max'=>'Solo se permite 255 caracteres.',

            'email.required'=>'Este campo es requerido. ',
            'email.email'=>'No es un correo electronico',
            'email.string'=>'El valor no es correcto. ',
            'email.max'=>'Solo se permite 200 caracteres.',
            'email.unique'=>'Ya se encuentra registrado',

            'ruc_number.required'=>'Este campo es requerido. ',
            'ruc_number.string'=>'El valor no es correcto. ',
            'ruc_number.max'=>'Solo se permite 11 caracteres.',
            'ruc_number.min'=>'Debe contener al menos 8 caracteres.',
            'ruc_number.unique'=>'Ya se encuentra registrado',

            'phone.required'=>'Este campo es requerido. ',
            'phone.string'=>'El valor no es correcto. ',
            'phone.max'=>'Solo se permite 12 caracteres.',
            'phone.min'=>'Debe contener al menos 8 caracteres.',
            'phone.unique'=>'Ya se encuentra registrado',

            'address.string'=>'El valor no es correcto. ',
            'address.max'=>'Solo se permite 255 caracteres.',
        ];
     }
}
