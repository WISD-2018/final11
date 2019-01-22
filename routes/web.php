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
use App\employee;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index');;




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
Route::get('/admin', ['as' => 'admin.index', 'uses' => 'AdminController@index']);
Route::get('/BackstageUser', ['as' => 'admin.user.backstage_user' , 'uses' => 'AdminBackstageController@index']);
//修改使用者
Route::get('/BackstageUser/edit/{id}', ['as' => 'admin.user.backstage_useredit'   , 'uses' => 'AdminBackstageController@edit']);
Route::patch('/BackstageUser/update/{id}', ['as' => 'admin.user.backstage_userupdate' , 'uses' => 'AdminBackstageController@update']);
//刪除使用者
Route::delete('/BackstageUser/delete/{id}'  , ['as' => 'admin.user.backstage_userdelete', 'uses' => 'AdminBackstageController@destroy']);


//訂單管理
Route::get('/BackstageOrder', ['as' => 'admin.order.backstage_order' , 'uses' => 'AdminBackstageController@orderindex']);
//修改訂單
Route::get('/BackstageOrder/edit/{id}', ['as' => 'admin.order.backstage_orderedit'   , 'uses' => 'AdminBackstageController@orderedit']);
Route::patch('/BackstageOrder/update/{id}', ['as' => 'admin.order.backstage_orderupdate', 'uses' => 'AdminBackstageController@orderupdate']);
//刪除訂單
Route::delete('/BackstageOrder/delete/{id}'  , ['as' => 'admin.order.backstage_orderdelete', 'uses' => 'AdminBackstageController@orderdestroy']);


//商品管理
Route::get('/BackstageProduct', ['as' => 'admin.product.backstage_product' , 'uses' => 'AdminBackstageController@productindex']);
//修改商品
Route::get('/BackstageProduct/edit/{id}', ['as' => 'admin.product.backstage_productedit'   , 'uses' => 'AdminBackstageController@productedit']);
Route::get('/BackstageProduct/edit2/{id}', ['as' => 'admin.product.backstage_productedit2'   , 'uses' => 'AdminBackstageController@productedit2']);
Route::get('/BackstageProduct/edit3/{id}', ['as' => 'admin.product.backstage_productedit3'   , 'uses' => 'AdminBackstageController@productedit3']);
Route::patch('/BackstageProduct/update/{id}', ['as' => 'admin.product.backstage_productupdate' , 'uses' => 'AdminBackstageController@productupdate']);
Route::patch('/BackstageProduct/update2/{id}', ['as' => 'admin.product.backstage_productupdate2' , 'uses' => 'AdminBackstageController@productupdate2']);
Route::patch('/BackstageProduct/update3/{id}', ['as' => 'admin.product.backstage_productupdate3' , 'uses' => 'AdminBackstageController@productupdate3']);
//刪除商品
Route::delete('/BackstageProduct/delete/{id}'  , ['as' => 'admin.product.backstage_productdelete', 'uses' => 'AdminBackstageController@productdestroy']);
//建立商品
Route::get('/BackstageProduct/create', ['as' => 'admin.product.backstage_productcreate' , 'uses' => 'AdminBackstageController@productcreate']);
Route::post('/BackstageProduct', ['as' => 'admin.product.backstage_productstore'  , 'uses' => 'AdminBackstageController@productstore']);

Route::get('/back', 'BackController@back')->name('back');
Route::delete('back/delete/{id}','BackController@delete',function($id){
})->name('back.delete');
Route::delete('back/delete2/{id}','BackController@delete2',function($id){
})->name('back.delete2');
Route::delete('back/delete3/{id}','BackController@delete3',function($id){
})->name('back.delete3');
Route::get('/employee', 'EmployeeController@employee')->name('employee');
Route::get('/employee/{id}/edit', 'EmployeeController@edit',function($id){
})->name('employee.edit');
Route::post('employee', 'EmployeeController@store')->name('employee.store');
Route::patch('/employee/{id}', 'EmployeeController@update',function($id){
})->name('employee.update');
Route::delete('employee/delete/{id}','EmployeeController@delete',function($id){
})->name('employee.delete');
//member
Route::get('/member', ['as' => 'back.member.member' , 'uses' => 'MemberController@index']);

Route::get('/member/edit/{id}', ['as' => 'back.member.edit'   , 'uses' => 'MemberController@edit']);
Route::patch('/member/update/{id}', ['as' => 'back.member.pdate' , 'uses' => 'MemberController@update']);

Route::delete('/member/delete/{id}'  , ['as' => 'back.member.delete', 'uses' => 'MemberController@destroy']);

Route::get('/member/create', ['as' => 'back.member.create' , 'uses' => 'MemberController@productcreate']);
Route::post('/member', ['as' => 'back.member.tstore'  , 'uses' => 'MemberController@productstore']);

Route::get('/order', 'OrderController@order')->name('order');

Route::get('/error', 'BackController@error')->name('error');

Route::get('/backlogin', 'BackController@backlogin')->name('backlogin');

Route::get('/backregister', 'BackController@backregister')->name('backregister');

Route::get('/blank', 'BackController@blank')->name('blank');
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

//結帳
Route::get('checkout','CheckoutController@cartdetail');

Route::post('/orders',['as'=> 'orders.store','uses'=>'CheckoutController@store',function(Request $request){
}]);

Route::get('/user', 'OrderController@user')->name('user');

