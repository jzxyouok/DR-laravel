<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
 //商品详情表控制器
 //
class ThingController extends Controller

{
   
    //浏览商品方法
     public function getString(Request $request){
       
        if($request->input('key')){
             // return view('/user/look',['list'=>$res,'request'=>$request->all()]);
          $res=DB::table('thing')->where('name','like','%'.$request->input('key').'%')->paginate($request->input('nuw',10));
        }else{
            $res=DB::table('thing')->paginate($request->input('nuw',10));

        }
         return view('/thing/show',['list'=>$res,'request'=>$request->all()]);
    }
    //删除商品的方法
    public function getDel($id){
        // dd('AAAAA');
        $res=DB::table('thing')->delete($id);
         if($res){
            //添加成功重定向
            return redirect('/thing/string')->with('success','删除成功');
        }else{
            //添加失败
            //做闪存
             $request->flash();
             return back()->with('error','删除失败');
        }

    }
    //加载添加商品的表单
    public function getArr(){
        return  view('thing/arr');
    }
    //添加商品方法
    public function postAr(Request $request){

            // dd($request);
             $this->validate($request,[
            'browse'=>'required',
            'app'=>'required',
            'sales'=>'required',
            'number'=>'required',
            'size'=>'required',
            'color'=>'required',
            'only'=>'required',
            'cut'=>'required',
            'pic'=>'required',
            'name'=>'required',
            'style'=>'required',
            'money'=>'required',
            ],[
              'browse.required'=>'浏览数不能为空',  
              'app.required'=>'收藏人气不能为空',  
              'sales.required'=>'销量不能为空',  
              'number.required'=>'编号不能为空',  
              'size.required'=>'钻戒大小不能为空',  
              'color.required'=>'钻戒颜色不能为空',  
              'only.required'=>'净度不能为空',  
              'cut.required'=>'切工不能为空',  
              'pic.required'=>'图片不能为空',  
              'name.required'=>'钻戒系列不能为空',  
              'style.required'=>'钻戒款式不能为空',  
              'money.required'=>'钻戒价格不能为空',  
            ]);
           $arr['browse']=$request->input('browse');
           $arr['app']=$request->input('app');     
           $arr['sales']=$request->input('sales');

           $arr['number']=$request->input('number');     
           $arr['size']=$request->input('size');     
           $arr['color']=$request->input('color');  

           $arr['only']=$request->input('only');     
           $arr['cut']=$request->input('cut');  
           $arr['name']=$request->input('name');

                  
           $arr['style']=$request->input('style');   
           $arr['pic']=$request->input('pic');  
           $arr['money']=$request->input('money');  
           $arr['display']=1;   
            
            // $res=$request->all();
            // $res = $request->except(['_token','repass']);
            // dd($res);
            // exit;
            $res=DB::table('thing')->insert($arr);
            
            if($res){
                //添加成功重定向
                return redirect('/thing/string')->with('success','添加成功');
            }else{
                //添加失败
                //做闪存
                 $request->flash();
                 return back()->with('error','添加失败');
            } 
    }

    //加载修改表单
     public function  getUpp($id){
       // dd($id);
        $data=DB::table('thing')->where('id','=',$id)->first();
       // dd($data);
      return view('/thing/upp',['vo'=>$data]);
     }
     
    //执行商品修改页面
     public  function postCpp(Request $request){

       $this->validate($request,[
            'browse'=>'required',
            'app'=>'required',
            'sales'=>'required',
            'number'=>'required',
            'size'=>'required',
            'color'=>'required',
            'only'=>'required',
            'cut'=>'required',
            'pic'=>'required',
            'name'=>'required',
            'style'=>'required',
            'money'=>'required',
            'display'=>'required',
            ],[
              'browse.required'=>'浏览数不能为空',  
              'app.required'=>'收藏人气不能为空',  
              'sales.required'=>'销量不能为空',  
              'number.required'=>'编号不能为空',  
              'size.required'=>'钻戒大小不能为空',  
              'color.required'=>'钻戒颜色不能为空',  
              'only.required'=>'净度不能为空',  
              'cut.required'=>'切工不能为空',  
              'pic.required'=>'图片不能为空',  
              'name.required'=>'钻戒系列不能为空',  
              'style.required'=>'钻戒款式不能为空',  
              'money.required'=>'钻戒价格不能为空',  
              'display.required'=>'选择商品是否显示不能为空',  
            ]);

        $res=$request->all();
      $data=$request->only(['browse','app','sales','number','size','color','only','cut','pic','name','style','money','display']) ;
      // dd($res);
       $res=DB::table('thing')->where('id','=',$request->input('id'))->update($data);
      
        if($res){
            //添加成功重定向
            return redirect('/thing/string')->with('success','添加成功');
        }else{
            //添加失败
            //做闪存
             $request->flash();
             return back()->with('error','添加失败');
        }


        }


}



