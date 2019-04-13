@extends('layouts.emplay')
@section('content')
<div class="col-lg-9 column">
	<div class="padding-left">
		<div class="profile-title">
			<h3>Post a New Task</h3>
			<div class="profile-form-edit">
				<form method="post" action="/posttask" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}">
						<div class="col-lg-12">
							<span class="pf-title">Job Title</span>
							<div class="pf-field">
								<input type="text" placeholder="e.g. build me a website" name="tname">
								@if ($errors->has('tname'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('tname') }}</strong>
								</span>
								@endif
							</div>
						</div>					 					
						<div class="col-lg-6">
							<span class="pf-title">Categories</span>
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
						<div class="col-lg-6">
							<span class="pf-title">Skills</span>
							<div class="skill">											
							</div>											 
						</div>					 					
						<div class="col-lg-12">
							<span class="pf-title">Application Deadline Date</span>
							<div class="pf-field">
								<input type="text" placeholder="01.11.207"  class="form-control datepicker" name="date"/>
							</div>
							@if ($errors->has('date'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('date') }}</strong>
							</span>
							@endif	
						</div>					 					
						<div class="col-lg-6">
							<span class="pf-title">Minimum Budget</span>				 						
							<div class="pf-field">
								<input type="text"  placeholder="Minimum" name="minimum">				
							</div>	
							@if ($errors->has('minimum'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('minimum') }}</strong>
							</span>
							@endif				 						
						</div>
						<div class="col-lg-6">
							<span class="pf-title">MAximum Budget</span>
							<div class="pf-field">
								<input type="text" placeholder="Maximum" name="maximum">
							</div>
							@if ($errors->has('maximum'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('maximum') }}</strong>
							</span>
							@endif
						</div>									
						<div class="col-lg-6">
							<span class="pf-title">Project Type</span>
							<input type="radio" name="ptype" id="232"  value="fprice" {{ (old('type') == 'fprice') ? 'checked' : '' }} checked/>
							<label for="232">Fixed Price Project</label>					
							<input type="radio" name="ptype" id="wwqe" value="hprice" {{ (old('type') == 'hprice') ? 'checked' : '' }}/>
							<label for="wwqe">Hourly Price Project</label>												
							@if ($errors->has('ptype'))
							<span class="help-block">
								<strong>{{ $errors->first('ptype') }}</strong>
							</span>
							@endif
						</div>											
						<div class="col-lg-12">
							<span class="pf-title">Upload FIles</span>
							<div class="pf-field">
								<input type="file" name="files" id="files">
							</div>
							@if ($errors->has('files'))
							<span class="invalid-feedback" role="alert">
								<strong>{{ $errors->first('files') }}</strong>
							</span>
							@endif	
						</div>
						<div class="col-lg-12">
							<span class="pf-title">Description</span>
							<div class="pf-field">
								<textarea name="description"></textarea>
								@if ($errors->has('description'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('description') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="col-lg-6">
							<button type="submit" value="submit">SUBMIT</button>
						</div>
					</div>
					<br>
				</form>
			</div>
			
		</div>
	</div>
	@endsection