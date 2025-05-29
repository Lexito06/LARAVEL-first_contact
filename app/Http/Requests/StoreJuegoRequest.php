<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJuegoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|min:5|max:255',
            'descripcion' => 'required',
            'precio' => 'required|numeric|min:0',
            'nota' => 'integer|min:0|max:5',
            'id_categoria' => 'required|exists:categoria,id',
        ];
    }

}
