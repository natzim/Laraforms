<?php namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {

    /**
     * Attempts to create a user
     *
     * @param UserFormRequest $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function create(UserFormRequest $request)
    {
        $user = new User;

        $user->name = Input::get('name');
        $user->password = Hash::make(Input::get('password'));

        $user->save();

        return response()->json($user, 201);
    }

    /**
     * Attempts to show a user
     *
     * @param $id
     *
     * @return mixed
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Attempts to update a user
     *
     * @TODO Make this meaningful
     *
     * @param $id
     *
     * @return mixed
     */
    public function update($id)
    {
        $input = Input::json();

        return $input;
    }

    /**
     * Attempts to delete a user
     *
     * @param $id
     */
    public function delete($id)
    {
        User::findOrFail($id)->delete();
    }

    /**
     * Is the user currently logged in?
     */
    public function authCheck()
    {
        return response()->json(Auth::check());
    }

}
