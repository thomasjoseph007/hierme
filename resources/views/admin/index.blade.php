@extends('layouts.adminlay')
@section('content')	

<div class="col-lg-9 column">
	
<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec">
							
					 			<h3>Manage Task</h3>
						 		<table>
						 			<thead>
						 				<tr>
						 					<td>Name</td>
						 					<td>Email</td>
						 					<td>User Type</td>
						 					<td>Action</td>
						 				</tr>
						 			</thead>
						 			<tbody>
									 @isset($users)
									 @foreach($users as $u)	
						 				<tr>
										
						 					<td>
						 						<div class="table-list-title">
						 							<h3>{{$u->name}}</h3>
						 						</div>
						 					</td>
						 					<td>
						 						<span class="applied-field">
												 
												 {{ $u->email }}
								
 												
												</span>
						 					</td>
						 					<td>
						 						
						 						<span>{{$u->utype}}</span>
						 					</td>
						 					
						 					<td>
						 						<ul class="action_job">
					
													 
													 @if($u->status=='1')
													 <li><span>Block</span><a href="/blockuser/{{$u->id}}" title=""><i class="la la-ban"></i></a></li>
													@else
													 <li><span>unblock</span><a href="/blockuser/{{$u->id}}" title=""><i class="la la-unlock"></i></a></li>
													 @endif
						 						</ul>
						 					</td>
										
						 				</tr>						 			
						 			</tbody>
									
									@endforeach
									@endisset
						 		</table>
					 		</div>
						
					 	</div>
						 
 					</div>                   						
@endsection 