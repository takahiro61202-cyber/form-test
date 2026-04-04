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
            'first_name'=>'required|max:8',
            'last_name'=>'required',
            'gender'=>'required',
            'email'=>'required|email',
            'telA'=>'required|regex:/^[0-9]+$/',
            'telB'=>'required|regex:/^[0-9]+$/',
            'telC'=>'required|regex:/^[0-9]+$/',
            'address'=>'required',
            'detail'=>'required|max:120',
            'category_id'=>'required',

        ];

    }

    public function messages()
    {
        return[
            'first_name.required'=>'名を入力してください',
            'last_name.required'=>'姓を入力してください',
            'gender.required'=>'性別を選択してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスはメール形式で入力してください',
            'telA.required'=>'電話番号を入力してください',
            'telB.required'=>'電話番号を入力してください',
            'telC.required'=>'電話番号を入力してください',
            'telA.regex:/^[0-9]+$/.'=>'電話番号は半角英数字で入力してください',
            'telB.regex:/^[0-9]+$/.'=>'電話番号は半角英数字で入力してください',
            'telC.regex:/^[0-9]+$/.'=>'電話番号は半角英数字で入力してください',
            'telA.'=>'電話番号は5桁まで数字で入力してください',
            'telB.required'=>'電話番号は5桁まで数字で入力してください',
            'telC.required'=>'電話番号は5桁まで数字で入力してください',
            'address.required'=>'住所を入力してください',
            'category_id.required'=>'お問い合わせの種類を選択してください',
            'detail.required'=>'お問い合わせ内容を入力してください',
            'detail.max'=>'お問い合わせ内容は120文字以内で入力してください',

            'tel.max'=>'電話番号は5桁で入力してください',
            
            

        ];
    }
}
