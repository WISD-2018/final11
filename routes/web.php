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

Route::get('/snack/{id}', 'SnackController@snackdetail', function ($id) {
})->name('snack.detail');

//飼料路由
Route::get('/feed', 'FeedController@feed')->name('feed');

Route::get('/feed/{id}', 'FeedController@feeddetail', function ($id) {
})->name('feed.detail');

//營養品路由
Route::get('/nutrition', 'NutritionController@nutrition')->name('nutrition');

Route::get('/nutrition/{id}', 'NutritionController@nutritiondetail', function ($id) {
})->name('nutrition.detail');



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

//購物車新增
Route::get('/cart/{id}', 'CartController@add', function ($id) {
})->name('cart.add');

Route::get('/cart2/{id}', 'CartController@add2', function ($id) {
})->name('cart.add2');

Route::get('/cart3/{id}', 'CartController@add3', function ($id) {
})->name('cart.add3');

//購物車更新
Route::get('cart/{id}/{q}', 'CartController@update',function($id,$q){
})->name('cart.update');

//購物車刪除
Route::delete('cart/delete/{id}','CartController@delete',function($id){
})->name('cart.delete');

Route::get('checkout','CheckoutController@cartdetail');
