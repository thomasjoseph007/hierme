@extends('layouts.freelay')
@section('content')
@isset($datas)
@foreach($datas as $d)
<div class="col-lg-8 column">
	<div class="job-list-modern">	
		<div class="job-listings-sec">
			<div class="job-listing wtabs">
                <div class="job-title-sec">
					<div class="c-logo"><img src="uploads/{{$d->files}}" alt="" /></div>
					<h3><a href="#" title="">{{$d->comments}}</a></h3>
				</div>
				<div class="job-style-bx">
                <ul class="action_job">
                    <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                    <li><span>Block/Unblock</span><a href="#" title=""><i class="la la-trash-o"></i></a></li>
                </ul>
			    </div>
		    </div>							
        </div>
	</div>
</div>
@endforeach
@endisset
@endsection