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
//后台登录




Route::get('/', function () {
    return view('welcome');
});

//后台控制组
Route::group([],function(){

	//后台首页
	Route::get('admin/index','admin\IndexController@index');

	





	//订单管理
	Route::get('admin/order/del/{id}','admin\OrderController@del');

	Route::get('admin/order/update/','admin\OrderController@update');

	Route::resource('admin/car','admin\CarController');

	Route::resource('admin/orders','admin\OrdersController');




});

//前台控制组
Route::group([],function(){

	//前台首页
	Route::get('home/index','home\IndexController@index');
	Route::get('home/userdetails','home\UserDetailsController@userdetails');

	//个人中心
	Route::post('home/userdetails/update','home\UserDetailsController@update');

	//个人中心修改头像
	Route::get('home/userdetails/touxiang/{id}','home\UserDetailsController@touxiang');

	Route::post('home/userdetails/updatetx/{id}','home\UserDetailsController@updatetx');
	//地址管理
	Route::get('home/dizhiedit','home\AddressController@dizhiedit');

	Route::post('home/dizhiadd/{id}','home\AddressController@dizhiadd');

	Route::get('home/dizhiindex','home\AddressController@index');

	Route::get('home/dizhiupdate/{id}','home\AddressController@dizhiupdate');

	Route::post('home/dizhiupdatedo','home\AddressController@dizhiupdatedo');

	Route::get('home/dizhidel/{id}','home\AddressController@dizhidel');

	Route::get('home/dizhi/auth','home\AddressController@auth');

	//购物车
	Route::get('home/cart','home\CarController@index');

	Route::get('home/car/del','home\CarController@del');

	Route::get('home/car/add','home\CarController@add');

	Route::get('home/car/jian','home\CarController@jian');

	//购物车生成地址
	Route::get('home/car/scdz','home\CarController@scdz');

	Route::get('home/cardizhi','home\CarController@cardizhi');

	Route::get('home/cardizhido/{id}','home\CarController@cardizhido');

	Route::post('home/carupdatedo','home\CarController@carupdatedo');

	//订单
	Route::get('home/orderindex','home\OrderController@index');


});