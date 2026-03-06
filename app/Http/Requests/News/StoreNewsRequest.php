<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O campo título é obrigatório',
            'title.string' => 'O campo título deve ser uma string',
            'title.max' => 'O campo título deve ter no máximo 255 caracteres',
            'content.required' => 'O campo conteúdo é obrigatório',
            'content.string' => 'O campo conteúdo deve ser uma string',
            'category_id.required' => 'O campo categoria é obrigatório',
            'category_id.exists' => 'A categoria informada não existe',
        ];
    }
}
