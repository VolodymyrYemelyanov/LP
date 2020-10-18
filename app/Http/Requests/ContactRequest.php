<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // should be true if user should not be authorized
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:10'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Field name is required',
            'name.min' => 'In field name should be at least two characters'
        ];
    }
}
