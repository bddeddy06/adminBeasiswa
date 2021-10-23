<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminValidator extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Field nama harus di isi',
            'name.max' => 'Maksimum 255 huruf',
            'email.unique' => 'Email sudah terdaftar sebagai admin',
            'email.min' => 'Password minimal 8 karakter',
        ];
    }
}
