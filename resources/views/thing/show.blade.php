@extends('layout.adminindex');
@section('con')
     
    <div class="mws-panel-header">
        <span style="font-size:19px;color:#00BFFF">商品详情表</span><br><br>
    </div>
    <div class="mws-panel-body no-padding">
    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
    <form action="/thing/string" method="get" enctype="muitipart/form-data">
    <div class="dataTables_length" id="DataTables_Table_0_length" >
        <label>页码
        <select aria-controls="DataTables_Table_0"  name="nuw">
            <option selected="selected" value="10" 
                @if(!empty($request['nuw']) &&$request['nuw']==10)
                    selected
                @endif
            >10</option>
            <option value="25" 
                @if(!empty($request['nuw']) && $request['nuw']==25)
                    selected
                @endif
            >25</option>
            <option value="50" 
                @if(!empty($request['nuw']) && $request['nuw']==50)
                    selected
                @endif
            >50</option>
            <option value="100" 
                @if(!empty($request['nuw']) && $request['nuw']==100)
                    selected
                @endif
            >100</option>
        </select>
        </label>
    </div>

    <div id="DataTables_Table_0_filter" class="dataTables_filter">
        <label><button class="btn btn-danger">搜索</button> <input aria-controls="DataTables_Table_0" type="text" name="key" value="
@if(!empty($request['key']))
{{$request['key']}}
@endif
"></label>
    </
    </form>
    <table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="mws-datatable mws-table dataTable">
        <thead>
            <tr role="row">
            <th aria-label="Browser: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">序号</th>
            <th aria-label="Browser: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">浏览数</th>
            <th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">人气</th>
            <th aria-label="Engine version: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">销量</th>
            <th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">编号</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">大小</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">颜色</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">净度</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">切工</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">图片</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">系列</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">款式</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">价格</th>
            <th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">是否显示</th><th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">操作</th>
            </tr>
        </thead>
        <?php $a=0;?>
    <tbody aria-relevant="all" aria-live="polite" role="alert">
    @foreach($list as $k=>$v)
    <?php $a++?>
        <tr class="
            @if($k%2==0)
                even
            @else
                odd
            @endif  
        ">   
            <td calss=""><?php echo  $a;?></td>
            <td calss="">{{$v['browse']}}</td>
            <td calss="">{{$v['app']}}</td>
            <td calss="">{{$v['sales']}}</td>
            <td calss="">{{$v['number']}}</td>
             <td calss="">{{$v['size']}}</td>
            <td calss="">{{$v['color']}}</td>
            <td calss="">{{$v['only']}}</td>
             <td calss="">{{$v['cut']}}</td>
            <td calss="" style="width:10px;height:10px"><img  style="width:44px;height:44px" src="/b/images/photo/{{$v['pic']}}" alt="" ></td>
            <td calss="">{{$v['name']}}</td>
            <td calss="">{{$v['style']}}</td>
            <td calss="">{{$v['money']}}</td>
            <td calss="">
@if($v['display']==0)
    NO
@else
    OK
@endif
            </td>
            <td calss="" style="width:140px">&nbsp;
            <a href="/thing/del/{{$v['id']}}" class="icon-trash" style="font-size:28px;color:#1c1c1c"></a>&nbsp;&nbsp;
            <a href="/thing/upp/{{$v['id']}}" class="icon-pencil" style="font-size:28px;color:#1c1c1c"></a>&nbsp; 
            </td>
        </tr>
    @endforeach
    
    </tbody>
    </table>
        
        <div id="a" class="dataTables_paginate paging_two_button">
        <span>
           {!!$list->appends($request)->render()!!}
        </span>
    </div>
    </div>
    </div>
                    
@endsection