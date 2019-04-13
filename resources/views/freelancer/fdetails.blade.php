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
        div#slider article {
            background: white;
            padding: 30px;
            float: left;
            margin-top: 20px;
            width: 100%;
        }

        a.next {
            background: #f36b06;
            display: block;
            width: 300px;
            float: left;
            margin: 10px 0 0 164px;
            text-align: center;
            clear: left;
            padding: 7px 13px;
            border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            color: white;
            text-decoration: none
        }

        #page {
            float: left;
            margin: 10px 0 0 0
        }

        #page li {
            float: left;
            margin: 0 5px 0 0;
            padding: 5px 15px;
            background: #f36b06;
            text-align: center;
            border-radius: 4px;
            -moz-border-radius: 4px;
            -webkit-border-radius: 4px;
            color: white;
        }

        #page li a {
            color: white;
            text-decoration: none
        }

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
                                    <form method="POST" action="/fskills">
                                        @csrf
                                        <h4>Skills</h4>
                                        <div class="row">
                                            <input type="text" name="id" hidden="hideen" value="{{Auth::user()->id}}">
                                            <input hidden value="0" id="langCounter" name="langCounter">
                                            <div class="col-lg-3">

                                                <div class="pf-field">
                                                    <select name="category" class="chosen" id="category" onchange="cat()">
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
                                            <br>
                                            <br>

                                        </div>
                                        <br>
                                        <h4>Education Details</h4>
                                        <div class="row">
                                            <input type="text" name="id" hidden="hideen" value="{{Auth::user()->id}}">
                                            <input hidden value="0" id="langCounter" name="langCounter">
                                            <fieldset class="col-md-8" id="languages">
                                                <div class="row" id="languageSet">
                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Title</span>
                                                        <div class="pf-field">
                                                            <select data-placeholder="Please Select Specialism" class="select" name="education0">
                                                                <option disabled selected value> -- select Course -- </option>
                                                                <option>BA</option>
                                                                <option>BBA</option>
                                                                <option>BSc</option>
                                                                <option>B.Com</option>
                                                                <option>BCA</option>
                                                                <option>B.Tech</option>
                                                                <option>MA</option>
                                                                <option>MBA</option>
                                                                <option>M.Com</option>
                                                                <option>MCA</option>
                                                                <option>M.Tech</option>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Major</span>
                                                        <div class="pf-field">
                                                            <input type="text" name="major0" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Passout Year</span>
                                                        <div class="pf-field">
                                                            <select id="year0" class="select" value="" name="year0">
                                                            <option value="-1"> --Choose Year-- </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <div class="col-md-1">
                                                <button class="btn btn-primary" id="newLanguageField" style="padding: 1px 5px;">
                                                    Add More
                                                </button>
                                            </div>
                                        </div>
                                        <br>
                                        <h4>Awards Details</h4>
                                        <div class="row">
                                            <input hidden value="0" id="langCounterX" name="langCounter">
                                            <fieldset class="col-md-8" id="languages1">
                                                <div class="row" id="languageSet0">
                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Award</span>
                                                        <div class="pf-field">
                                                            <input type="text" name="award0" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Authority</span>
                                                        <div class="pf-field">
                                                            <input type="text" name="authority0" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <span class="pf-title">Awarded Year</span>
                                                        <div class="pf-field">
                                                            <select id="yearr0" class="select" value="" name="yearr0">
                                                            <option value="-1"> --Choose Year-- </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                            </fieldset>
                                            <div class="col-md-1">
                                                <button class="btn btn-primary" id="newLanguageField1" style="padding: 1px 5px;">
                                                    Add More
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <button type="submit">
                                                submit
                                            </button>
                                            <br>
                                            <br>
                                    </form>
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
            var langCounterSe = 1;

            var currentYear = new Date().getFullYear()
            max = currentYear + 10
            var yearsHtml = "";
            for (var year = currentYear - 30; year <= max; year++) {
                yearsHtml += '<option value="'+year+'"> '+year+' </option>';
            }

            $("#year0").html(yearsHtml);

            $("#newLanguageField").on("click", function(e) {
                e.preventDefault();
                //append
                var htmlX = '<div class = "row" id = "languageSet' + langCounterSe + '" >' +
                    '<div class = "col-lg-3" >' +
                    '<span class = "pf-title"></span>' +
                    '<div class = "pf-field">' +
                    '<select data - placeholder = "Please Select Specialism"class = "select"name = "education' + langCounterSe + '" >' +
                    '<option disabled selected value > --select Course-- </option>' +
                    '<option> BA </option>' +
                    '<option>  BBA </option>' +
                    '<option> BSc </option>' +
                    '<option> B.Com </option>' +
                    '<option> BCA </option>' +
                    '<option> B.Tech </option>' +
                    '<option> MA </option>' +
                    '<option> MBA </option>' +
                    '<option> M.Com </option>' +
                    '<option> MCA </option>' +
                    '<option> M.Tech </option>' +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class = "col-lg-3" >' +
                    '<span class = "pf-title"></span>' +
                    '<div class = "pf-field">' +
                    '<input type = "text"name = "major' + langCounterSe + '" >' +
                    '</div>' +
                    '</div>' +
                    '<div class = "col-lg-3">' +
                    '<span class = "pf-title"></span>' +
                    '<div class = "pf-field">' +
                    '<select id = "year' + langCounterSe + '" class = "select" name = "year' + langCounterSe + '"> ' +
                    '<option value="-1"> --Choose Year-- </option>' + yearsHtml +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-1">' +
                    '<button type="button" class="btn btn-primary btnRemoveLang" onclick="removeThis(' + langCounterSe + ')" style="padding: 1px 8px;">x</button>' +
                    '</div>' +
                    '</div>';

                $("#languages").append(htmlX);
                $("#langCounter").val(langCounter);

                langCounter++;
                langCounterSe++;

            });

            //remove
            function removeThis(id) {
                // alert(id);
                $("#languageSet" + id).remove();
                langCounter--;
            }

            var langCounterX = 1;
            var langCounterXe = 1;

            var currentYear = new Date().getFullYear()
            max = currentYear + 10
            var yearsHtml = "";
            for (var year = currentYear - 30; year <= max; year++) {
                yearsHtml += '<option value="'+year+'"> '+year+' </option>';
            }

            $("#yearr0").html(yearsHtml);

            $("#newLanguageField1").on("click", function(e) {
                e.preventDefault();
                var $html = '<div class="row"  id="languageSet0' + langCounterXe + '" >' +
                    '<div class="col-lg-3">' +
                    '<span class="pf-title"</span>' +
                    '<div class="pf-field">' +
                    '<input type="text" name="award' + langCounterXe + '"  />' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-lg-3">' +
                    '<span class="pf-title"></span>' +
                    '<div class="pf-field">' +
                    '<input type="text" name="authority' + langCounterXe + '"/>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-lg-3">' +
                    '<span class="pf-title"></span>' +
                    '<div class="pf-field">' +
                    '<select id="year0' + langCounterXe + '" class="select" value="" name="yearr' + langCounterXe + '">' +
                    '<option value="-1"> --Choose Year-- </option>' + yearsHtml +
                    '</select>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-1">' +
                    '<button type="button" class="btn btn-primary btnRemoveLang" onclick="removeThisX(' + langCounterXe + ')" style="padding: 1px 8px;">x</button>' +
                    '</div>' +
                    '</div>';


                $("#languages1").append($html);

                $("#langCounterX").val(langCounterX);
                // year13(langCounter)
                langCounterX++;
                langCounterXe++;

            });

            //remove
            function removeThisX(id) {
                $("#languageSet0" + id).remove();
                langCounterX--;
            }
        </script>

</body>

</html>