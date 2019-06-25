@extends('layouts.adminlay')
@section('content')
<div class="col-lg-9 column">
	<div class="padding-left">
		<div class="profile-title">
			<h3>Add Category</h3>
			<div class="profile-form-edit">
				<form method="post" action="/category" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
						<div class="col-lg-5    ">
							<span class="pf-title">Add Category</span>
							<div class="pf-field">
								<select name="category"  class="chosen" id="category" onchange="cat()">
									<option disabled selected value> -- select category -- </option>   
									@isset($category)
									@foreach($category as $categories)
									<option value="{{$categories->cat_id}}">{{$categories->category}}</option>  
									@endforeach
									@endisset
								</select>
							</div>
						</div>					 										
					</div>
                    <br>
                    <div class="col-lg-6">
							<button type="submit" value="submit">SUBMIT</button>
					</div>
				</form>
			</div>
			
		</div>
	</div>
	@endsection