<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'content_ar' => 'required|string',
            'content_en' => 'required|string',
            'image' => $imageRule

        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => __('custom.title_in_ar is required'),
            'title_ar.string' => __('custom.title_in_ar must be string'),
            'title_ar.max' => __('custom.title_in_ar must be less than 255'),
            'title_en.required' => __('custom.title_in_en is required'),
            'title_en.string' => __('custom.title_in_en must be string'),
            'title_en.max' => __('custom.title_in_en must be less than 255'),
            'image.required' => __('custom.image is required'),
            'image.mimes' => __('custom.image must be image'),
            'content_ar.required' => __('custom.content_in_ar is required'),
            'content_ar.string' => __('custom.content_in_ar must be string'),
            'content_en.required' => __('custom.content_in_en is required'),
            'content_en.string' => __('custom.content_in_en must be string'),
        ];
    }
}
