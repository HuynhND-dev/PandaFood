<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'password.min' => 'Mật khẩu ít nhất 6 ký tự',
            'password.confirmed' => 'Mật khẩu nhập lại chưa chính xác',
        ];
    }
}
