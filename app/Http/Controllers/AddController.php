<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
 // /?????????????????????????用户详情控制器开始???????????????????????????????????????????????/ 
class AddController extends Controller
{
    //
    //用户添加的控制器user/add
    public function getAdd(){
    	return view('/user/add');
    	// return   'AAAAAAAAAAAAAAA';
    }

     //查看用户详情表的控制器
    public function getLook(Request $request){
       
        if($request->input('key')){
             // return view('/user/look',['list'=>$res,'request'=>$request->all()]);
          $res=DB::table('user')->where('name','like','%'.$request->input('key').'%')->paginate($request->input('nuw',10));
        }else{
            $res=DB::table('user')->paginate($request->input('nuw',10));

        }
         return view('/user/look',['list'=>$res,'request'=>$request->all()]);
    }
    //执行用户添加的控制器 user/insert
    public function getInsert(Request $request){
      // $ress = $request->except(['_token']);
      //   dd($ress);   
        // dd($_PSOT);
       
        $this->validate($request,[
            'name'=>'required',
            'age'=>'required',
            'pass'=>'required',
            'repass'=>'required|same:pass',
            'email'=>'required|email',
            'phone'=>'required',
            'card'=>'required',
            'photo'=>'required',
            ],[
              'name.required'=>'姓名不能为空',  
              'age.required'=>'年龄不能为空',  
              'pass.required'=>'密码不能为空',  
              'repass.required'=>'重复密码不一致',  
              'email.required'=>'邮箱不能为空',  
              'email.email'=>'邮箱格式不正确',  
              'phone.required'=>'手机号不能为空',  
              'card.required'=>'身份证不能为空',  
              'photo.required'=>'照片不能为空',
            ]);
          $res=$request->all();
          $res = $request->except(['_token','repass']);
          // dd($res);
          // exit;
          $res=DB::table('user')->insert($res);
          
          if($res){
              //添加成功重定向
              return redirect('/user/look')->with('success','添加成功');
          }else{
              //添加失败
              //做闪存
               $request->flash();
               return back()->with('error','添加失败');
          }
    }


    //执行删除的控制器
   public function getDel($id){
    // echo $id;
    $res=DB::table('user')->where('id','=',$id)->delete();
    if($res){
        return redirect('/user/look')->with('success','删除成功');
    }else{
        return back()->with('error','删除失败');
    }
   }


   //加载修改表单的页面
   public function getUp($id){
       // dd($id);
        $data=DB::table('user')->where('id','=',$id)->first();
       // dd($data);
      return view('/user.up',['vo'=>$data]);
   }

   //执行修改的控制器
   public function postUpdate(Request $request){
      $data=$request->only(['name','money','email','state','vip']) ;
       // dd($data);
      $res=DB::table('user')->where('id','=',$request->input('id'))->update($data);
      // dd($data);
      // dd($request->all());
      if($res){
        return redirect('/user/look')->with('success','修改成功');
      }else{
        return back()->with('error','修改失败');
      }
   }
   // /?????????????????????????用户控制器结束???????????????????????????????????????????????/ 
   // /?????????????????????????                 ????????????????????????????????????????????/ 
   // /????????????????????????                  ???????????????????????????????????????????????/ 
  

   

}
