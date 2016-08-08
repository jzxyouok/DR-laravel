<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//后台首页
Route::get('/admin/index','AdminController@index');
//后台用户添加控制器
Route::controller('/user','AddController');
//类别控制器/viewsgoods
Route::controller('/goods','GoodsController');
//商品详情表控制器views/thing
Route::controller('/thing','ThingController');
//网站配置路由器
Route::controller('/config','ConController');
//轮播路油
Route::controller('/pic','PicController');


//后台登录
Route::any('/admin/login','AdminLoginController@login');
//前台登录注册  ----------使用laravel自带的安全机制去保护我们表单提交过滤
Route::group(['meddleware'=>'web'],function(){
//前台注册
	Route::get('/regist','RegistController@index');//加载注册模板
	Route::get('/code','RegistController@code');//创建验证码
	Route::post('/getcode','RegistController@getcode');//获取验证码并验证
	Route::post('/gecode','RegistController@gecode');//获取验证码并验证
	Route::post('/ajx','RegistController@ajax');//验证邮箱
	Route::post('/mobile','RegistController@mobile');//手机号码验证
	Route::post('/mobileform','RegistController@mobileform');
	Route::post('/emailform','RegistController@emailform');
//前台登录
	Route::any('/login','LoginController@index');//加载登录模板
	Route::post('/loginname','LoginController@ajx');//验证用户名是存在
	Route::post('/form','LoginController@verify');//表单提交验证
});




