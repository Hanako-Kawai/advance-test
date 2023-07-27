<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'last-name' => ['required', 'string', 'max:255'],
            'first-name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'regex:/^\d{3}-\d{4}$/'],
            'address' => ['required', 'string', 'max:255'],
            'opinion' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' => '姓を入力してください',
            'last-name.string' => '姓を文字列で入力してください',
            'last-name.max' => '姓を255文字以下で入力してください',
            'first-name.required' => '名を入力してください',
            'first-name.string' => '名を文字列で入力してください',
            'first-name.max' => '名を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.regex' => '郵便番号をハイフンありで8文字で入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見を120文字以下で入力してください',
        ];
    }
}
