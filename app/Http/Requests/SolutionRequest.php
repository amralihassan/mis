<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolutionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => ['required'],
            'solution_name' => ['required','max:100'],
            'description' => ['required'],
            'solution_image' => ['required','image','mimes:png,jpg'],
            'sort' => ['required','numeric'],
        ];
    }
}
