<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FrontEnd'], function () {
    Route::get('/', 'WebsiteController@homepage')->name('home');
    Route::get('/solutions', 'WebsiteController@solutions')->name('solutions');
    Route::get('/show-solution/{id}', 'WebsiteController@showSolution')->name('show.solutions');
    Route::get('/projects', 'WebsiteController@projects')->name('projects');
    Route::get('/contact', 'WebsiteController@contact')->name('contact');
    Route::get('/service', 'WebsiteController@service')->name('service');

});
