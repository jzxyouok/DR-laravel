@extends('layout.adminindex')
@section('con')    
<div class="mws-panel">
    <div class="mws-panel-header">
        <span>系统基本信息</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/goods/insert" method="post">
    <div class="mws-form-row">
        
     <div class="mws-panel-body">
        <div class="mws-form-row">
             <label class="mws-form-label">操作系统</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value="{{PHP_OS}}">
            </div>
        </div>

        <div class="mws-form-row">
             <label class="mws-form-label">运行环境</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value="{{$_SERVER['SERVER_SOFTWARE']}}">
            </div>
        </div>

        <div class="mws-form-row">
             <label class="mws-form-label">版本</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value="v-1.0">
            </div>
        </div>

        <div class="mws-form-row">
             <label class="mws-form-label">上传附件限制</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value='<?php echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?>'>
            </div>
        </div>

        
        <div class="mws-form-row">
             <label class="mws-form-label">北京时间</label>
            <div class="mws-form-item">
                <input disabled="disabled" class="large" style="width:600px" type="text" value="<?php echo date('Y年m月d日 H时i分s秒')?>">
            </div>
        </div>

        <div class="mws-form-row">
             <label class="mws-form-label">服务器域名/IP</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value="{{$_SERVER['SERVER_NAME']}} [ {{$_SERVER['SERVER_ADDR']}} ]">
            </div>
        </div>

            
        <div class="mws-form-row">
             <label class="mws-form-label">Host</label>
            <div class="mws-form-item">
                <input disabled="disabled" style="width:600px" class="large" type="text" value="{{$_SERVER['SERVER_ADDR']}}">
            </div>
        </div>   
    </div>
</div>               
@endsection