<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/guide', function () {
    return view('guide');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function(){

    Route::get('/', 'DashboardController@index')->name('index');
    Route::get('request', 'DashboardController@request')->name('request');
    Route::get('upload', 'DashboardController@upload')->name('upload');
    Route::resource('children', 'ChildController');
    Route::get('available', 'ChildController@available')->name('available');
    Route::resource('adoptees', 'AdopteesController');
    Route::get('adopt', 'ChildController@adopt')->name('adopt');
    Route::get('adoptees', 'AdopteesController@index')->name('index');
    Route::get('adoptee/toggle-status/{id}', 'AdopteesController@toggle_status');
    Route::get('chartjs', 'AdopteesController@chartjs');
});

