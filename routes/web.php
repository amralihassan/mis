<?php

use App\Http\Controllers\BackEnd\UserController;
use App\Models\Operations\SettingOp;
use Illuminate\Support\Facades\Route;

\App::singleton('settings',function(){
    return SettingOp::first();
});

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
    Route::redirect('/', 'admin/dashboard');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // LOGOUT
    Route::get('logout', 'UtilityController@logout')->name('logout');
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
    Route::post('/general-settings', 'UtilityController@updateSettings')->name('update.settings');

    //UPDATE PASSWORD
    Route::get('update/password','UserController@updatePassword')->name('update-password');
    Route::post('update/password/save','UserController@savePassword')->name('save-password');

    // WEBSITE
    require 'backend.php';

});

// FRONTEND
require 'frontend.php';
