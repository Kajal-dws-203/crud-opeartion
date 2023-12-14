<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:students,email',
            'address' => 'required',
            'standard' => 'required|numeric',
            'gender' => 'required',
            'hobbies' => 'required',
            'date_of_birth' => 'required',
        ];
    }

    public function messages()
    {
        return[
            'first_name.required' => 'Please enter your first name',
            'first_name.max' => 'Max 255 character alllowed',
            'last_name.required' => 'Please enter your last name',
            'last_name.max' => 'Max 255 character alllowed',
            'email.required' => 'Please enter your email',
            'email.email' => 'Email format is wrong',
            'email.unique' => 'Please enter unique email address',
            'address.required' => 'Please enter your address',
            'standard.required' => 'Please enter your standard',
            'standard.numeric' => 'Please enter number',
            'gender.required' => 'Please select your gender',
            'hobbies.required' => 'Please select your hobbies',
            'date_of_birth.required' => 'Please select your date_of_birth',
        ];
    }
}
