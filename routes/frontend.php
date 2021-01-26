<?php
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/homepage');

Route::group(['namespace' => 'FrontEnd'], function () {
    Route::get('/homepage', 'WebsiteController@homepage')->name('homepage');
    Route::get('/solutions', 'WebsiteController@solutions')->name('solutions');
    Route::get('/projects', 'WebsiteController@projects')->name('projects');
    Route::get('/contact', 'WebsiteController@contact')->name('contact');
    Route::get('/service', 'WebsiteController@service')->name('service');

});
