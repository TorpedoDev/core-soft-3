<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'question_en' => 'required|string' , 
            'answer_en' => 'required|string',
            'question_ar' => 'required|string' , 
            'answer_ar' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
    
            'question_en.required' => __('custom.Question_en is required'),
            'question_en.string' => __('custom.Question_en must be string'),
            'question_ar.required' => __('custom.Question_ar is required'),
            'question_ar.string' => __('custom.Question_ar must be string'),
            'answer_ar.required' => __('custom.answer_ar is required'),
            'answer_ar.string' => __('custom.answer_ar must be string'),

        ];
    }
}
