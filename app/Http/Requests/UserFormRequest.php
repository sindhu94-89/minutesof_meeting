<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'first_name' => 'required|regex:/^[A-Z]+$/i|min:4',
            'gender' => 'required|in:male,female,others',
            'email' => 'required|email',
            'phone_number' => 'required|digits:10',
            'dob' => 'required|before:-18 years',
            /*'password' => 'required|Password::min(6)->mixedCase()->numbers()->symbols()->uncompromised()|confirmed',*/
            'password' => 'required|min:6|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!@$#%]).*$/|confirmed',
            'address' => 'required',

        ];
    }
}
