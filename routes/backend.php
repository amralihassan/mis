<?php
use Illuminate\Support\Facades\Route;
// ABOUT
Route::get('company/data', 'CompanyController@company')->name('company.data');
Route::post('/company/data/update', 'CompanyController@update')->name('update.company.data');

// CAROUSEL
Route::resource('carousels', 'CarouselController')->except('show');

// PROJECTS
Route::resource('projects', 'ProjectController');
Route::post('project/upload/image','ProjectController@uploadProjectImage')->name('image.store');
Route::delete('project/delete/image/{image_id}','ProjectController@deleteProjectImage')->name('image.delete');

// CONTACT
Route::resource('contacts', 'ContactController')->only('index', 'destroy');
