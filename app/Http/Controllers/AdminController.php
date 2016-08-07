<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
 /**
 * 这是后台首页控制器**********2016-7-30**********
 *
 */
	public function getIndex(){
		return view('layout/adminindex');
	}		

	public  function getLogin(){
		//加载台登陆模板
		return  view('/admin/login');

	}

	public  function postLog(){

		return "AAAAA";

	}















































































































}
