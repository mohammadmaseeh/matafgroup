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
Route::group(['prefix' => 'education'], function() {
    /*Home*/
    Route::get('/','Front\Education\PagesController@index');
    Route::get('/services','Front\Education\PagesController@services');
    Route::get('/courses','Front\Education\PagesController@courses');
});
Route::group(['prefix' => 'consultation'], function() {
    /*Home*/
    Route::get('/','Front\Consultation\PagesController@index');
    Route::get('/services','Front\Consultation\PagesController@services');
    Route::get('/projects','Front\Consultation\PagesController@projects');
});
Route::group(['prefix' => 'recycling'], function() {
    /*Home*/
    Route::get('/','Front\Recycling\PagesController@index');
    Route::get('/services','Front\Recycling\PagesController@services');
    Route::get('/projects','Front\Recycling\PagesController@projects');
});
Route::group(['prefix' => 'robotics-agriculture'], function() {
    /*Home*/
    Route::get('/','Front\RoboticsAgriculture\PagesController@index');
    Route::get('/services','Front\RoboticsAgriculture\PagesController@services');
});

Route::group(['prefix' => 'health-wellness'], function() {
    /*Home*/
    Route::get('/','Front\HealthWellness\PagesController@index');
    Route::get('/services','Front\HealthWellness\PagesController@services');
    Route::get('/courses','Front\HealthWellness\PagesController@courses');
});

Route::group(['prefix' => 'hospitality'], function() {
    /*Home*/
    Route::get('/','Front\Hospitality\PagesController@index');
    Route::get('/services','Front\Hospitality\PagesController@services');
    Route::get('/courses','Front\Hospitality\PagesController@courses');
});

Route::group(['prefix' => 'investment-portfolio'], function() {
    /*Home*/
    Route::get('/','Front\Investment\PagesController@index');
    Route::get('/services','Front\Investment\PagesController@services');
    Route::get('/courses','Front\Investment\PagesController@courses');
});

Route::group(['prefix' => 'international-trading'], function() {
    /*Home*/
    Route::get('/','Front\Trading\PagesController@index');
    Route::get('/services','Front\Trading\PagesController@services');
    Route::get('/courses','Front\Trading\PagesController@courses');
});