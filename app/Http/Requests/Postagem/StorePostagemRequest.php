<?php

namespace App\Http\Requests\Postagem;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StorePostagemRequest extends FormRequest
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
            'tiulo'             => 'required|string',
            'slug'              => 'nullable',
            'conteudo'          => 'required|string',
            'categoria'         => 'nullable',
            'imagem_id'         => 'nullable',
            'user_id'           => 'nullable',
            'data_publicacao'   => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'titulo.required'       => 'O campo de título é obrigatório.',
            'conteudo.required'     => 'O campo de conteúdo é obrigatório.',
        ];
    }
}
