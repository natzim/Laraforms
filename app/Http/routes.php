<?php

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', ['as' => 'index', function ()
{
    return view('index');
}]);

Route::resource('form', 'FormController');

Route::resource('user', 'UserController');

Route::any('signout', [
    'as'   => 'user.signout',
    'uses' => 'UserController@signOut'
]);

Route::get('signin', [
    'as'   => 'user.signin',
    'uses' => 'UserController@signIn'
]);

Route::post('authenticate', [
    'as' => 'user.authenticate',
    'uses' => 'UserController@authenticate'
]);
