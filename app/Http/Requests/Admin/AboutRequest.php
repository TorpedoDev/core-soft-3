<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'image' => $imageRule ,
            'imagedesc_ar' => 'required|string' , 
            'imagedesc_en' => 'required|string' , 
            'videodesc_ar' => 'required|string' ,
            'videodesc_en' => 'required|string' , 
            'video_image' => $imageRule , 
            'video_link' => 'required|url'
        ];
    }
}
