<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'website' => ['required', 'max:75', 'min:10'],
            'email' => ['email', 'max:50', 'min:10'],
            'website' => ['max:100', 'min:10', 'nullable'],
            'address' => ['max:100', 'min:5', 'nullable'],
            'contact' => ['nullable', 'numeric'],
            'facebook' => ['max:100', 'nullable'],
            'youtube' => ['max:50', 'nullable'],
            'logo' => ['image', 'mimes:jpeg,png,jpg', 'max:256'],
            'icon' => ['image', 'mimes:ico'],
            'description' => ['max:190', 'nullable'],
            'msg_maintenance' => ['max:190', 'nullable'],

        ];
    }
}
