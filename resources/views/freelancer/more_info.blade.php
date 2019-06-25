@extends('layouts.freelay')
@section('content')
    @isset($datas)
	@foreach($datas as $d)	
		<div class="col-lg-9">
			<div class="container">
				<div class="row">
				 	<div class="col-lg-8 column">
				 		<div class="job-single-sec">
				 			<div class="job-single-head2">
                                 <div class="job-title2"><h3>{{$d->tname}}</h3></div>
                                 <br>
				 				<ul class="tags-jobs">
				 					<li></i> Expiry Date:<span> {{$d->date}}</span></li>
                                 </ul>
                                 <br>
                                 <br>
                                 <br>   
				 				<h6><strong>Skills</strong> : {{ $d->tskills }}</h6>
				 			</div><!-- Job Head -->
				 			<div class="job-details">
				 				<h3>Description</h3>
				 				<p>{{$d->tdescription}}</p>
				 			</div>
				 			<div class="job-overview">
					 			<h3>Task Overview</h3>
					 			<ul>
					 				<li><i class="la la-money"></i><h3>Maximum Amount</h3><span>{{$d->maximum}}</span></li>
                                     <li><i class="la la-calendar-o"></i><h3> Expiry Date:</h3><span>{{$d->date}}</span></li>
					 				<li><i class="la la-puzzle-piece"></i><h3>Category</h3><span>{{$d->category}}</span></li>
					 				<li><i class="la la-shield"></i><h3>Project Type</h3><span>{{$d->ptype}}</span></li>
					 				<li><i class="la la-line-chart "></i><h3>Skills</h3><span>{{$d->tskills}}</span></li>
					 			</ul>
					 		</div><!-- Job Overview -->
				 			<div class="share-bar">
				 				<a href="/uploads/{{$d->tfiles}}"  target="_blank">files</a>
				 			</div>
				 		</div>
				 	</div>
				 	<div class="col-lg-4 column">
				 		<div class="job-single-head style2">
							 <div class="job-thumb"> <img src="images/resource/sjs.png" alt="" /> </div>
							 @if($bid==0)
							 
							 <i class="signin-popup"><button class="apply-job-btn"  >Bid this Now!</button></i> 
							 @else
							 <i class="signin-popup"><button class="apply-job-btn" disabled >Bided!</button></i> 
							
							 @endif 
			 			</div><!-- Job Head -->
				 	</div>
				</div>
			</div>
		</div>
    @endforeach
@endisset
<div class="account-popup-area signin-popup-box">
		<div class="account-popup">
			<span class="close-popup"><i class="la la-close"></i></span>
            <h3>Bid Now</h3>
            <br>
			<div class="contact-edit">
				<form method="POST" action="/bid">
                 @csrf
				<input type="text" value="{{Auth::user()->id}}" class="select" hidden name="uid"/>
				<input type="text" value=" {{ $d->t_id }}" class="select" name="tid" hidden/>
                <h6>set your Minimal Rate</h6>
					<div class="cfield">
						<input type="text" placeholder="Minimum Rate" class="select" name="rate" />
						<i class="la la-envelope-o0"></i>
                    </div>
                    <h6>write your Comments</h6>
					<div class="cfield">
						<input type="text" placeholder="Comments" class="select" name="comments"/>
						<i class="la la-envelope-o0"></i>
					</div>
					<h6>set your Delivery Time</h6>
					<div class="row">					
						<div class="col-lg-6">
							<div class="cfield">
								<input type="number"  class="select" placeholder="Days/Hours" name="time"/>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="cfield">
								<select data-placeholder="Please Select" class="select" name="dtype">
									<option>Hours</option>
									<option>Days</option>
								</select>

							</div>
						</div>
					</div>
					<button type="submit">Place a Bid</button>
				</form>  
			</div>	  
		</div>
	</div>
@endsection