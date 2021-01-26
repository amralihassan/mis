<?php

use Illuminate\Support\Facades\Route;


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'BackEnd'], function () {
    // Route::get('/home', 'HomeController@index')->name('home');
    // LOGOUT
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // USERS
    Route::resource('users', 'UserController')->except('show');

    // PROFILE
    Route::get('profile', 'UtilityController@profile')->name('profile');
    Route::put('profile/update/{id}', 'UtilityController@updateProfile')->name('profile.update');

    // ROLES
    Route::resource('/roles', 'RoleController');

    // ACCESS DENY
    Route::get('access-deny', 'UtilityController@accessDeny');

    // ATTACH PERMISSION TO ROLE
    Route::post('/add-permissions', 'RoleController@addPermission')->name('add.permission');

    // SETTING
    Route::get('/settings', 'UtilityController@settings')->name('settings');
    Route::post('/general-settings','UtilityController@updateSettings')->name('update.settings');


    // WEBSITE
    require 'backend.php';

});

// FRONTEND
require 'frontend.php';
