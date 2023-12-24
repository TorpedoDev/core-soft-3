<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'logo' => 'required|string',
            'name_en' => 'required|string',
            'name_ar' => 'required|string',
            'description_en' => 'required|string',
            'description_ar' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
        'name_en.required' => 'name_en is required',
        'name_en.string' => 'name_en must be string',
        'name_ar.required' => 'name_ar is required',
        'name_ar.string' => 'name_ar must be string',
        'description_en.required' => 'description_en is required',
        'description_en.string' => 'description_en must be string',
        'description_ar.required' => 'description_ar is required',
        'description_ar.string' => 'description_ar must be string',
        'logo.required' => __('custom.logo is required'),
        'logo.string' => __('custom.logo must be string'),
        ];
    }
}
