<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'password' => ['required','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/']
        ];
    }

    public function messages(): array
    {
        return [
            
            'username.required' => 'enter your username',
            'password.required' => 'enter your password',
            'username' => 'Invalid username ',
            'password' => 'Invalid password'
        ];
    }
}
