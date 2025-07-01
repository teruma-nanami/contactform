<?php

namespace App\Http\Requests;

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
    /**
     * バリデーションルールを定義するメソッド
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'age' => 'required|integer|min:18|max:100',
            'gender' => 'required|string',
            'interests' => 'nullable|array',
            'message' => 'required|string|min:10|max:1000',
        ];
    }

    /**
     * カスタムエラーメッセージ（任意）
     */
    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください。',
            'email.required' => 'メールアドレスを入力してください。',
            'email.email' => 'メールアドレスの形式が不正です。',
            'age.required' => '年齢を選択してください。',
            'age.integer' => '年齢は数値で入力してください。',
            'gender.required' => '性別を選択してください。',
            'message.required' => 'お問い合わせ内容を入力してください。',
            'message.min' => 'お問い合わせ内容は10文字以上で入力してください。',
            'message.max' => 'お問い合わせ内容は1000文字以内で入力してください。',
        ];
    }
}
