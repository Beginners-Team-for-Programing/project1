<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class beginnerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'confirm')
        {
            return true;
        } else {
        return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'tel'=>'required',
            'mail'=>'email',
            'contents'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'お名前は必ず入力してください。',
            'tel.required'=>'電話番号が必須です。',
            'mail.email'=>'メールアドレスが必須です。',
            'contents.required'=>'お問い合わせ内容を入力してください。',

        ];
    }
}
