<?php
namespace App\Http\Controllers;
require_once '../app/org/code/Code.class.php';

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class RegistController extends Controller
{
	//加载页面
	public function index()
	{
		return view('regist');
	}

	//创建验证码
	public function code()
	{
		$code = new \Code;
		return $code->make();
	}

	//获取并验证验证码
	public function getcode()
	{

		$code = new \Code;
//	  	$code -> get();
		$code2 = Input::all();
		if($code ->get() != strtoupper($code2['code']))
		{
			$date = [
				'status'=> 1,
				'msg'=> '验证码不对！'
			];
			return $date;
		}
	}

	//获取并验证验证码
	public function gecode()
	{
		$code = new \Code;
//	  	$code -> get();
		$code2 = Input::all();
		if($code ->get() != strtoupper($code2['code']))
		{
			$date = [
				'status'=> 1,
				'msg'=> '验证码不对！'
			];
			return $date;
		}
	}

	//判断邮箱ajax账户
	public function ajax()
	{
		$input = Input::all();
		$res = DB::table('user')->where('email',$input['email'])->first();
		if($res)
		{
			$date = [
				'status'=> 1,
				'msg'=> '邮箱已存在啦！'
			];
			return $date;
		}
	}

	//手机号码ajax验证
	public function mobile()
	{
		$input = Input::all();
	    $res = DB::table('user')->where('phone',$input['mobile'])->first();
		if($res)
		{
			$date = [
				'status'=> 1,
				'msg'=> '手机号已存在啦！'
			];
			return $date;
		}
	}

	//手机全局验证
	public function mobileform()
	{
		$res = Input::all();
		$result = DB::table('user')->insert([
			['phone'=>$res['mobile'],'pass'=>Crypt::encrypt($res['mobile_pwd'])]
		]);
		if(!$result)
		{
			return back()->with('mag','注册失败！请重新注册！');
		}else{
			return redirect('/index');
		}
	}

	//邮件全局验证
	public function emailform()
	{
		$res = Input::all();
		$result = DB::table('user')->insert([
			['email'=>$res['email'],'pass'=>Crypt::encrypt($res['email_pwd'])]
		]);
		if($result)
		{
			return redirect('/index');//前台首页
		}else{
			return back();
		}
	}

}
