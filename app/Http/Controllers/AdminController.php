<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
 /**
 * ���Ǻ�̨��ҳ������**********2016-7-30**********
 *
 */
	public function getIndex(){
		return view('layout/adminindex');
	}		

	public  function getLogin(){
		//����̨��½ģ��
		return  view('/admin/login');

	}

	public  function postLog(){

		return "AAAAA";

	}















































































































}
