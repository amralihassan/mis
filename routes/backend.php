<?php
use Illuminate\Support\Facades\Route;
// ABOUT
Route::get('company/data', 'CompanyController@company')->name('company.data');
Route::post('/company/data/update','CompanyController@update')->name('update.company.data');

// CAROUSEL
Route::resource('carousels','CarouselController')->except('show');

// SOLUTIONS
Route::resource('solutions','SolutionController')->except('show');

// CONTACT
Route::get('contact', 'HomeController@contact')->name('contact');
