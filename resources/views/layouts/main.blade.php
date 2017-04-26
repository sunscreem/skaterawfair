<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
   
    <title>The Skateraw Fair :: 21st - 24th June 2017 :: Newtonhill, Aberdeenshire</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="http://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=EB+Garamond" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet" type="text/css">
    
    <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/favicons/manifest.json">
    <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="/favicons/favicon.ico">
    <meta name="msapplication-config" content="/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- <link href="css/animate.css" rel="stylesheet"> -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <!-- <link href="css/colorbox.css" rel="stylesheet"> -->
    <!-- <link href="css/style.min.css" rel="stylesheet"> -->
    <link href="css/app.css" rel="stylesheet" type="text/css"> 

    <!-- <link id="skin" href="css/skin-orange.min.css" rel="stylesheet">  -->

    <!-- begin:css-for-demo -->
    <!-- <link rel="stylesheet" type="text/css" href="css/demo.css"> -->
    <!-- end:css-for-demo -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-target=".navbar-default">

        <!-- begin:navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="#home">The Skateraw Fair</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#home">Home</a></li>
            <li><a href="@if(Request::getPathInfo() != '/new')/@endif#about">About</a></li>
            <li><a href="@if(Request::getPathInfo() != '/new')/@endif#events">Events</a></li>
            <li><a href="@if(Request::getPathInfo() != '/new')/@endif#photos">Gallery</a></li>
            <li><a href="@if(Request::getPathInfo() != '/new')/@endif#qanda">Information</a></li>
            <li><a href="@if(Request::getPathInfo() != '/new')/@endif#contact">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- end:navbar -->
    @yield('content')

    <!-- begin:copyright -->
    <section id="copyright">
            <div class="row">

                <div class="col-md-3">
                     <ul class="list-inline social-icon">
                        <li>
                            <a href="https://www.facebook.com/skaterawfair/" class="icon-facebook" rel="tooltip" title="Visit Our Facebook Page" data-placement="top"><i class="fa fa-facebook-square"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <p>Skateraw Fair website built with <i class="fa fa-heart-o"></i> by <a href="https://robertcooper.xyz" target="_blank">Robert Cooper</a></p>
                    <p>Spotted a mistake or have a contribution? <a href="#">Contact Us</a> or <a href="https://github.com/sunscreem/skaterawfair">Use GitHub</a></p> 
                    <p>Copyright &copy; {{ date('Y') }} All Right Reserved.</p>
                </div>
                <div class="col-md-3">
                    <ul class="list-inline social-icon">
                        <li>
                            <a href="https://github.com/sunscreem/skaterawfair" class="icon-github" rel="tooltip" title="Open Source Website - GitHub" data-placement="top"><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end:copyright -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;key=AIzaSyArHJHF5AXC7JiuWRnKKskAXjLamEJQZ0c"></script>
    <script src="js/gmap3.js"></script>
    <script src="js/jquery.colorbox.js"></script>
    <script src="js/jquery.easing.js"></script> 
    <script src="js/script.js"></script>

  </body>
</html>