<!DOCTYPE html>
<html>

<!-- job_single2.html  [XR&CO'2014], 09:18:08 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Hunt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="CreativeLayers">
	<meta name="csrf-token" content="{{ csrf_token() }}">
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
	<style>
	.center{
		position:relative;
		margin-left: 300px;
		width:750px;
		height: 200px;
	}
	a {
  color: blue;
  font-family: helvetica;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  text-decoration: underline;
}

a:active {
  color: black;
}

a:visited {
  color: purple;
}

	</style>
	
</head>
<body>

	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
		<span>Skip Loader</span>
	</div>

	<div class="theme-layout" id="scrollup">

		<div class="responsive-header">
			<div class="responsive-menubar">
				<div class="res-logo"><a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a></div>
				<div class="menu-resaction">
					<div class="res-openmenu">
						<img src="images/icon.png" alt="" /> Menu
					</div>
					<div class="res-closemenu">
						<img src="images/icon2.png" alt="" /> Close
					</div>
				</div>
			</div>
			<div class="responsive-opensec">
				<div class="btn-extars">
					<a href="#" title="" class="post-job-btn"><i class="la la-plus"></i>Post Jobs</a>
					<ul class="account-btns">
						<li class="signup-popup"><a title=""><i class="la la-key"></i> Sign Up</a></li>
						<li class="signin-popup"><a title=""><i class="la la-external-link-square"></i> Login</a></li>
					</ul>
				</div><!-- Btn Extras -->
				<form class="res-search">
					<input type="text" placeholder="Job title, keywords or company name" />
					<button type="submit"><i class="la la-search"></i></button>
				</form>
				<div class="responsivemenu">
				
				</div>
			</div>
		</div>

		<header class="stick-top">
			<div class="menu-sec">
				<div class="container">
					<div class="logo">
						<a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
					</div><!-- Logo -->
					<div class="btn-extars">
						<a href="/freelancer" title="" class="post-job-btn"><i class="la la-plus"></i>Back</a>
						
					</div><!-- Btn Extras -->
					<nav>
						
					</nav><!-- Menus -->
				</div>
			</div>
		</header>
	
		<section class="overlape">
			<div class="block no-padding">
				<div data-velocity="-.1" style="background: url(images/resource/mslider1.jpg) repeat scroll 50% 422.28px transparent;" class="parallax scrolly-invisible no-parallax"></div><!-- PARALLAX BACKGROUND IMAGE -->
				<div class="container fluid">
					<div class="row">
						<div class="col-lg-12">
							<div class="inner-header">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section>
		@isset($bid)
	@foreach($bid as $b)	
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-lg-13 column">
							<div class="job-single-sec">
							<div class="center">	
							<div class="job-overview">
					 			<h3>Bid Confirmation</h3>
					 			<ul>
									<p>Hello  {{$b->name}}<br>
									 We intrested in your bid in {{$b->tname}} and we aslo like your bid amount {{$b->rate}} <br>
									 satisfied with your comments "{{$b->bcomments}}"

									 <a  data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
										Terms and Conditions
									</a>
										<div class="collapse" id="collapseExample">
											<div class="card card-body">
											<p>These Website Standard Terms and Conditions written on this webpage shall manage your use of our website, hierme accessible at http:://www.hierme.com.</p>



												.</p>



											</div>
										</div>
									</p>	
										<a href="/bid_acepted/{{$b->tid}}" title="" class="apply-job-linkedin"><i class="fa fa-linkedin"></i>Confirm Your Bid</a>	
										<a href="/discard/{{$b->tid}}" title="" class="apply-job-linkedin"><i class="fa fa-linkedin"></i>Discard</a>		
					 			</ul>
							 </div>
						</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			@endforeach
@endisset
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
</body>

<!-- job_single2.html  [XR&CO'2014], 09:18:09 GMT -->
</html>

