<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AppRequest extends FormRequest
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
        if ($this->method() == 'PUT' || $this->method() == 'PATCH') {
            $imageRule = 'nullable|mimes:jpg,png,jpeg,gif,svg';
        } else {
            $imageRule = 'required|mimes:jpg,png,jpeg,gif,svg';
        }

        return [
            'name_en'  => 'required|string|max:255',
            'name_ar'  => 'required|string|max:255',
            'description_en'  => 'required|string|max:255',
            'description_ar'  => 'required|string|max:255',
            'image' => $imageRule
        ];
    }

    public function messages()
    {
        return [
        'name_en.required' => __('custom.name_en is required'),
        'name_en.string' => __('custom.name_en must be string'),
        'name_en.max' => __('custom.name_en must be less than 255'),
        'name_ar.required' => __('custom.name_ar is required'),
        'name_ar.string' => __('custom.name_ar must be string'),
        'name_ar.max' => __('custom.name_ar must be less than 255'),
        'description_en.required' => __('custom.description_en is required'),
        'description_en.string' => __('custom.description_en must be string'),
        'description_en.max' => __('custom.description_en must be less than 255'),
        'description_ar.required' => __('custom.description_ar is required'),
        'description_ar.string' => __('custom.description_ar must be string'),
        'description_ar.max' => __('custom.description_ar must be less than 255'),
        'image.required' => __('custom.image is required'),
        'image.mimes' => __('custom.image must be image'),
        ];
    }
}
