@extends('layout.adminindex');
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>添加用户</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/user/insert" method="get" enctype="muitipart/form-data">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">

                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                 <input type="hidden" name="_token"   value="{csrf_token()}"/>
                                <input placeholder="-----请输入姓名-----" class="large" style="width: 100%; padding-right: 85px;"  name="name"  type="text" value="{{old('name')}}">     
                             </div>
                         </div><br>
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入年龄-----" class="large" style="width: 100%; padding-right: 85px;"  name="age"  type="text" value="{{old('age')}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入密码-----" class="large" style="width: 100%; padding-right: 85px;"  name="pass"  type="password" value="{{old('pass')}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入确认密码-----" class="large" style="width: 100%; padding-right: 85px;"  name="repass"  type="password" value="{{old('repass')}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入正确的邮箱-----" class="large" style="width: 100%; padding-right: 85px;"  name="email"  type="text" value="{{old('email')}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入正确的手机号-----" class="large" style="width: 100%; padding-right: 85px;"  name="phone"  type="text" value="{{old('phone')}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请输入正确的身份证-----" class="large" style="width: 100%; padding-right: 85px;"   name="card" type="text" value="{{old('card')}}">     
                             </div>
                         </div><br>
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input placeholder="-----请选择头像-----" class="large" style="width: 100%; padding-right: 85px;"   name="photo" type="file" value="{{old('photo')}}">     
                             </div>
                         </div>

                     </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input value="Submit" class="btn btn-danger" type="submit">
                <input value="Reset" class="btn " type="reset">
            </div>
         </form>   
    </div>
</div>               
@endsection



