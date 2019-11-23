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
    return view('Form/index');
});

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('Form/index');
});
// Route::get('form', 'FormController@create')->name('form.create');
// Route::post('form', 'FormController@store')->name('form.store');
Route::get('form', 'FormController@index')->name('form.index');
Route::get('/', 'FormController@index');
Route::post('/form/{id}', 'FormController@update');
Route::resource('form', 'FormController');