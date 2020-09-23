<?php

use Illuminate\Support\Facades\Route;

//Main

Route::get('/', 'Front\MainController@index')->name('main.welcome');
Route::get('/profile', 'Front\MainController@profile')->name('main.profile');
Route::get('/about-us', 'Front\MainController@about')->name('main.about');
Route::get('/contact-us', 'Front\MainController@contact')->name('main.contact');

//Real Estate

Route::group(['prefix' => 'real-estate'], function() {
    /*Home*/
    Route::get('/','Front\RealEstate\MainController@index');
});
