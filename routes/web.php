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

//零食路由
Route::get('/snack', 'SnackController@snack')->name('snack');

Route::get('/snackp1', 'SnackController@snackp1')->name('snackp1');

Route::get('/snackp2', 'SnackController@snackp2')->name('snackp2');

Route::get('/snackp3', 'SnackController@snackp3')->name('snackp3');

Route::get('/snackp4', 'SnackController@snackp4')->name('snackp4');

//飼料路由
Route::get('/feed', 'FeedController@feed')->name('feed');

Route::get('/feedp1', 'FeedController@feedp1')->name('feedp1');

Route::get('/feedp2', 'FeedController@feedp2')->name('feedp2');

Route::get('/feedp3', 'FeedController@feedp3')->name('feedp3');

Route::get('/feedp4', 'FeedController@feedp4')->name('feedp4');

//營養品路由
Route::get('/nutrition', 'NutritionController@nutrition')->name('nutrition');