<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
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
            'image' =>'nullable|image|mimes:jpg,png,jpeg,gif,svg' ,
             'name_en' => 'required|string|max:255' ,
             'name_ar' => 'required|string|max:255' ,
             'position_en'  => 'required|string|max:255',
             'position_ar'  => 'required|string|max:255',
             'facebook' => 'nullable|url' ,
             'twitter' => 'nullable|url' ,
             'linkedin'  => 'nullable|url',
             'instagram' => 'nullable|url'
        ];
    }

    public function messages()
    {
        return [
            'image.mimes' => __('custom.image must be image'),
            'name_en.required' => __('custom.name_en is required'),
            'name_en.string' => __('custom.name_en must be string'),
            'name_en.max' => __('custom.name_en must be less than 255'),
            'name_ar.required' => __('custom.name_ar is required'),
            'name_ar.string' => __('custom.name_ar must be string'),
            'name_ar.max' => __('custom.name_ar must be less than 255'),
            'position_en.required' => __('custom.position_en is required'),
            'position_en.string' => __('custom.position_en must be string'),
            'position_en.max' => __('custom.position_en must be less than 255'),
            'position_ar.required' => __('custom.position_ar is required'),
            'position_ar.string' => __('custom.position_ar must be string'),
            'position_ar.max' => __('custom.position_ar must be less than 255'),
            'facebook.url' => __('custom.Text must be url'),
            'twitter.url' => __('custom.Text must be url'),
            'linkedin.url' => __('custom.Text must be url'),
            'instagram.url' => __('custom.Text must be url'),
        ];
    }
}
