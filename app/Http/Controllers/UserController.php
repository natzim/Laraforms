<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FormFormRequest;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

	/**
	 * Show the form for creating a new user
	 *
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return view('users.create');
	}

	/**
	 * Store a newly created user in storage
	 */
	public function store(UserFormRequest $request)
	{
		$user = new User;

		$user->username = $request->username;
		$user->password = Hash::make($request->password);

		$user->save();
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

		return view('users.show', ['user' => $user]);
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
