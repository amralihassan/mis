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

    Route::get('/access', 'WebsiteController@access')->name('access');
    Route::get('/client', 'WebsiteController@client')->name('client');
    Route::get('/elearn', 'WebsiteController@elearn')->name('elearn');
    Route::get('/ems', 'WebsiteController@ems')->name('ems');
    Route::get('/fire', 'WebsiteController@fire')->name('fire');
    Route::get('/fms', 'WebsiteController@fms')->name('fms');
    Route::get('/infra', 'WebsiteController@infra')->name('infra');
    Route::get('/mms', 'WebsiteController@mms')->name('mms');
    Route::get('/pms', 'WebsiteController@pms')->name('pms');
    Route::get('/smart', 'WebsiteController@smart')->name('smart');
    Route::get('/time', 'WebsiteController@time')->name('time');
    Route::get('/voip', 'WebsiteController@voip')->name('voip');

});
