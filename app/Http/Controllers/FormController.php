<?php namespace App\Http\Controllers;

use App\Form;
use App\Http\Controllers\Controller;

class FormController extends Controller {

    public function create()
    {
        $input = Input::json();

        return $input;
    }

    public function show($id)
    {
        return Form::firstOrFail($id)->toJson();
    }

    public function update($id)
    {
        $input = Input::json();

        return $input;
    }

    public function delete($id)
    {
        Form::firstOrFail($id)->delete();
    }

}
