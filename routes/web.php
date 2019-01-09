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

Route::get('/back', function () {
    return view('back.backindex');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

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

Route::get('/nutritionp1', 'NutritionController@nutritionp1')->name('nutritionp1');

Route::get('/nutritionp2', 'NutritionController@nutritionp2')->name('nutritionp2');

Route::get('/nutritionp3', 'NutritionController@nutritionp3')->name('nutritionp3');

Route::get('/nutritionp4', 'NutritionController@nutritionp4')->name('nutritionp4');

//後台管理
Route::get('/back', 'BackController@back')->name('back');

Route::get('/error', 'BackController@error')->name('error');

Route::get('/backlogin', 'BackController@backlogin')->name('backlogin');

Route::get('/backregister', 'BackController@backregister')->name('backregister');

Route::get('/blank', 'BackController@blank')->name('blank');

Route::get('/charts', 'BackController@charts')->name('charts');

Route::get('/forgotpassword', 'BackController@forgotpassword')->name('forgotpassword');

Route::get('/tables', 'BackController@tables')->name('tables');

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/checkout', 'CheckoutController@index')->name('checkout.index');