<?php

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

    Route::get(
        'users/signout',
        'UserController@signOut'
    );
    Route::post(
        'users/authenticate',
        'UserController@authenticate'
    );

});