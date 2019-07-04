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
Route::get('/','KindController@index')->name('Kind.index');
Route::group(['prefix'=>'kinds'], function (){
    Route::get('/add','KindController@create')->name('Kind.create');
    Route::post('/store','KindController@store')->name('Kind.store');
});
Route::group(['prefix'=>'books'],function (){
    Route::get('/list','BookController@showList')->name('Book.list');
    Route::get('/create','BookController@create')->name('Book.create');
    Route::post('/store','BookController@store')->name('Book.store');
    Route::get('/{id}/delete','BookController@delete')->name('Book.delete');
    Route::get('/{id}/detail','BookController@detail')->name('Book.detail');
    Route::get('/{id}/edit','BookController@edit')->name('Book.edit');
    Route::post('/{id}/upgrade','BookController@upgrade')->name('Book.upgrade');
    Route::get('{id}/filter','BookController@filterByKind')->name('Book.filter');
});



