@extends('layouts.emplay')
@section('content')

<div class="col-lg-9 column">

				 		<div class="padding-left">
					 		<div class="manage-jobs-sec">
							
					 			<h3>Manage Task</h3>
						 		<table>
						 			<thead>
						 				<tr>
						 					<td>Title</td>
						 					<td>Skills</td>
						 					<td>Expired</td>
						 					<td>Status</td>
						 					<td>Action</td>
						 				</tr>
						 			</thead>
						 			<tbody>
									 @isset($datas)
									 @foreach($datas as $d)	
						 				<tr>
										
						 					<td>
						 						<div class="table-list-title">
						 							<h3>{{$d->tname}}</h3>
						 						</div>
						 					</td>
						 					<td>
						 						<span class="applied-field">
												 
												 {{ $d->skills }}
								
 												
												</span>
						 					</td>
						 					<td>
						 						
						 						<span>{{$d->date}}</span>
						 					</td>
						 					<td>
						 						<span class="status active">{{$d->status}}</span>
						 					</td>
						 					<td>
						 						<ul class="action_job">
						 							
						 							<li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
						 							<li><span>Block/Unblock</span><a href="/blocktask/{{$d->t_id}}" title=""><i class="la la-trash-o"></i></a></li>
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