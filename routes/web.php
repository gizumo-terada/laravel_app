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
Route::resource('todo', 'TodoController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/gizumo_lv1','TaskController@lv1')->name('gizumo_lv1');
Route::get('/gizumo_lv2','TaskController@lv2')->name('gizumo_lv2');
Route::get('/gizumo_lv4','TaskController@lv4')->name('gizumo_lv4');
Route::post('/gizumo_lv2Ans','TaskController@lv2Ans')->name('gizumo_lv2Ans');