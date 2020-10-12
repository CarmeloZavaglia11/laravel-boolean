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

Route::get('/', 'StaticPageController@home')->name('StaticP.home');
Route::get('/contatti', 'StaticPageController@contatti')->name('StaticP.contatti');
Route::get('/studenti', 'Students@studenti')->name('Students.studenti');
