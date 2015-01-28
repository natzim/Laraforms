<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest {

    protected $redirect = 'user/create';

    public function rules()
    {
        return [
            'name'     => 'required|alpha_dash|min:3|max:20|unique:users',
            'password' => 'required|confirmed'
        ];
    }

    public function authorize()
    {
        return true;
    }

}