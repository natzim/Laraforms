<?php

/**
 * Frontend
 */

Route::get('/', function ()
{
    return view('index');
});

/**
 * API
 */

Route::group(['prefix' => 'api'], function ()
{

    /**
     * Forms
     */

    Route::post(
        'forms',
        'FormController@create'
    );
    Route::get(
        'forms/{id}',
        'FormController@show'
    );
    Route::put(
        'forms/{id}',
        'FormController@update'
    );
    Route::delete(
        'forms/{id}',
        'FormController@delete'
    );
    Route::get(
        'forms',
        'FormController@list'
    );

    /**
     * Users
     */

    Route::get(
        'account/authcheck',
        'UserController@authCheck'
    );
    Route::get(
        'account/signout',
        'UserController@signOut'
    );
    Route::post(
        'account/authenticate',
        'UserController@authenticate'
    );

    Route::post(
        'users',
        'UserController@create'
    );
    Route::get(
        'users/{id}',
        'UserController@show'
    );
    Route::put(
        'users/{id}',
        'UserController@update'
    );
    Route::delete(
        'users/{id}',
        'UserController@delete'
    );
    Route::get(
        'users',
        'UserController@list'
    );

});