<?php

use Illuminate\Support\Facades\Route;

//Main

Route::get('/', 'Front\MainController@index')->name('main.welcome');
Route::get('/profile', 'Front\MainController@profile')->name('main.profile');
Route::get('/about-us', 'Front\MainController@about')->name('main.about');
Route::get('/contact-us', 'Front\MainController@contact')->name('main.contact');

//Real Estate

Route::group(['prefix' => 'real-estate','namespace'=>'Front\RealEstate'], function() {
    /*Home*/
    Route::get('/','PagesController@index');
    Route::get('/about-us', 'PagesController@about')->name('about.us');
    Route::get('/history', 'PagesController@history')->name('history');
    Route::get('/philosophy', 'PagesController@philosophy')->name('philosophy');
    Route::get('/our-team', 'PagesController@team')->name('our.team');
    Route::get('/csr', 'PagesController@csr')->name('csr');
    Route::get('/qaulity-policy', 'PagesController@quality')->name('quality.policy');
    Route::get('/future-plan', 'PagesController@future')->name('future.plan');
    Route::get('/policies', 'PagesController@policies')->name('policies');
    Route::get('/project', 'PagesController@project')->name('project');
});
Route::group(['prefix' => 'it-marketing'], function() {
    /*Home*/
    Route::get('/','Front\IT\PagesController@index');
    Route::get('/services','Front\IT\PagesController@services');
    Route::get('/work-portfolio','Front\IT\PagesController@projects');
});
Route::group(['prefix' => 'construction'], function() {
    /*Home*/
    Route::get('/','Front\Construction\PagesController@index');
    Route::get('/services','Front\Construction\PagesController@services');
    Route::get('/projects','Front\Construction\PagesController@projects');
});
