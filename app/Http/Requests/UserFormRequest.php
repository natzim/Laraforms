<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class UserFormRequest extends FormRequest {

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

    public function response(array $errors)
    {
        return new JsonResponse($errors, 422);
    }

}