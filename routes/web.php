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

Route::group(['middleware' => 'auth'], function () {
    Route::get('form', 'PagesController@showForm');
    Route::post('form', 'PagesController@saveForm');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/emails/{key}', 'PagesController@generateCsvFileWithEmails');
