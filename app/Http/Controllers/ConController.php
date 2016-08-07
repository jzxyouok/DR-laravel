<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Config;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Http\Requests\ArRequest;
class ConController extends Controller
{
    //进入网站配置页面
    public function getXxx(){

        return view('/config/config');
    }

    public  function getWww(){

    	return view('./config/edit');

    }
    //public function getAll(){
    	// dd($data);
     // $data=DB::table('user')->where('id','=',1)->first();
     // dd($data);
     // return view('/config.xxx',['vo'=>$data]);
   // }

    //修改网站配置 
    	public  static function Disc(ArRequest $request){

    		// $res = Input::get();
    		// dd($res);
			//判断是否有图片上传
		$res = $request->hasFile('pic');
		// dd($res);
		if($res){
			//获取随机图片名和后缀
			$picpath = time().rand(1000,9999).'.'.$request->file('pic')->getClientOriginalExtension();
			// dd($picpath);
			//有图片上传  php必须使用图片的相对路径(index.php同级目录)绝对路径 指D:盘符
			$request->file('pic')->move(Config::get('app.upload_dir'),$picpath);
			//封装图片的上传数据  路径存储的时候必须使用绝对路径
			$data['pic'] = trim(Config::get('app.upload_dir').$picpath,'.');
		}
			//标题
		$data['title'] = $request->input('title');
			//内容
		$data['key'] = $request->input('key');
			//描述
		$data['disc'] = $request->input('disc');
		
		$data['status']=$request->input('status');

		 return $data;
		// dd($data);
		} 
	/*
		执行修改
		/admin/article/update
	
	*/
	public function postDisc(ArRequest $request){
		//验证数据

		//处理数据
		$data = self::Disc($request);
		//执行修改
		 // dd($data);
		 $res = DB::table('config')->where('id','=',1)->update($data);
		// dd($res);
		if($res){
			return redirect('config/www')->with('success','修改成功');
		}else{
			return back()->with('error','修改失败');
		}
	}



    }	

