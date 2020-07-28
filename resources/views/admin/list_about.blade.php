@extends('admin.master')
@section('content')
<!--===================================================-->
<div class="panel">
      <div class="boxed">
          <div id="content-container">
          	<div id="page-content">
              <div class="panel">
    <div class="panel-body">
      <div align="right">
        <a href="javascript:;" onclick="printDiv();" class="btn btn-success"><i class="fa fa-print"></i> Print </a>
      
     </div>
    <div class="table-responsive">
      <table class="table  table-bordered" cellspacing="0" width="100%" id="DivIdToPrint">
        <thead>
         <tr>
			<th>Id</th>
			<th>About</th>
      <th>Image</th>
			<th>Created_at</th>
      <th colspan="2">Action</th>
		</tr>
        </thead>
        <tbody>
          @foreach($data as $value)
		<tr>
			<td>{{$value->id}}</td>
			<td>{{$value->about}}</td>\
      <td>{{$value->image}}</td>
			<td>{{$value->created_at}}</td>
			<td>delete</td>
			<td>Update</td>
		</tr>
		@endforeach
        </tbody>
      </table>
      </div>
      {{$data->links()}}
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection