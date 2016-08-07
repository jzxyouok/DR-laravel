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

Route::get('/',function(){
	return  view('welcome');
});
/**
 * 前台路由*
 */
// Route::controller('/front','UserController');
/**
 * 
 *后台路由
 *
 * 
 */
//后台首页/views/admin
Route::controller('/admin','AdminController');

//后台用户添加控制器views/user 
Route::controller('/user','AddController');

//类别控制器/viewsgoods
Route::controller('/goods','GoodsController');


//商品详情表控制器views/thing
Route::controller('/thing','ThingController');   

//网站配置路由器
Route::controller('/config','ConController');

		
//轮播路油
Route::controller('/pic','PicController');