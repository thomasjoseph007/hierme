<!DOCTYPE html>
<html>

<!-- employer_manage_jobs.html  [XR&CO'2014], 09:17:42 GMT -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>HireME</title>
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
	form#slider{width:724px; margin:0 auto; clear:left;}
	form#slider article{background: white; padding:30px; float:left; margin-top: 50px; width:100%;}
	.form-item{margin-bottom: 10px; float:left;}
	input.form-submit{background:#f36b06!important; color:white; float:right!important;}
	a.next{background:#f36b06; display:block; width:300px; float:left; margin: 10px 0 0 164px; text-align:center;  clear:left; padding:7px 13px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; color:white; text-decoration: none}
	#page{float:left; margin: 10px 0 0 0}
	#page li{float:left; margin:0 5px 0 0; padding:5px 15px;  background:#f36b06;  text-align:center;  border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; color:white; }
	#page li a{ color:white; text-decoration: none}
	/* #wrapper
	{
	text-align:center;
	margin:0 auto;
	padding:0px;
	width:105px;
	}
	#output_image
	{
	border-radius: 10%;
	} */
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
                            <center>
                            <h5 style="color:blue;">Please complete your profile for further operations...!!!<br>
                            and enjoy limitless services from our side</h5></center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section>
		<form id="slider">
            <article>

            <div class="col-lg-6">
					 <span class="pf-title">Name</span>
					 		<div class="pf-field">
					 			<input type="text" value="{{Auth::User()->name}}"/>
					 		</div>
			</div>
	
		    <div class="upload-img-bar">
				<span class="round"><img id="output_image"/></span>  
					<div class="upload-info">									   
						<input type="file" accept="image/*" onchange="preview_image(event)"> 
					 		<span>Max file size is 1MB, Minimum dimension: 270x210 And Suitable files are .jpg & .png</span>
					</div>
			</div>					 				
             <div class="col-lg-12">
				<span class="pf-title">Description</span>
					<div class="pf-field">
					 	<textarea></textarea>
					</div>
			</div>

            <table>
                <thead>
					<tr>
						<td>Language</td>
						<td>Profiency</td>
                    </tr>
				</thead>
                    <tr>                     
                        <td>                   
                            <span class="pf-title">Language</span>
                                <div class="pf-field">
                                    <input type="text" placeholder="$4250" />
                                </div>
                        </td>						 
                        <td>      
                            <span class="pf-title">Level</span>
                                <div class="pf-field">
                                    <select data-placeholder="Please Select Specialism" class="chosen">
                                        <option>Unspecified</option>
                                        <option>Basic</option>
                                        <option>Conversational</option>
                                        <option>Fluent</option>
                                        <option>Native|Brilingal</option>
                                    </select>
                                </div>
                        </td>                    
                    </tr>
                </table>
            </article>
            <article>
                <div class="col-lg-6">
					<span class="pf-title">Categories</span>
					 	<div class="pf-field">
					 		<select data-placeholder="Please Select Specialism" class="chosen" name="category"> 
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
            </article>
            <article>
                
                <div class="form-item">
                    <label>Message: <span class="required">*</span></label>
                    <textarea rows="2" cols="20"></textarea>
                
                <input class="form-submit" id="edit-submit" name="op" type="submit" value="Submit" />
            </article>
            <br>
            <br>
            </form>            
	</section>
<br>

	<footer>
			<div class="container">
			</div>		
		<div class="bottom-line">
			<span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
			<a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
		</div>
	</footer>

</div>
<script src="js/ajquery.min.js" type="text/javascript"></script>
<script src="js/jquery-1.8.0.min.js" type="text/javascript"></script>
<script src="js/skill.js" type="text/javascript"></script>
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js" type="text/javascript"></script>
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
        // add next button to all screens but last
        $("article:not(:last)").append('<a class="next" href="#">Next</a>');
        //hide every form section except first
        $("article:nth-child(1n+2)").hide();
        //add class of visible to first screen
        $("article:first").addClass("visible");
        //add an empty unordered list to be populated below
        $("#slider").append("<ul id='page'></ul>");
       
        //start the index at 1    
        var pageNum = 1;

        //go through each section (article) and add a list item to the empty unorderd list with the page number            
        $("article").each(function(){
            $(this).parent().find("ul").append('<li><a href="#">Page: '+pageNum+'</a></li>');
            $(this).addClass("page" + pageNum);
            
            if($(this).hasClass("visible")){
                $(this).parent().find("li:nth-child(" + pageNum+ ")").addClass("active");
            }
            
            
            pageNum++;
        });

        //each time the user clicks the next button, remove the visible class, hide that section, fade in the next with a new class of visible
        $("a.next").on("click", function(e){
            e.preventDefault();
                    $(this).closest("article").removeClass("visible").hide().next().addClass("visible").fadeIn();
        });
</script>
	<script type='text/javascript'>
		function preview_image(event) 
		{
		var reader = new FileReader();
		reader.onload = function()
		{
		var output = document.getElementById('output_image');
		output.src = reader.result;
		}
		reader.readAsDataURL(event.target.files[0]);
		}
	</script>
</body>

<!-- employer_manage_jobs.html  [XR&CO'2014], 09:17:42 GMT -->
</html>

