<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class LoginConTroller extends Controller
{
    //加载登录模板
	public function index()
	{
		return view('login');
	}

	//判断用户名是否不存在
	public function ajx()
	{
		$input = Input::all();
		$res = DB::table('user')
			 ->where('email',$input['name'])
			->orwhere('phone',$input['name'])
			 ->get();
		if(!$res )
		{
			$date = [
				"status" => 1,
					'msg'=> "用户不存在！"
			];
			return $date;
		}

	}

	//登录表单提交
	public function verify()
	{
		$input = Input::all();//接收表单提取过来的所有的值
		$res = DB::table('user')
			 ->where('email',$input['name'])
			 ->orwhere('phone',$input['name'])
			 ->value('pass');
		if($input['pass'] != Crypt::decrypt($res))
		{
			return back()->with("msg","密码错误！");
		}else{
			return redirect('/index');
		}
	}
}
