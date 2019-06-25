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
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	<link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="css/colors/colors.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<style>
	.center{
		float: left;
		width: 100%;
		padding: 0;
		margin-bottom: 50px;
		margin-left: 250px;
	}
	</style>
	
</head>
<body>

	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
		<span>Skip Loader</span>
	</div>

	<div class="theme-layout" id="scrollup">

		

		<header class="stick-top">
			<div class="menu-sec">
				<div class="container">
					<div class="logo">
						<a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
					</div><!-- Logo -->
					<div class="btn-extars">
						<a href="/back" title="" class="post-job-btn"><i class="la la-plus"></i>Back</a>
						
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
							<h3>Welcome {{Auth::User()->name}}</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section>
		<div class="row no-gape">
			<aside class="col-lg-3 column border-right">

			</aside>
			<div class="block">
				<div class="container">
					<div class="row">
						<!-- <div class="col-lg-9 column">
							<div class="job-single-sec">
								<div class="col-lg-4">
                                @isset($bid)
									<span class="pf-title">Choose Name</span>
									<div class="pf-field">
										<select data-placeholder="Please Select Specialism" class="chosen" id="com1" name="compare1">
										<option disabled="disabled" selected="selected">Select</option>
										@foreach($bid as $b)
											<option value="{{$b->id}}">{{$b->name}}</option>
                                            @endforeach
                                        </select>
							
                                        
									</div>
                                </div>
                                @endisset
								<div class="compare">	
									
								</div>
							</div>
						</div> -->
						<div class="center">
							<div class="col-lg-9 column">								
								<div class="col-lg-6">
									@isset($bid)
									<span class="pf-title">Choose Name</span>
									<div class="pf-field">
										<select data-placeholder="Please Select Specialism" class="chosen" id="com2" name="compare2">
											<option disabled selected>Select a user</option>
											@foreach($bid as $b)
											<option value="{{$b->id}}">{{$b->name}}</option>
											@endforeach
										</select>									
									</div>
								</div>
								@endisset
								<div class="compare1">																						
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

	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/wow.min.js" type="text/javascript"></script>
	<script src="js/slick.min.js" type="text/javascript"></script>
	<script src="js/parallax.js" type="text/javascript"></script>
	<script src="js/select-chosen.js" type="text/javascript"></script>
	<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>
	<script>
		const csrf = '{{csrf_token()}}';
	</script>
    <!-- <script src="js/compare1.js" type="text/javascript"></script> -->
	 <script src="js/compare2.js" type="text/javascript"></script> 
</body>

<!-- job_single2.html  [XR&CO'2014], 09:18:09 GMT -->
</html>

