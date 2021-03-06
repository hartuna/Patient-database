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
Route::group(['middleware'=>['web']], function(){
	Route::get('/list', 'PagesController@list');
	Route::get('/list/{id}', 'PagesController@show');
	Route::get('/add', 'PagesController@add');
	Route::post('/list', 'PagesController@savePatient');
	Route::delete('/list/{id_patient}/{id}', 'PagesController@deletePreview');
});
Auth::routes();
