<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateBoletaRequest extends Request
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
            'cajero'=>'required|string|regex:/^[a-z\ á-ú]+$/i|between:5,20',
            'rut'=>'required|rut'
        ];
    }
}
