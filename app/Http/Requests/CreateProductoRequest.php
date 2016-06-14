<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateProductoRequest extends Request
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
            'nombre'=>'string|between:5,20|required|regex:/^[a-z\ á-ú]+$/i',
            'precio'=>'numeric|between:0,50000|required',
            'unidad'=>'alpha|between:3,10|required',
            'tipo_producto_id'=>'numeric|min:1|required|exists:tipo_productos,id',
        ];
    }
}
