<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['namespace' => 'Article', 'prefix' => 'article'], function () {
    Route::get('/index', 'ArticleController@index')->name('article.index');
    Route::get('/get-form', 'ArticleController@getForm')->name('article.get_form');
    Route::post('/save', 'ArticleController@save')->name('article.save');
    Route::delete('/destroy/{id}', 'ArticleController@destroy')->name('article.destroy');
    Route::get('/get-form/{id}', 'ArticleController@getUpdateForm')->name('article.update');
    Route::post('/save-update/{id}', 'ArticleController@update')->name('article.save_update');

});