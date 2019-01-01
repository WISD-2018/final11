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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/snack', 'SnackController@snack')->name('snack');

Route::get('/snackp1', 'SnackController@snackp1')->name('snackp1');

Route::get('/snackp2', 'SnackController@snackp2')->name('snackp2');

Route::get('/feed', 'FeedController@feed')->name('feed');

Route::get('/nutrition', 'NutritionController@nutrition')->name('nutrition');