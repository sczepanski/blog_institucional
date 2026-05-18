<?php

namespace App\Http\Requests\Imagem;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreImagemRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'      => 'required|string',
            'caminho'   => 'nullable',
            'tipo'      => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo de nome é obrigatório.',
        ];
    }
}
