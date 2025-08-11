<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskResquest extends FormRequest
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
            'title' => 'required|string|min:5',
            'description' =>'nullable',
            'due_date' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Campo título é obrigatório",
            'title.min' => "Campo nome precisa conter mais de :min caracteres",
            'due_date' => "Campo data é obrigatório"
        ];
    }
}
