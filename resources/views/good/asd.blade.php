@extends('layout.adminindex');
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>分区修改页面</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/goods/pen" method="post">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">
                         <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                 <input type="hidden" name="name"   value="{csrf_token()}"/>
                                分类名:<br><br>
                                <input placeholder="-----请输入姓名-----" class="large" style="width: 100%; padding-right: 85px;"  name="name"  type="text" value="{{$vo['name']}}">     
                             </div>
                         </div><br>
                         </div><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                                是否有货&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                    YES: &nbsp;&nbsp;&nbsp;<input type="radio" value="1" name="ont"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; 
                                    NOT: &nbsp;&nbsp;<input type="radio" value="0" name="ont"> &nbsp;&nbsp;&nbsp; 
                             </div>
                         </div><br><br> 
                          <div class="fileinput-holder" style="position: relative;">
                            <div class="mws-form-item">
                            是否新产品: &nbsp;&nbsp;&nbsp;  
                                    YES: &nbsp;&nbsp;&nbsp;<input type="radio" value="1"  name="new">  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    NOT: &nbsp;&nbsp;<input type="radio" value="0" name="new"> &nbsp;&nbsp;&nbsp; 
                             </div>
                         </div><br> <br>
                         <input type="hidden" name="id" value="{{$vo['id']}}">
                     </div>
                </div>
            </div>
            <div class="mws-panel-header">
                <div class="mws-button-row">
                <input value="Submit" class="btn btn-danger" type="submit">
                <input value="Reset" class="btn " type="reset">
            </div>
            </div>
        </from>
    </div>
</div>               
@endsection



