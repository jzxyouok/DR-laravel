<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class GoodsController extends Controller
{

     // /?????????????????????????分类控制器开始????????????????????????????????????/ 
    //添加类别的控制器
      public function getName( Request $request){
        
        // $data=DB::table('goods')->get();
        $data=DB::select('select *,concat(path,",",id)as paths from goods order by paths');
        // dd($data);
        foreach($data as $k=>$v){
            $len=explode(',',$v['path']);
            $num=count($len)-1;
            $data[$k]['name']=str_repeat('---|@',$num).$v['name'];
           // echo  str_repeat('---|#',$num).$v['name']."<br>";
        }
        return view('/good/display',['list'=>$data]);
      }
    public function postInsert(Request $request){

         $data['name']=$request->input('name');

          $this->validate($request,[
            'name'=>'required',
            'pid'=>'required',
            ],[
              'pid.required'=>'分类名不能为空',  
              'name.required'=>'选择款式不能为空',  
            ]);

        //判断是子类还是父类
        if($request->input('pid'==0)){
            $data['pid']=0;
            $data['path']='0';
        }else{
            //添加pid对应的子类
            $data['pid']=$request->input('pid');

            $res=DB::table('goods')->where('id',$request->input('pid'))->first();
            //分装子类的path
            $data['path']=$res['path'].','.$res['id'];

            // dd($data);
        }
         $res=DB::table('goods')->insert($data);

            if($res){
                return redirect('/goods/class')->with('success','添加成功');
                    // dd($res);
            }else{
                 return back()->with('error','添加失败');
            }
    }
   // 加载显示模板  
     public function getClass(){
        // echo 'sss';
        // return view('/good/res');
         //$data=DB::table('goods');
         
          $data=DB::select('select *,concat(path,",",id)as paths from goods order by paths');//数组
          // $data=DB::table('goods')->where('name','like','%'.$request->input('key').'%')->paginate($request->input('nuw',1));
         // dd($res);
         // return view('/good/res',['list'=>$res,'request'=>$request->all()]);->paginate(2)
         return view('/good/res',['list'=>$data]);
    }


     // public function getClass(Request $request){

     //         if($request->input('key')){
     //            // return view('/user/look',['list'=>$res,'request'=>$request->all()]);
     //              $res=DB::table('goods')->where('name','like','%'.$request->input('key').'%')->paginate($request->input('nuw',10));
     //              $res=DB::select('select *,concat(path,",",id)as paths from goods order by paths');
     //            }else{
     //              $res=DB::table('goods')->paginate($request->input('nuw',2));
     //              $res=DB::select('select *,concat(path,",",id)as paths from goods order by paths');
     //            }
     //     return view('good.res',['list'=>$res,'request'=>$request->all()]);
     //    }
    //删除模板

    public function getDdl($id){
         $res=DB::table('goods')->where('id','=',$id)->delete();
        if($res){
            return redirect('/goods/class')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
       }
    //修改分类
      public function getPpl($id){
       // dd($id);
        $data=DB::table('goods')->where('id','=',$id)->first();
       // dd($data);
      return view('/good.asd',['vo'=>$data]);
   }

   //执行修改的控制器
   public function postPen(Request $request){

     $this->validate($request,[
            'name'=>'required',
            'ont'=>'required',
            'new'=>'required',
            ],[
              'name.required'=>'分类名不能为空',  
              'ont.required'=>'是否有货不能为空',
              'new.required'=>'选择是否是新产品部能为空',  
            ]);

      $data=$request->only(['name','ont','new']);
       // dd($data);
      $res=DB::table('goods')->where('id','=',$request->input('id'))->update($data);
      // dd($data);
      // dd($request->all());
      if($res){
        return redirect('/goods/class')->with('success','修改成功');
      }else{
        return back()->with('error','修改失败');
      }
   }
   // /?????????????????????????分类控制器结束?????????????????????????/ 
}
