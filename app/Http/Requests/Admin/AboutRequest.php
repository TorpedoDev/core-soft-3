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
        'imagedesc_ar.required' => __('custom.imagedesc_ar is required'),
        'imagedesc_ar.string' => __('custom.imagedesc_ar must be string'),
        'imagedesc_en.required' => __('custom.imagedesc_en is required'),
        'imagedesc_en.string' => __('custom.imagedesc_en must be string'),
        'videodesc_ar.required' => __('custom.videodesc_ar is required'),
        'videodesc_ar.string' => __('custom.videodesc_ar must be string'),
        'videodesc_en.required' => __('custom.videodesc_en is required'),
        'videodesc_en.string' => __('custom.videodesc_en must be string'),
        'video_image.required' => __('custom.video_image is requierd'),
        'video_image.mimes' => __('custom.image must be image'),
        'video_link.required' => __('custom.video_link is required'),
        'video_link.url' => __('custom.video_link must be url'),
        ];
    }
}
