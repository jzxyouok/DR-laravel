<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
	//验证登录
	public function login()
	{
		if($input = Input::all())
		{
			$admin = DB::table('admin')
					->where('user_name',$input['user_name'])
					->value('user_pass');
			if($admin)
			{
				if($input['user_pass'] != Crypt::decrypt($admin))
				{
						return back()->with('msg','用户名或密码错误!');
				}else{
					 session(['user'=>$input['user_name']]);//将用户保存到session中
				     session(['logintime'=>date('Y-m-d H:i:s')]);
				     return redirect('/admin/index');
				}
			}else{
				return back()->with('msg','用户名不存在!');
			}

		}else{
			return view('admin.login');
		}
	}
}
