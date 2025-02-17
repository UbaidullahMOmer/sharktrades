<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Validation\Rule;

class StorePasswordRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'currentPassword'   => ['required', 'string', 'min:8','current_password'],
            'newPassword'       => ['required', 'string', 'min:8',],
            'repeatNewPassword' => ['required', 'string', 'min:8','same:newPassword'],
            'verificationCode'  => ['required','string'],
        ];
    }
}
