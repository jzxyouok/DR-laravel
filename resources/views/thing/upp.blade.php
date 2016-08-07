@extends('layout.adminindex');
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>商品修改页面</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/thing/cpp" method="post">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                 <input type="hidden" name="name"   value="{csrf_token()}"/>
                                浏览数::<input placeholder="-----请输入浏览数-----" class="large" style="width: 100%; padding-right: 85px;"  name="browse"  type="text" value="{{$vo['browse']}}">     
                             </div>
                         </div><br>
                         </div><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                收藏人气: <input placeholder="-----请输入收藏人气-----" class="large" style="width: 100%; padding-right: 85px;"  name="app"  type="text" value="{{$vo['app']}}">     
                             </div>
                         </div><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                   销量 : <input placeholder="-----请输入 销量 -----" class="large" style="width: 100%; padding-right: 85px;"  name="sales"  type="text" value="{{$vo['sales']}}">     
                             </div>
                         </div><br>
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                编号 : <input placeholder="-----请输入编号-----" class="large" style="width: 100%; padding-right: 85px;"  name="number"  type="text" value="{{$vo['number']}}">     
                             </div>
                         </div><br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                大小: &nbsp;&nbsp;克拉: <input placeholder="-----请输入大小-----" class="large" style="width: 100%; padding-right: 85px;"  name="size"  type="text" value="{{$vo['size']}}">     
                             </div>
                         </div><br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                颜色: <input placeholder="-----请输入颜色-----" class="large" style="width: 100%; padding-right: 85px;"  name="color"  type="text" value="{{$vo['color']}}">     
                             </div>
                         </div><br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                净度: <input placeholder="-----请输入净度-----" class="large" style="width: 100%; padding-right: 85px;"  name="only"  type="text" value="{{$vo['only']}}">     
                             </div>
                         </div><br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                切工: <input placeholder="-----请输入切工-----" class="large" style="width: 100%; padding-right: 85px;"  name="cut"  type="text" value="{{$vo['cut']}}">     
                             </div>
                         </div><br>
                         <br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                钻石系列: <input placeholder="-----请输入钻石系列-----" class="large" style="width: 100%; padding-right: 85px;"  name="name"  type="text" value="{{$vo['name']}}">     
                             </div>
                         </div><br>  
                         <br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                钻石款式: <input placeholder="-----请输入钻石款式-----" class="large" style="width: 100%; padding-right: 85px;"  name="style"  type="text" value="{{$vo['style']}}">     
                             </div>
                         </div><br>
                          <br>  <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                钻石价格: <input placeholder="-----请输入钻石价格-----" class="large" style="width: 100%; padding-right: 85px;"  name="money"  type="text" value="{{$vo['money']}}">     
                             </div>
                         </div><br>        
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                           
                              是否显示商品  &nbsp;&nbsp;&nbsp; 
                                    NO: &nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="display"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
                                    YES: &nbsp;&nbsp;<input type="radio" value="0" name="display"> &nbsp;&nbsp;&nbsp; 
                             </div>
                         </div><br><br> 
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                <input  style="width: 100%; padding-right: 85px;"   name="pic" type="file">     
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



