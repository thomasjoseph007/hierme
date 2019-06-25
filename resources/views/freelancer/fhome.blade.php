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
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
	<link rel="stylesheet" href="css/icons.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/chosen.css" />
	<link rel="stylesheet" type="text/css" href="css/colors/colors.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

</head>

<body>

	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
	</div>

	<div class="theme-layout" id="scrollup">

		<div class="responsive-header">
			<div class="responsive-menubar">
				<div class="res-logo"><a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a></div>

			</div>
			<div class="responsive-opensec">

			</div>
		</div>

		<header class="stick-top">
			<div class="menu-sec">
				<div class="container">
					<div class="logo">
						<a href="/freelancer" title=""><img src="images/resource/logo.png" alt="" /></a>
					</div><!-- Logo -->
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
	</div>
	</section>

	<section>
		<div class="block no-padding">
			<div class="container">
				<div class="row no-gape">
					<aside class="col-lg-3 col-md-3 column border-right">
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
											<a href="#" title=""><i class="la la-flash"></i>Messages</a>
											<ul>
												<a href="/chat" title=""><li>Message</li></a>
												<li><a href="#" title="">Social Network</a></li>
												<li><a href="#" title="">Contact Information</a></li>
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
					<div class="col-lg-9 col-md-9">
						<div class="job-search">
							<form method="post">
								<div class="row">
									<div class="offset-md-2 col-md-8">
										<div class="pf-field">
											<input type="text" placeholder="Task title or keywords" id="loc"  name="title"/>
											<i class="la la-keyboard-o"></i>
										</div>
										<div  id="List"></div>
									</div>
									<div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
										<button type="button"  id="btn-search"><i class="la la-search"></i></button>
									</div>
								</div>
							</form>
						</div>
						<div class="result row"></div>
					</div>
					
				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="block">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="about_widget">
								<div class="logo">
									<a href="index.html" title=""><img src="images/resource/logo.png" alt="" /></a>
								</div>
								<span>Collin Street West, Victor 8007, Australia.</span>
								<span>+1 246-345-0695</span>
								<span><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e68f888089a68c89848e938892c885898b">[email&#160;protected]</a></span>
								<div class="social">
									<a href="#" title=""><i class="fa fa-facebook"></i></a>
									<a href="#" title=""><i class="fa fa-twitter"></i></a>
									<a href="#" title=""><i class="fa fa-linkedin"></i></a>
									<a href="#" title=""><i class="fa fa-pinterest"></i></a>
									<a href="#" title=""><i class="fa fa-behance"></i></a>
								</div>
							</div><!-- About Widget -->
						</div>
					</div>
					<div class="col-lg-4 column">
						<div class="widget">
							<h3 class="footer-title">Frequently Asked Questions</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-6">
										<a href="#" title="">Privacy & Seurty </a>
										<a href="#" title="">Terms of Serice</a>
										<a href="#" title="">Communications </a>
										<a href="#" title="">Referral Terms </a>
										<a href="#" title="">Lending Licnses </a>
										<a href="#" title="">Disclaimers </a>
									</div>
									<div class="col-lg-6">
										<a href="#" title="">Support </a>
										<a href="#" title="">How It Works </a>
										<a href="#" title="">For Employers </a>
										<a href="#" title="">Underwriting </a>
										<a href="#" title="">Contact Us</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 column">
						<div class="widget">
							<h3 class="footer-title">Find Jobs</h3>
							<div class="link_widgets">
								<div class="row">
									<div class="col-lg-12">
										<a href="#" title="">US Jobs</a>
										<a href="#" title="">Canada Jobs</a>
										<a href="#" title="">UK Jobs</a>
										<a href="#" title="">Emplois en Fnce</a>
										<a href="#" title="">Jobs in Deuts</a>
										<a href="#" title="">Vacatures China</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 column">
						<div class="widget">
							<div class="download_widget">
								<a href="#" title=""><img src="images/resource/dw1.png" alt="" /></a>
								<a href="#" title=""><img src="images/resource/dw2.png" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="js/ajquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/search.js" type="text/javascript"></script>
	<script src="js/task.js" type="text/javascript"></script>
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/modernizr.js" type="text/javascript"></script>
	<script src="js/script.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/wow.min.js" type="text/javascript"></script>
	<script src="js/slick.min.js" type="text/javascript"></script>
	<script src="js/parallax.js" type="text/javascript"></script>
	<script src="js/select-chosen.js" type="text/javascript"></script>
	<script src="js/jquery.scrollbar.min.js" type="text/javascript"></script>

</body>

<!-- employer_transactions.html  [XR&CO'2014], 09:17:48 GMT -->

</html>