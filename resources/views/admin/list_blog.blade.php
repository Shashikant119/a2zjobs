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
         <a href="{{url('/')}}/Add" class="btn btn-success"><i class="fa fa-plus"></i> Add Blog </a>
          <a href="javascript:;" onclick="printDiv();" class="btn btn-success"><i class="fa fa-print"></i> Print </a>
     </div>
    <div class="table-responsive">
      <table class="table  table-bordered" cellspacing="0" width="100%" id="DivIdToPrint">
        <thead>
         <tr>
      			<th>Id</th>
      			<th>Title</th>
            <th>Body</th>
      			<th>Created_at</th>
            <th colspan="2">Action</th>
		    </tr>
        </thead>
    <tbody>
         @foreach($data as $value)
		        <tr>
        			<td>{{$value->id}}</td>
        			<td>{{$value->title}}</td>
              <td>{{$value->body}}</td>
        			<td>{{$value->created_at}}</td>
        			<td><button class="btn btn-danger"><a href="{{url('/')}}/Add/delete/{{$value->id}}"><i class="fa fa-trash" aria-hidden="true"></i></a></button></td>
        			<td><button class="btn btn-success"><a href="{{url('/')}}/Add/update/{{$value->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></button></td>
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