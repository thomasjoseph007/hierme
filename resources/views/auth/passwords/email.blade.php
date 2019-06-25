<!DOCTYPE html>
<html>

<!-- employer_transactions.html  [XR&CO'2014], 09:17:48 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>hireME</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">

	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-grid.css')}}" />
	<link rel="stylesheet" href="{{asset('css/icons.css')}}">
	<link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/colors/colors.css')}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" />
	
<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/multiple-select/1.2.2/multiple-select.min.css">	
<style type="text/css">
		.center{
		float: left;
   	 width: 100%;
    padding: 0;
    margin-bottom: 50px;
   
}
</style>
</head>
<body>

	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
	</div>

	<div class="theme-layout" id="scrollup">
		<header class="stick-top forsticky">
			<div class="menu-sec">
				<div class="container">
					<div class="logo">
						<a href="/" title=""><img class="hidesticky" src="{{asset('images/resource/logo.png')}}" alt="" />
						<img class="showsticky" src="images/resource/logo10.png" alt="" /></a>
					</div><!-- Logo -->
					
				</div>
			</div>
		</header>

		<section>
			<div class="block no-padding">
				<div class="container fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-featured-sec">
								<ul class="main-slider-sec text-arrows">
									<li class="slideHome"><img src="{{asset('images/resource/mslider3.jpg')}}" alt="" /></li>
									<li class="slideHome"><img src="{{asset('images/resource/mslider2.jpg')}}" alt="" /></li>
									<li class="slideHome"><img src="{{asset('images/resource/mslider1.jpg')}}" alt="" /></li>
								</ul>
								<div class="job-search-sec">
									<div class="job-search">
										<form>
											<div class="row">
												<div class="block">
													<div class="container">
														<form method="POST" action="{{ route('password.email') }}">
															@csrf
															<div class="row">
																<div class="col-lg-10 column">
																	<div class="job-single-sec">
																		<div class="center">
																			
																			<div class="col-md-6">
																				
																				<div class="pf-field">
																					<<input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required>
																					@if ($errors->has('email'))
																					<span class="invalid-feedback" role="alert">
																						<strong>{{ $errors->first('email') }}</strong>
																					</span>
																					@endif
																				</div>
																			</div>
																			<div class="col-lg-6">
																				<i class="signin-popup"><button class="apply-job-btn">Reset Password!</button></i> 
																			</div>  
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
    <footer>
        <div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>
</div>

<script src="{{asset('js/ajquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-1.8.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/skill.js')}}" type="text/javascript"></script>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('js/modernizr.js')}}" type="text/javascript"></script>
<script src="{{asset('js/script.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/parallax.js')}}" type="text/javascript"></script>
<script src="{{asset('js/select-chosen.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.scrollbar.min.js')}}" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-datepicker.css')}}" />
<script src="{{asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script>
		$(function(){
			$('.datepicker').datepicker({
			    format: 'dd-mm-yyyy'
			});
		});
</script>


</body>

<!-- employer_transactions.html  [XR&CO'2014], 09:17:48 GMT -->
</html>
