@extends('layouts.emplay')
@section('content')
	
<div class="col-lg-9 column">
	<div class="padding-left">
					<div class="manage-jobs-sec">
							<div class="row">
					 			<div class="col-lg-6">
									 <br>
									 <h3>Applied Bids</h3>
					 			</div>	
					 			<div class="col-lg-12">
								 <a href="/compare"class="signin-popup"><button class="apply-job-btn">Rate Freelancer</button></a> 
					 			</div>
							</div>
						 		<table>
						 			<thead>
						 				<tr>
						 					<td>Applied Task</td>
						 					<td>Freelancer Name</td>
                                             <td>Expiry Date</td>
                                             <td>Bid Amount</td>
                                             <td>Comments</td>
                                             <td>Time</td>
											 <td>Days/Hours</td>
										
						 					<td></td>
						 				</tr>
						 			</thead>
						 			<tbody>
									@isset($bid)
									@foreach($bid as $b)
						 				<tr>
						 					<td>
						 						<div class="table-list-title">
						 							<i>{{$b->tname}}</i>
						 						</div>
						 					</td>
						 					<td>
						 						<div class="table-list-title">
						 						<i>{{$b->name}}</i>
						 						</div>
						 					</td>
						 					<td>
						 						<span>{{$b->date}}</span><br />
                                            </td>
                                        	<td>
                                                 <span>{{$b->rate}}</span>
                                            </td>
                                            <td>
                                                 <span>{{$b->bcomments}}</span>
                                            </td>
                                            <td>
                                                 <span>{{$b->time}}</span>
                                            </td>
                                            <td>
                                                 <span>{{$b->dtype}}</span>
											</td>
											
						 					
						 				</tr>
						 				@endforeach
@endisset
						 			</tbody>
						 		</table>
					 		</div>
					 	</div>
                    </div>

@endsection 