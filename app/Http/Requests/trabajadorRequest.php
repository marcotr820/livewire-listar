<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class trabajadorRequest extends FormRequest
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
            'email' => 'required',
            'nombre' => 'required',
            'telefono' => ['required', 'numeric'],
            'ciudad' => 'required',
            // 'pais' => 'required'
        ];
    }
}
