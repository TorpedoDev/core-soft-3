<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'location_ar' => 'required|string|max:255' ,
             'location_en' => 'required|string|max:255' ,
              'email' => 'required|email' , 
              'call' => 'required|string|max:11' ,
               'open_ar' => 'required|string'  , 
               'open_en' => 'required|string' 
        ];
    }
}
