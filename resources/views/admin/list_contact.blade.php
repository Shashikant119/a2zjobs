@extends('admin.master')

@section('content')

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
										<th>First Name</th>
										<th>Last Name</th>
										<th>E-mail</th>
									    <th>Mobile Number</th>
									    <th>Message</th>
										<th>Created_at</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $value)
									<tr>
										<td>{{$value->id}}</td>
										<td>{{$value->f_name}}</td>
										<td>{{$value->l_name}}</td>
										<td>{{$value->email}}</td>
										<td>{{$value->mobile}}</td>
										<td>{{$value->message}}</td>
										<td>{{$value->created_at}}</td>
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