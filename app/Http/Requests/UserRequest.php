<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
        $id = request()->segment(3);
        if (!is_numeric($id)) {
            $id = authInfo()->id;
        }
        return [
            'name' => ['required', 'max:20'],
            'email' => ['required', 'email', Rule::unique('users')->ignore($id)],
            'password' => ['required', 'sometimes'],
            'confirm_password' => ['required', 'same:password', 'sometimes'],
            'image_profile' => ['image', 'mimes:jpeg,png,jpg', 'max:256'],
        ];
    }
}
