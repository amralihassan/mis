<?php
use Illuminate\Support\Facades\Route;
// ABOUT
Route::get('company/data', 'CompanyController@company')->name('company.data');
Route::post('/company/data/update','CompanyController@update')->name('update.company.data');

// SOLUTIONS
Route::get('solutions', 'HomeController@solutions')->name('solutions');

// CONTACT
Route::get('contact', 'HomeController@contact')->name('contact');
