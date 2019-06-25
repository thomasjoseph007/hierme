
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
</head>
<body>



<div class="theme-layout" id="scrollup">
	
	<div class="responsive-header">
		<div class="responsive-menubar">
			<div class="res-logo"><a href="{{ url('/freelancer') }}" title=""><img src="images/resource/logo.png" alt="" /></a></div>
		</div>
		
	</div>
	
	<header class="stick-top">
		<div class="menu-sec">
			<div class="container">
				<div class="logo">
					<a href="{{ url('/freelancer') }}" title=""><img src="images/resource/logo.png" alt="" /></a>
				</div><!-- Logo -->
				<div class="btns-profiles-sec">
               
					<span><img src="images/resource/profile.jpg" alt="" />  <i class="la la-angle-down"></i></span>
				
                    <ul>
						<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="la la-unlink"></i>Logout</a></li>
                                    
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
					</ul>
				</div>
				
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
		<div class="block no-padding">
			<div class="container">
				 <div class="row no-gape py-5">
				 	<aside class="col-lg-3 column border-right">
				 		<div class="widget">
				 			<div class="tree_widget-sec">
				 				<ul>
								 <li class="inner-child">
											<a href="#" title=""><i class="la la-home"></i>Home</a>
											<ul>
												<ol><a href="/freelancer" title="">Home</a></ol>
												
											</ul>
										</li>
								 <li class="inner-child">
										<a href="#" title=""><i class="la la-file-text"></i>Post Your Skills</a>
										<ul>
										<a href="/post" title=""><li>Post Your Works</li></a>
											<a href="/mpost"><li> Your Posts</</a>									
										</ul>
									</li>
									<li class="inner-child">
										<a href="#" title=""><i class="la la-briefcase"></i>Manage Bids</a>
										<ul>
										<a href="/applied" title=""><li>Applied Bids</li></a>
										<a href="/approvedbids" title=""><li>Acepted Bids</li></a>
										
										</ul>
									</li>
				 				
				 					<li class="inner-child">
				 						<a href="#" title=""><i class="la la-file-text"></i>TASK</a>
				 						<ul>
                                        	<a href="/ptask"><li>Post Task</li></a>
				 							<a href="/managetask" title=""><li>Manage Task</li></a>
				 							
				 						</ul>
				 					</li>
				 					
				 					<li class="inner-child"> 
				 						<a href="#" title=""><i class="la la-lock"></i>Change Password</a>
				 						<ul>
				 							
				 							
				 						</ul>
				 					</li> 
				 					<li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="la la-unlink"></i>Logout</a></li>
                                    
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
				 				</ul>
				 			</div>
				 		</div>
						 </aside>
                    
                        @yield('content')
                    
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
<script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/ajquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery-1.8.0.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/skill.js')}}" type="text/javascript"></script>
<script src="{{asset('js/modal.js')}}" type="text/javascript"></script>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
<script src="{{ asset('js/modernizr.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/script.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/wow.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/slick.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/parallax.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/select-chosen.js')}}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.scrollbar.min.js')}}" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css')}}" />
<script src="{{ asset('js/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script>
		$(function(){
			$('.datepicker').datepicker({
			    format: 'dd-mm-yyyy'
			});
		});
function preview_image(event) {
			var reader = new FileReader();
			reader.onload = function() {
				var output = document.getElementById('uploadbox');
				output.src = reader.result;
			}
			reader.readAsDataURL(event.target.files[0]);
		}
</script>


