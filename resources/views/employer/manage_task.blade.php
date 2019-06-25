@extends('layouts.emplay')
@section('content')

<div class="col-lg-9 column">
	
<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
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
					
													 
													 @if($d->status=='Active')
													 <li><span>Block</span><a href="/blocktask/{{$d->t_id}}" title=""><i class="la la-ban"></i></a></li>
													@else
													 <li><span>unblock</span><a href="/blocktask/{{$d->t_id}}" title=""><i class="la la-unlock"></i></a></li>
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