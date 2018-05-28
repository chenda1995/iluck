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



Route::get('admin/login','admin\LoginController@login');// 登录页面
Route::post('admin/dologin','admin\LoginController@dologin');// 登录
Route::get('admin/signout','admin\LoginController@signout'); //退出
Route::get('admin/code','admin\LoginController@captcha'); // 验证码

//前台登录
Route::get('home/login','home\LoginController@login');
Route::post('home/logindo','home\LoginController@logindo');  //登录
Route::get('home/loginout','home\LoginController@loginout');  //退出
Route::get('home/code','home\LoginController@code');  //验证码
Route::any('home/zhaohui','home\LoginController@zhaohui');  //找回密码  any支持多种方法
Route::any('home/savePass/{uid}','home\LoginController@savePass');  //修改密码



Route::get('home/register','home\RegisterController@register');  //注册页面
Route::post('home/zhuce','home\RegisterController@zhuce');  // 注册

Route::post('home/ycode','home\RegisterController@ycode');  //手机验证码




Route::get('/', function () {
    return view('welcome');
});

//后台控制组


Route::group(['middleware'=>'login'],function(){

	//后台首页
	Route::get('admin/index','admin\IndexController@index');
	// 修改管理员密码
	Route::get('admin/pass','admin\LoginController@pass');
	Route::post('admin/changepass','admin\LoginController@changePass');
	

	//用户管理
	Route::resource('admin/user','admin\UserController');


	Route::post('admin/user/ajaxState','admin\UserController@ajaxState');


	//商品分类  商品品牌  商品
	Route::resource('admin/type','admin\TypeController');
	Route::resource('admin/brand','admin\BrandController');
	Route::resource('admin/goods','admin\GoodsController');
	
	


	//订单管理
	Route::get('admin/order/del/{id}','admin\OrderController@del');

	Route::get('admin/order/update/','admin\OrderController@update');

	Route::resource('admin/car','admin\CarController');

	Route::resource('admin/orders','admin\OrdersController');



	//评论管理
	Route::get('admin/comment','admin\CommentController@index');
	Route::post('admin/comment/ajaxStatu','admin\CommentController@ajaxStatu');

	//收藏管理
	Route::get('admin/house','admin\HouseController@index');




	//后台友情链接
    Route::resource('admin/friendlinks','admin\FriendlinksController');

    //后台轮播图
    Route::resource('admin/show','admin\ShowController');


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

	Route::get('home/car/gid','home\CarController@gid');

	//购物车生成地址
	Route::get('home/car/scdz','home\CarController@scdz');

	Route::get('home/cardizhi','home\CarController@cardizhi');

	Route::get('home/cardizhido/{id}','home\CarController@cardizhido');

	Route::post('home/carupdatedo','home\CarController@carupdatedo');

	Route::get('home/cardddz','home\CarController@dddz');

	//订单
	Route::get('home/orderindex','home\OrderController@index');

	Route::get('home/orderddxq','home\OrderController@ddxq');

	Route::get('home/order/shouhuo','home\OrderController@shouhuo');

	Route::get('home/order/xq/{id}','home\OrderController@xq');

	Route::get('home/order/del','home\OrderController@del');

	//订单回收
	Route::get('home/rec/index','home\RecoveryController@index');

	Route::get('home/rec/huanyuan/{id}','home\RecoveryController@huanyuan');

	Route::get('home/rec/del/{id}','home\RecoveryController@del');


	
	//商品列表页
	Route::get('home/list','home\ListController@index');
	//商品详情页
	Route::get('home/spxq/{gid}','home\SpxqController@index');


	//我的收藏
	Route::get('home/house','home\HouseController@index');






});