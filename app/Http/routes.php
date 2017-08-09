<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('about_us', function () {
        return view('about_us');
    });

    Route::get('tutorial', function () {
        return view('tutorial');
    });

    // Authentication Routes...
    Route::auth();
    Route::resource('admin', 'AdminController');

    Route::resource('home', 'HomeController');
    Route::get('explore_reporters', 'HomeController@exploreReporters');
    Route::get('update_profile', 'HomeController@updateProfile');

    Route::resource('report', 'ReportController');
    Route::get('subtypes/{reportType}', 'ReportController@getSubTypes');
    Route::get('download/{id}', 'ReportController@download');

    Route::post('opinion/{id}', 'OpinionController@store');
    Route::get('download_extra/{id}', 'OpinionController@download_extra');

});

