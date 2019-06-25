<!DOCTYPE html>
<html>

<!-- employer_transactions.html  [XR&CO'2014], 09:17:48 GMT -->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Job Hunt</title>
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
	<style>
		
		.select {
			width: 100%;
			display: inline-block;
			height: 55px;
			border-radius: 8px;
			box-shadow: none !important;
			border: 2px solid #e8ecec;
			position: relative;
			display: inline-block;
			vertical-align: middle;
			font-size: 13px;
			" 

		}
	</style>
</head>

<body>
	<div class="page-loading">
		<img src="images/loader.gif" alt="" />
		<span>HireME</span>
	</div>
	<div class="theme-layout" id="scrollup">

		<div class="responsive-header">
			<div class="responsive-menubar">
				<div class="res-logo"><a href="{{ url('/employer') }}" title=""><img src="images/resource/logo.png" alt="" /></a></div>
			</div>

		</div>

		<header class="stick-top">
			<div class="menu-sec">
				<div class="container">
					<div class="logo">
						<a href="{{ url('/employer') }}" title=""><img src="images/resource/logo.png" alt="" /></a>
					</div><!-- Logo -->
					<div class="btns-profiles-sec">

						<span><img src="images/resource/profile.jpg" alt="" /> <i class="la la-angle-down"></i></span>

						<ul>

							<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
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
								<h5 style="color:blue;" class="text-center">Please complete your profile for further operations...!!!<br>
									and enjoy limitless services from our side</h5>

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
						<aside class="col-lg-31 column border-right">
							<div class="widget">
								<div class="tree_widget-sec">

								</div>
							</div>
						</aside>
						<div class="col-lg-12 column">
							<div class="padding-left">
								<div class="profile-form-edit">

									<form method="POST" action="/fimage" enctype="multipart/form-data">
										@csrf
										<!-- <input type="text"  name="id" hidden="hideen" value="{{Auth::user()->id}}"> -->
										<div class="row">

											<div class="upload-img-bar">
												<span><img id="user_img"
														height="150"
														width="150"
														style="border:dashed" />
												</span>
												<div class="upload-info">
												<input type="file" accept="image/*" name="image" id="file"  onchange="show(this)" />
                            					
												<script>
													function show(input) {
														debugger;
														var validExtensions = ['jpg','png','jpeg']; //array of valid extensions
														var fileName = input.files[0].name;
														var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
														if ($.inArray(fileNameExt, validExtensions) == -1) {
															input.type = ''
															input.type = 'file'
															$('#').attr('src',"");
															alert("Only these file types are accepted : "+validExtensions.join(', '));
														}
														else
														{
														if (input.files && input.files[0]) {
															var filerdr = new FileReader();
															filerdr.onload = function (e) {
																$('#user_img').attr('src', e.target.result);
															}
															filerdr.readAsDataURL(input.files[0]);
														}
														}
													}
												</script>
													<span></span>
												</div>
											</div>
											<div class="col-lg-7">
												<span class="pf-title">Description</span>
												<div class="pf-field">
													<textarea name="description"></textarea>
												</div>
											</div>

										</div>

										<div class="row">
											<input type="text" name="id" hidden="hideen" value="{{Auth::user()->id}}">
											<input hidden value="0" id="langCounter" name="langCounter">

											<fieldset class="col-md-8" id="languages">
												<div class="row" id="languageSet">
													<div class="col-md-5">
														<span class="pf-title">Language</span>
														<input type="text" name="language0" />
													</div>

													<div class="col-md-5">
														<span class="pf-title">Title</span>
														<select data-placeholder="Please Select Specialism" class="chosen" name="level0">
															<option disabled selected value> -- select Level -- </option>
															<option>Unspecified</option>
															<option>Basic</option>
															<option>Conversational</option>
															<option>Fluent</option>
															<option>Native|Brilingal</option>
															<!--  -->
														</select>
													</div>
												</div>
											</fieldset>
											<div class="col-md-2">

												<button class="btn btn-primary" id="newLanguageField" style="padding: 1px 5px;">
													Add More
												</button>
											</div>
										</div>
										<div class="col-lg-7">
											<button type="submit">Update</button>
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
	<br>
	<br>
	<footer>
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>


	<script src="js/ajquery.min.js" type="text/javascript"></script>
	<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<script src="js/skill.js" type="text/javascript"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>

	<script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script>
		var langCounter = 1;
		$("#newLanguageField").on("click", function(e) {
			e.preventDefault();
			//append
			var $html = '<div class="row " id="languageSet' + langCounter + '" >' +
				'<div class="col-md-5">' +

				'<input type="" class="col-xs-12 form-control py-2" name="language' + langCounter + '" />' +
				'</div>' +
				'<div class="col-md-5">' +

				'<select class="col-xs-12 form-control" data-placeholder="Please Select Specialism" name="level' + langCounter + '" class="select">' +
				'<option disabled selected value> -- select Level -- </option>' +
				'<option>Unspecified</option>' +
				'<option>Basic</option>' +
				'<option>Conversational</option>' +
				'<option>Fluent</option>' +
				'<option>Native|Brilingal</option>' +
				'</select>' +
				'</div>' +
				'<div class="col-md-2">' +
				'<button type="button" class="btn btn-primary btnRemoveLang" onclick="removeThis(' + langCounter + ')" style="padding: 1px 8px;">x</button>' +
				'</div>' +
				'</div>';

			$("#languages").append($html);

			$("#langCounter").val(langCounter);
			langCounter++;

		});

		//remove
		function removeThis(id) {
			// alert(id);
			$("#languageSet"+id).remove();
			langCounter--;
		}
	</script>
	<script>
	
		function preview_image(event) {
			var reader = new FileReader();
			reader.onload = function() {
				var output = document.getElementById('output_image');
				output.src = reader.result;
			}
			reader.readAsDataURL(event.target.files[0]);
		}
		var currentYear = new Date().getFullYear()
		max = currentYear + 10
		var option = "";
		for (var year = currentYear - 30; year <= max; year++) {

			var option = document.createElement("option");
			option.text = year;
			option.value = year;

			document.getElementById("year").appendChild(option)

		}
		document.getElementById("year1").value = currentYear;
		var currentYear = new Date().getFullYear()
		max = currentYear + 10
		var option = "";
		for (var year = currentYear - 30; year <= max; year++) {

			var option = document.createElement("option");
			option.text = year;
			option.value = year;

			document.getElementById("year1").appendChild(option)

		}
		document.getElementById("year1").value = currentYear;
	</script>
</body>

</html>