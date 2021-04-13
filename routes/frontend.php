<?php
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'FrontEnd'], function () {
    Route::get('/', 'WebsiteController@homepage')->name('home');
    Route::get('/about', 'WebsiteController@about')->name('about');
    Route::get('/network-solutions', 'WebsiteController@networkSolutions')->name('network-solutions');
    Route::get('/software-solutions', 'WebsiteController@softwareSolutions')->name('software-solutions');
    Route::get('/show-solution/{id}', 'WebsiteController@showSolution')->name('show.solutions');
    Route::get('/projects', 'WebsiteController@projects')->name('projects');
    Route::get('/contact', 'WebsiteController@contact')->name('contact');
    Route::post('/contact/store', 'WebsiteController@storeContacts')->name('contacts.store');

});
