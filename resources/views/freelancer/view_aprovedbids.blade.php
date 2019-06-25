@extends('layouts.freelay')
@section('content')

<div class="col-lg-9 column">
<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
				 		<div class="padding-left">
					 		<div class="manage-jobs-sec">
							
					 			<h3>Manage Bids</h3>
						 		<table>
						 			<thead>
						 				<tr>
						 					<td>Title</td>
						 					<td>Skills</td>
						 					<td>Expired</td>
                                             
                                             <td>Bided Amount</td>
                                             <td>Bided Coments</td>
                                             <td>Status</td>
						 					
						 				</tr>
						 			</thead>
						 			<tbody>
									 @isset($bid)
									 <?php $i=1; ?> 
									 @foreach($bid as $d)	
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
						 						<span class="status active">{{$d->rate}}</span>
                                             </td>
                                             <td>
						 						<span class="status active">{{$d->bcomments}}</span>
                                             </td>
                                             <td>
						 						<span class=".bg-success">{{$d->bstatus}}</span>
                                             </td>
						 					<td>
												@if($d->bstatus=='Requested')
						 						<ul class="action_job">	
						 							<li><span>Confirm or NOT!</span><a href="/bid_confirm/{{$d->id}}{{$d->tid}}" title=""><i class="la la-eye"></i></a></li>
												 </ul>
												@endif
						 					</td>
										
						 				</tr>						 			
						 			</tbody>
									 <?php $i++;?>
									@endforeach
									
									@endisset
						 		</table>
					 		</div>
						
					 	</div>
						 
					 </div>
					 
@endsection                    