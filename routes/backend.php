<?php
use Illuminate\Support\Facades\Route;
// ABOUT
Route::get('about', 'HomeController@about')->name('about');

// SOLUTIONS
Route::get('solutions', 'HomeController@solutions')->name('solutions');

// CONTACT
Route::get('contact', 'HomeController@contact')->name('contact');
