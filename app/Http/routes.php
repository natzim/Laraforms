<?php

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', ['as' => 'index', function ()
{
    return view('index');
}]);

Route::get('dashboard', [
    'as'         => 'dashboard',
    'middleware' => 'auth',
    function ()
    {
        return view('dashboard');
    }
]);

/**
 * Form REST
 */

Route::resource('form', 'FormController');

/**
 * User REST
 */

Route::any('user/signout', [
    'as'   => 'user.signout',
    'uses' => 'UserController@signOut'
]);

Route::get('user/signin', [
    'as'   => 'user.signin',
    'uses' => 'UserController@signIn'
]);

Route::post('user/authenticate', [
    'as'   => 'user.authenticate',
    'uses' => 'UserController@authenticate'
]);

Route::resource('user', 'UserController');

/**
 * Ajax views
 */
Route::get('snippets/form/element/new', function ()
{
    return view('snippets.form.element.new');
});
