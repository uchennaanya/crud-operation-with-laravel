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
	
    return view('home');
});


//	 deletes a record

Route::get('/create/delete/{id}', [
	
	'uses' => 'CrudController@delete',
	'as' => 'create.delete'
	
]);

//	creates a record

Route::post('/record', [
	
	'uses' => 'CrudController@store'
]);


//	updates record

Route::get('/update/{id}', [
	
	'uses' => 'CrudController@update',
	'as' => 'create.update'
	
]);


Route::get('/create', [
	
	'uses' => 'CrudController@create'
	
]);

Route::post('update/{id}', [
	
	'uses' => 'CrudController@save',
	'as' => 'update.save'
]);




//Route::get('/show', [
//	
//	'uses' => 'CrudController@show'
//]);
//
//Route::get('/edit', [
//	
//	'uses' => 'CrudController@edit'
//	
//]);
//
//
//Route::get('/destroy', [
//	
//	'uses' => 'CrudController@destroy'
//	
//]);
//
//

Route::get('/record', [
	
	'uses' => 'CrudController@record'
	
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
