<?php

namespace App\Http\Requests\Admin;

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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if($this->method() == 'PUT' || $this->method() == 'PATCH')
        {
            $imageRule = 'nullable|mimes:jpg,png,jpeg,gif,svg';
        }else{
            $imageRule = 'required|mimes:jpg,png,jpeg,gif,svg';

        }

        return [
            'logo' => $imageRule
        ];
    }

    public function messages()
    {
        return [
            'logo.required' => __('custom.image is required'),
            'logo.mimes' => __('custom.image must be image'),
        ];
    }
}
