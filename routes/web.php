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

//beranda

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('layouts.master');
// });

//login
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });

Auth::routes();

Route::get('/home', 'HomeController@index');
// Route::get('/home', 'HomeController@index')->name('home');

//question
Route::get('/question','ControllerQuestion@index');
Route::get('/question/create','ControllerQuestion@create');
Route::post('/question','ControllerQuestion@store');
Route::get('/question/{question}','ControllerQuestion@show');

//answer
Route::get('/answer/create/{question}','ControllerAnswer@create');
Route::post('/answer/{question}','ControllerAnswer@store');