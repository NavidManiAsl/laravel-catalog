<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'username' => ['required', 'min:3', 'max:256', 'regex:/^[a-zA-Z0-9_]+$/'],
            'email' => ['required', 'email:rfc'],
            'password' => ['required', 'confirmed']
        ];
    }

    public function messages():array
    {
        return [
            'name.regex' => 'Only alphanemeric and _ allowed',
            'password.regex' => '8char, symbol, both upper and lower cases'
        ];
    }
}