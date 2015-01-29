<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormFormRequest extends FormRequest {

    protected $redirect = 'form/create';

    public function rules()
    {
        return [
            'title'       => 'required|max:100',
            'description' => 'max:5000'
        ];
    }

    public function authorize()
    {
        return true;
    }

}