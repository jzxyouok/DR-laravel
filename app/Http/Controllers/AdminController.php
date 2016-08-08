<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	//加载后台主页模板
	public function index(){
		return view('layout/adminindex');
	}
}
