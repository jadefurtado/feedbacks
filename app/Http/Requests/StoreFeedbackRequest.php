<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
                'category' => 'required|string|max:50'
        ];
    }

    public function messages()
    {
        return [
                'name.required' => 'O nome é obrigatório',
                'email.required' => 'O e-mail é obrigatório',
                'email.email' => 'O email deve ser válido',
                'message.required' => 'A mensagem é obrigatória',
                'category.required' => 'A categoria é obrigatória',
        ];
    }
}
