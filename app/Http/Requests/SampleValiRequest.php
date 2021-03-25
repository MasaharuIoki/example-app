<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SampleValiRequest extends FormRequest
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
     * 'ex1' => '|string|max:255',は'ex1' => 'string|max:255',
     * @return array
     */
    public function rules()
    {
        return [
        'choice1'=>'required',
        'choice2'=>'required',
        'choice3'=>'required',
        'ex1' => 'string|max:255',
        'choice4'=>'required',
        'ex2' => 'string|max:255',
        'choice5'=>'required',
        'choice6'=>'required',
        'example3' => 'string|max:255',
        'choice7'=>'required',
        'example4' => 'string|max:255',
        ];
    }
    public function messages()
    {
      return [
        'name.required' => '名前を入力してください',
        'name.string' => '名前は文字列で入力してください',
        'name.max' => '名前は255文字以内で入力してください',
        'gender.required'  => '性別を選択してください',
        'age.required'  => '年齢を選択してください',
        'age.integer'  => '年齢は数字で入力してください',
        'file.required'  => 'ファイルを選択してください',
        'file.file'  => 'ファイルのアップロードに失敗しました',
        'file.image'  => 'アップロード可能な画像は「jpg」「png」「bmp」「gif」「svg」です',
        'file.max'  => 'アップロードするファイルは10MBまでです',
        'comment.required' => 'コメントを入力してください',
      ];
    }
}
