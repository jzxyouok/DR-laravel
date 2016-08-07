@extends('layout.adminindex');
@section('con')    
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>Inline Form</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form class="mws-form" action="/config/disc" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站标题</label>
                    <div class="mws-form-item">
                        <input class="medium" type="text" name="title">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站关键字</label>
                    <div class="mws-form-item">
                        <input class="large" type="text" name="key">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站描述</label>
                    <div class="mws-form-item">
                        <textarea class="large" rows="2" cols="20" name="disc"></textarea>
                    </div>
                </div>
                 <div class="mws-form-row">
                    <label class="mws-form-label">网站LOGO</label>
                    <div class="mws-form-item">
                          <input class="large" type="file" name="pic">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">网站开关</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1"> <label>开</label></li>
                            <li><input type="radio" name="status" value="2"> <label>关</label></li> 
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mws-button-row">
                <input class="btn btn-danger" type="submit" value="Submit">
                <input class="btn " type="reset" value="Reset">
            </div>
        </form>
    </div>      
</div>             
@endsection