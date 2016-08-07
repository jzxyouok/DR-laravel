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
//前台首页
Route::get('/', function () {
    return view('welcome');
});

//后台登录
Route::any('/admin/login','AdminLoginController@login');//any(所有的路由都能走这个控制器)



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


	Route::get('/test','RegistController@test');
