<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PricingRequest extends FormRequest
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
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'price' => 'required|numeric',
            'logo' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
        'name_ar.required' => __('custom.name_ar is required'),
        'name_ar.string' => __('custom.name_ar must be string'),
        'name_ar.max' => __('custom.name_ar must be less than 255'),
        'name_en.required' => __('custom.name_en is required'),
        'name_en.string' => __('custom.name_en must be string'),
        'name_en.max' => __('custom.name_en must be less than 255'),
        'description_ar.required' => __('custom.description_ar is required'),
        'description_ar.string' => __('custom.description_ar must be string'),
        'description_en.required' => __('custom.description_en is required'),
        'description_en.string' => __('custom.description_en must be string'),
        'price.required' => __('custom.price is required'),
        'price.numeric' => __('custom.please enter valid price'),
        'logo.required' => __('custom.logo is required'),
        'logo.string' => __('custom.logo must be string')
        ];
    }
}
