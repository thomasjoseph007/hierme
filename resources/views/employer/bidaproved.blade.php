@extends('layouts.emplay')
@section('content')
 
<div class="col-lg-9 column">
@isset($message)
<div class="col-lg-8">
	<div class="alert alert-success alert-dismissible fade show">
		<strong>{{$message}}</strong> 	
		<button type="button" class="close" data-dismiss="alert">&times;</button>
	</div>
</div>
@endisset
<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec">
								 <br>
							 
					 			<h3>Manage Bids</h3>
						 		<table>
						 			<thead>
						 				<tr>
											 <td>Title</td>
											 <td></td>
                                             <td>NAME</td>
						 					<td>Skills</td>
						 					<td>Expired</td>
                                             
                                             <td>Bided Amount</td>
                                             <td>Time</td>
                                             <td></td>
											 <td>Bided Coments</td>
											 <td>Rating(/5)</td>
                                             <td>Status</td>
						 					
						 				</tr>
						 			</thead>
						 			<tbody>
									 @isset($bid)
									 @foreach($bid as $d)	
						 				<tr>
						 					<td>
						 					
						 							<h6>{{$d->tname}}</h6>
						 					
											 </td>
											 <td>

											 </td>
                                             <td>
											 <span class="applied-field">
													 <h6>{{$d->name}}</h6>
													 </span>
						 						
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
						 						<span class="status active">{{$d->rate}}</span>
                                             </td>
                                            
                                             <td>
												 <span class="status active">{{$d->time}}</span>
												 <span class="status active">{{$d->dtype}}</span>
                                             </td>
                                             <td></td>
                                             <td>
						 						<span class="status active">{{$d->bcomments}}</span>
											 </td>
											 <td>
												 <span class="status active">{{$d->rating}}
											 </td>
                                             <td>
						 						<span class="status active">{{$d->bstatus}}</span>
                                             </td>
						 					<td>
											 @if($d->bstatus=='Waiting')	 
						 						<ul class="action_job">
						 							<li><span>Send Request</span><a href="/request/{{$d->id}}{{$d->tid}}" title=""><i class="la la-pencil"></i></a></li>
												 </ul>
												 
											@endif	 
											 </td>
											 <td>
						 						<ul class="action_job">
						 							<li><span>Delete</span><a href="/delete_bid/{{$d->id}}{{$d->tid}}" title=""><i class="la la-trash"></i></a></li>
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