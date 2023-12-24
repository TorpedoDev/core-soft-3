<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
     
        return [
            'title_ar'  => 'required|string', 
            'title_en'  => 'required|string', 
            'logo'  => 'required|string', 
            'description_ar' => 'required|string' , 
            'description_en' => 'required|string' , 
            'about_ar' => 'required|string' , 
            'about_en' => 'required|string'
        ];

    }


    public function messages()
    {
        return [
        'title_ar.required' => __('custom.title_in_ar is required'),
        'title_ar.string' => __('custom.title_in_ar must be string'),
        'title_en.required' => __('custom.title_in_en is required'),
        'title_en.string' => __('custom.title_in_en must be string'),
        'description_ar.required' => __('custom.description_ar is required'),
        'description_ar.string' => __('custom.description_ar must be string'),
        'description_en.required' => __('custom.description_en is required'),
        'description_en.string' => __('custom.description_en must be string'),
        'logo.required' => __('custom.logo is required'),
        'logo.string' => __('custom.logo must be string'),
        'about_ar.required' => __('custom.about_ar is required'),
        'about_ar.string' => __('custom.about_ar must be string'),
        'about_en.required' => __('custom.about_en is required'),
        'about_en.string' => __('custom.about_en must be string'),
    ];
    }


}
