<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AuthRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }

  public function rules()
  {
    return [
      'mail_address' => 'required|email',
      'password' => 'required',
    ];
  }
}
