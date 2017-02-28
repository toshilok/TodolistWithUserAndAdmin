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

Auth::routes();

Route::get('home/{id}/todo', 'HomeController@index');

Route::get('profile', 'UserController@profile');

Route::get('info', 'InformationController@info');
Route::post('info', 'InformationController@update_avatar');
Route::get('home/add','HomeController@add');
Route::post('home/{id}/save','HomeController@save');
Route::get('home/{id}/edit','HomeController@edit');
Route::patch('home/{id}/update','HomeController@update');
Route::get('home/{id}/delete','HomeController@delete');
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);
