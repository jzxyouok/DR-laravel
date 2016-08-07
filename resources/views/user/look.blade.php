@extends('layout.adminindex');
@section('con')

	<div class="mws-panel-header"><br>
		<span style="font-size:19px;color:#00BFFF">用户详情表</span><br><br>
	</div>
	<div class="mws-panel-body no-padding">
	<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
	<form action="/user/look" method="get">
	<div class="dataTables_length" id="DataTables_Table_0_length">
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
	</div>
	</form>
	<table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="mws-datatable mws-table dataTable">
		<thead>
			<tr role="row">
			<!-- <th aria-label="Rendering engine: activate to sort column descending" aria-sort="ascending" style="width:86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">ID</th> -->
			<th aria-label="Browser: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">姓名</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">年龄</th>
			<th aria-label="Engine version: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">余额</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">邮箱</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">手机号</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">身份证</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">头像</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">VIP</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">状态</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">操作</th>
			</tr>
		</thead>
	<tbody aria-relevant="all" aria-live="polite" role="alert">
	@foreach($list as $k=>$v)
		<tr class="
			@if($k%2==0)
				even
			@else
				odd
			@endif	
		">

			<td calss="" style="width:140px">{{$v['name']}}</td>
			<td calss="">{{$v['age']}}</td>
			<td calss="">{{$v['money']}}</td>
			<td calss="">{{$v['email']}}</td>
			<td calss="">{{$v['phone']}}</td>
			<td calss="">{{$v['card']}}</td>
			<td calss="" style="width:10px;height:10px">
				<img  style="width:44px;height:44px" src="/b/images/photo/{{$v['photo']}}" alt="" >
			</td>
			<td calss="">
				@if($v['vip']=1)
					NO
				@else
					OK
				@endif
			</td>
			<td calss="">
				@if($v['state']==1)
						用户
					@else
						管理员
					@endif
			</td>
			<td calss="" style="width:140px">&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="/user/del/{{$v['id']}}" class="icon-trash" style="font-size:28px;color:#1c1c1c"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="/user/up/{{$v['id']}}" class="icon-pencil" style="font-size:28px;color:#1c1c1c"></a>&nbsp;	
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