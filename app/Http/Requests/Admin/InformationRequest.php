<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InformationRequest extends FormRequest
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
            'phone' => 'required|string' ,
             'email' => 'required|email' ,
             'location_ar' => 'required|string' ,
             'location_en' => 'required|string' ,
             'open_ar' => 'required|string' ,
             'open_en' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => __('custom.phone is required'),
            'email.required' => __('custom.email is required'),
            'email.email' => __('custom.email must be valid'),
            'location_ar.required' => __('location_ar is required'),
            'location_ar.string' => __('location_ar must be text'),
            'location_en.required' => __('location_en is required'),
            'location_en.string' => __('location_en must be text'),
            'open_ar.required' => __('open_ar is required'),
            'open_ar.string' => __('open_ar must be text'),
            'open_en.required' => __('open_en is required'),
            'open_en.string' => __('open_en must be text'),
        ];
    }
}
