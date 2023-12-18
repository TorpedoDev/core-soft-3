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
}
