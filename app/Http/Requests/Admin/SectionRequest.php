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


}
