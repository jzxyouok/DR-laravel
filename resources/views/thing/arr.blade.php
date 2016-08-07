@extends('layout.adminindex');
@section('con')    




<div class="mws-panel">
    <div class="mws-panel-header" style="height:30px">
        <span>添加用户</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/thing/ar" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">
</div><br>
<div class="fileinput-holder" style="position: relative;" >
<div class="mws-form-item">
    <input placeholder="-----请输入浏览数-----" class="large" style="width: 100%; padding-right: 85px;"  name="browse"  type="text" value="{{old('browse')}}">     
 </div>
</div><br> 
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请输入收藏人气-----" class="large" style="width: 100%; padding-right: 85px;"  name="app"  type="text" value="{{old('app')}}">     
 </div>
</div><br> 
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请输入销量-----" class="large" style="width: 100%; padding-right: 85px;"  name="sales"  type="text" value="{{old('sales')}}">     
 </div>
</div><br> 
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请输入编号-----" class="large" style="width: 100%; padding-right: 85px;"  name="number"  type="text" value="{{old('number')}}">     
 </div>
</div><br> 
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请输入大小-----" class="large" style="width: 100%; padding-right: 85px;"  name="size"  type="text" value="{{old('size')}}">     
 </div>
</div><br> 
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请输入颜色-----" class="large" style="width: 100%; padding-right: 85px;"   name="color" type="text" value="{{old('color')}}">     
 </div>
</div><br>
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请选择净度-----" class="large" style="width: 100%; padding-right: 85px;"   name="only" type="text" value="{{old('only')}}">     
 </div>
</div><br>
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请选择切工-----" class="large" style="width: 100%; padding-right: 85px;"   name="cut" type="text" value="{{old('cut')}}">     
 </div>
</div><br>
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请选择钻戒系列-----" class="large" style="width: 100%; padding-right: 85px;"   name="name" type="text" value="{{old('name')}}">     
 </div>
</div><br>
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请选择钻戒款式-----" class="large" style="width: 100%; padding-right: 85px;"   name="style" type="text" value="{{old('style')}}">     
 </div>
</div><br>
<div class="fileinput-holder" style="position: relative;">
<div class="mws-form-item">
    <input placeholder="-----请选择钻石图片-----" class="large" style="width: 100%; padding-right: 85px;"   name="pic" type="file" value="{{old('pic')}}">     
 </div>
</div>
                     </div>
                </div>
            </div><br>
            <div class="mws-button-row">
                <input value="Submit" class="btn btn-danger" type="submit">
                <input value="Reset" class="btn " type="reset">
            </div>
         </form>   
    </div>
</div>               
@endsection



