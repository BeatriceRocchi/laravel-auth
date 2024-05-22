<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnologyRequest extends FormRequest
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
            'name' => 'required|min:2|max:20'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Il nome della technologia è obbligatorio',
            'name.min' => 'Il nome della technologia deve avere almeno :min caratteri',
            'name.min' => 'Il nome della technologia non deve avere più di :max caratteri',
        ];
    }
}
