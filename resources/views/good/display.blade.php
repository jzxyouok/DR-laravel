@extends('layout.adminindex');
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>添加类别</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/goods/insert" method="post">
            {{csrf_field()}}
            <div class="mws-form-row">
                <div class="mws-form-item">
                     <div class="mws-form-item">
                        <label class="mws-form-label">顶级系列</label>
                        <div class="mws-form-item">
                            <select class="large" name="pid" >
                               <!--  <option>顶级系列</option> -->
                                @foreach($list as $v)
									<option value="{{$v['id']}}">{{$v['name']}}</option>
                                @endforeach 
                            </select>
                        </div><br><br><br><br>
                         <div class="fileinput-holder" style="position: relative;">
                         	 <label class="mws-form-label">款式</label>
                            <div class="mws-form-item">
                                <input class="large" style="width: 100%; padding-right: 85px;"   name="name" type="text" placeholder="-----请选择款式-----">     
                             </div>
                         </div>

                     </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input value="Submit" class="btn btn-danger" type="submit">
                <input value="Reset" class="btn " type="reset">
            </div>
    </div>
</div>               
@endsection



