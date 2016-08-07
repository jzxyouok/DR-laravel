@extends('layout.adminindex');
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>用户修改页面</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/user/update" method="post">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                 <input type="hidden" name="name"   value="{csrf_token()}"/>
                                姓名::<input placeholder="-----请输入姓名-----" class="large" style="width: 100%; padding-right: 85px;"  name="name"  type="text" value="{{$vo['name']}}">     
                             </div>
                         </div><br>
                         </div><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                金额: <input placeholder="-----请输入金额-----" class="large" style="width: 100%; padding-right: 85px;"  name="money"  type="text" value="{{$vo['money']}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                邮箱: <input placeholder="-----请输入正确的邮箱-----" class="large" style="width: 100%; padding-right: 85px;"  name="email"  type="text" value="{{$vo['email']}}">     
                             </div>
                         </div><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <!-- <input placeholder="请输入正确的权限" class="large" style="width: 100%; padding-right: 85px;"  name="state"  type="text" value="{{$vo['state']}}">      -->
                              状态  &nbsp;&nbsp;&nbsp; 
                                    用户: &nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="state"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
                                    管理员: &nbsp;&nbsp;<input type="radio" value="0" name="state"> &nbsp;&nbsp;&nbsp; 
                             </div>
                         </div><br><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                            VIP: &nbsp;&nbsp;&nbsp;  
                                    是: &nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="vip">  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    否: &nbsp;&nbsp;<input type="radio" value="0" name="vip"> &nbsp;&nbsp;&nbsp; 
                             </div>
                         </div><br> <br>
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input  style="width: 100%; padding-right: 85px;"   name="photo" type="file">     
                             </div>
                         </div>
                         <input type="hidden" name="id" value="{{$vo['id']}}">
                     </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input value="Submit" class="btn btn-danger" type="submit">
                <input value="Reset" class="btn " type="reset">
            </div>
            </from>
    </div>
</div>               
@endsection



