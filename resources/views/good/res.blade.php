@extends('layout.adminindex');
@section('con')


	<div class="mws-panel-header"><br>
		<span style="font-size:19px;color:#00BFFF">类别详情表</span><br><br>
	</div>
	<div class="mws-panel-body no-padding">
	<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
	<form action="/goods/class" method="get">
	<!-- <div class="dataTables_length" id="DataTables_Table_0_length">
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
	</div> -->
<!-- 
	<div id="DataTables_Table_0_filter" class="dataTables_filter">
		<label><button class="btn btn-danger">搜索</button> <input aria-controls="DataTables_Table_0" type="text" name="key" value="
@if(!empty($request['key']))
{{$request['key']}}
@endif
"></label>
	</div> -->
	</form>
	<table aria-describedby="DataTables_Table_0_info" id="DataTables_Table_0" class="mws-datatable mws-table dataTable">
		<thead>
			<tr role="row">
			<th aria-label="Browser: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">序号</th>
			<th aria-label="Browser: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">类ID</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">类别名称</th>
			<th aria-label="Engine version: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">PID</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">PATH</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">是否有货</th>
			<th aria-label="Platform(s): activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">是否新品</th>
			<th aria-label="CSS grade: activate to sort column ascending" style="width: 86px;" colspan="1" rowspan="1" aria-controls="DataTables_Table_0" tabindex="0" role="columnheader" class="">操作</th>
			</tr>
		</thead>
	<tbody aria-relevant="all" aria-live="polite" role="alert">
	<?php $a = 0;?>
	@foreach($list as $k=>$v)
	<?php $a++;?>
		<tr class="
			@if($k%2==0)
				even
			@else
				odd
			@endif	
		">	
			<td calss=""><?php echo $a; ?></td>
			<td calss="" style="width:140px">{{$v['id']}}</td>{{$v['name']}}

			<td calss="">
			@if($v['pid']==0)
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="icon-winsows" style="font-size:26px;color:red;text-decoration:none">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$v['name']}}</a>
			@else
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="" class="icon-arrow-right-2" style="font-size:26px;color:green;text-decoration:none ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$v['name']}}</a>
			@endif
			</td>
			<td calss="">{{$v['pid']}}</td>
			<td calss="">{{$v['path']}}</td>
			<td calss="">
				@if($v['ont']==1)
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES
				@else
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOT
				@endif	
			</td>
			<td calss="">
				@if($v['new']==0)
				 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YES
				@else
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NOT
				@endif	
			</td>
			<td calss="" style="width:140px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@if($v['pid']==0)
			&nbsp;&nbsp;&nbsp;<a  class="" style="font-size:26px;color:#1c1c1c ;text-decoration:none "></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@else
			<a href="/goods/ddl/{{$v['id']}}" class="icon-trash" style="font-size:26px;color:#1c1c1c ;text-decoration:none "></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@endif
			<a href="/goods/ppl/{{$v['id']}}" class="icon-pencil" style="font-size:26px;color:#1c1c1c;text-decoration:none "></a>&nbsp;	
			</td>
		</tr>
	@endforeach
	</tbody>
	</table>
		<!-- <div id="a" class="dataTables_paginate paging_two_button">
		<span>

		</span> -->
	</div>
	</div>
	</div>       	
@endsection