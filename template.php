<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IPnology - Home Page</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="include/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="include/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="include/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="include/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="include/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="include/font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="include/css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="include/css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="include/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="include/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="include/css/style.css">
    <link rel="stylesheet" type="text/css" href="include/css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="include/js/modernizr.custom.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>	
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Off Canvas Navigation
    ================================================== -->
    <div class="navmenu navmenu-default navmenu-fixed-left offcanvas"> <!--- Off Canvas Side Menu -->
        <div class="close" data-toggle="offcanvas" data-target=".navmenu">
            <span class="fa fa-close"></span>
        </div>
        <div class="add-margin"></div>
        <ul class="nav navmenu-nav"> <!--- Menu -->
            <li><a href="#home" class="page-scroll">Home</a></li>
            <li><a href="#meet-us" class="page-scroll">Overview</a></li>
            <li><a href="#services" class="page-scroll">Services</a></li>
            <li><a href="#works" class="page-scroll">Portfolio</a></li>
            <li><a href="#about-us" class="page-scroll">About Us</a></li>
            <li><a href="#contact" class="page-scroll">Contact Us</a></li>
        </ul><!--- End Menu -->
    </div> <!--- End Off Canvas Side Menu -->

    <!-- Home Section -->
	<?php require_once $home;?>

    <!-- Meet Us Section -->
    <?php require_once $meetus;?>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
                <a href="#">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <?php require_once $services;?>

    <!-- Call-to-Action Section -->
    <div id="cta">
        <div class="container text-center">
            <a href="#" class="btn go-to-btn">Check our shop</a>
        </div>
    </div>

    <!-- Portfolio Section -->
    <?php require_once $portfolio;?>

    <!-- Clients Section -->
    <?php require_once $clients;?>

    <!-- About Us Section -->
    <?php require_once $aboutus;?>
    

    <!-- Testimonial Section -->
    <?php require_once $testimonial;?>
    

    <!-- Contact Section -->
    <?php require_once $contactus;?>
    

    <nav id="footer">
        <div class="container">
             <div class="pull-left">
                <p>2016 © IPnology. All Rights Reserved. Coded & Designed by Team IPnology</p>
            </div>
            <div class="pull-right"> 
                <a href="#home" class="page-scroll">Back to Top <span class="fa fa-angle-up"></span></a>
            </div>
        </div>
    </nav>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="include/js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="include/js/bootstrap.js"></script>
    <script type="text/javascript" src="include/js/SmoothScroll.js"></script>
    <script type="text/javascript" src="include/js/jasny-bootstrap.min.js"></script>

    <script src="include/js/owl.carousel.js"></script>
    <script src="include/js/typed.js"></script>
    <script>
      $(function(){
          $("#head-title").typed({
            strings: ["We make websites^1000", "24/7 available for hire^1000" ,"Web design with diffence^1000"],
            typeSpeed: 100,
            loop: true,
            startDelay: 100
          });
      });
    </script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="include/js/main.js"></script>

  </body>
</html>