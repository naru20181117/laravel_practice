<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
        'username' => 'required|max:20',
        'password' => 'required|min:8|max:12|alpha_dash',
        'latitude' => 'integer|min:-90|max:90',
        'longitude' => 'integer|min:-180|max:180'
      ];
  }
  public function messages()
  {
    return [
      'username.required' => '名前を入力してください',
      'username.max' => '名前を20文字以内で入力してください。'
    ];
  }
}
