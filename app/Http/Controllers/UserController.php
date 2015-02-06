<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {

    public function create()
    {
        $input = Input::json();

        return $input;
    }

    public function show($id)
    {
        return User::firstOrFail($id)->toJson();
    }

    public function update($id)
    {
        $input = Input::json();

        return $input;
    }

    public function delete($id)
    {
        User::firstOrFail($id)->delete();
    }

}
