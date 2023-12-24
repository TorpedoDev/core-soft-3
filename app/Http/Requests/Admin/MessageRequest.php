<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => 'required|string|max:60', 
            'email' => 'required|email|max:80' , 
            'subject' => 'required|string' , 
            'message' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('custom.Name is required'),
            'name.string' => __('custom.Name must be text'),
            'name.max' => __('custom.Name must be less than 60'),
            'email.required' => __('custom.email is required'),
            'email.email' => __('custom.email must be valid'),
            'email.max' => __('custom.email must be less than 80 charachter'),
            'subject.required' => __('custom.subject is required'),
            'subject.string' => __('custom.subject must be text'),
            'message.required' => __('custom.message is required'),
            'message.string' => __('custom.message must be text'),
        ];
    }
}
