<?php namespace App\Http\Controllers;

use App\User;
use Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {

    /**
     * Show the form for creating a new user
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created user in storage
     *
     * @param UserFormRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserFormRequest $request)
    {
        $user = new User;

        $user->name     = $request->name;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * Display the specified user
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('user.show', ['user' => $user]);
    }

    /**
     * Update the specified user in storage
     *
     * @param $id
     */
    public function update($id)
    {
        $user = User::findOrFail($id);

        // Save stuff

        $user->save();
    }

    /**
     * Attempt to sign a user out from the application
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signOut()
    {
        Auth::logout();

        return redirect()->route('index');
    }

    public function signIn()
    {
        return view('user.signin');
    }

    public function authenticate()
    {
        $remember = Input::get('remember') ? true : false;

        if (Auth::attempt([
            'name'     => Input::get('name'),
            'password' => Input::get('password')
        ], $remember))
        {
            return response()->redirectToIntended(route('dashboard'));
        }
        else
        {
            return redirect()->route('user.signin');
        }
    }

    /**
     * Remove the specified user from storage
     *
     * @param $id
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();
    }

}
