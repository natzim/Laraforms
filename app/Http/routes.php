<?php

Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function ()
{
    return view('index');
});

Route::resource('form', 'FormController');

Route::resource('user', 'UserController');
