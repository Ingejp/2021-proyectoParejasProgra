<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestTarifa extends FormRequest
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
            'nombre_tarifa' => [
                'required',
            ],
            'precio_regular' => [
                'required',
            ],
            'precio_ofertado' => [
                'required',
            ],
            'precio_alta_ocupacion' => [
                'required',
            ],
            'id_tipo_habitacion' => [
                'required',
            ],
        ];
    }
}
