<?php
ob_start();
session_start();
header("Cache-control: private");
include("admin/include/include.php");

include("admin/include/functions.php");
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilistic Solutions</title>
    <!--<link rel="shortcut icon" href="http://getnajmul.com/theme/cryptonio/images/favicon.ico" type="image/x-icon">-->
    <!-- Goole Font -->
    <!--slider-->
<script src="jsnew/modernizr.js"></script>
 <!-- jQuery -->
<script src="jsnew/jquery.min.js"></script>
<script src="../admin/jscript/jsvalidation.js"></script>
<script>window.jQuery || document.write('<script src="jsnew/libs/jquery-1.7.min.js">\x3C/script>')</script>
<!-- FlexSlider -->
<script defer src="jsnew/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
</script>

    <link href="templates/css.css" rel="stylesheet"> 
    <link href="templates/css_002.css" rel="stylesheet"> 
   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="templates/bootstrap.css"> 
    <link rel="stylesheet" href="templates/font-awesome.css">
   
    <link rel="stylesheet" href="templates/flaticon.css">
  
    <link rel="stylesheet" href="templates/magnific-popup.css">
     
    <link rel="stylesheet" href="templates/jquery.css">   
    <link rel="stylesheet" href="templates/animate.css">
    <link rel="stylesheet" href="templates/owl_002.css">
    <link rel="stylesheet" href="templates/owl.css">
    <!-- preloader css--> 
    <link rel="stylesheet" href="templates/preloader.css">
    <!-- main style-->
    <link rel="stylesheet" href="templates/style.css">

     <link rel="stylesheet" href="templates/cryptonio.css">  
    <link rel="stylesheet" href="templates/responsive.css">
                            
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body class="loaded">
<!-- Preloader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<header id="header" class="header header-01" style="min-height:0px;">
    <!-- START Navbar -->
    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 85px;"><nav class="navbar navbar-expand-md navbar-light bg-faded cripto_nav" style="">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" data-scroll="" href="http://getnajmul.com/theme/cryptonio/index-03.html"><img src="imagesnew/logo.png" alt="logo" style="height:150px;"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a data-scroll="" href="#header" class="nav-link active">Home</a></li>
                    <li class="nav-item"><a data-scroll="" href="#about_cryptonic" class="nav-link">About</a></li>
                    <li class="nav-item"><a data-scroll="" href="#benefits-05" class="nav-link">Benefits</a></li>
                    <li class="nav-item"><a data-scroll="" href="#roadmap" class="nav-link">Edumap</a></li>
                   <!-- <li class="nav-item"><a data-scroll="" href="#team_membar" class="nav-link">Team</a></li>                    
                    <li class="nav-item"><a data-scroll="" href="#faq-area" class="nav-link">Faq</a></li>-->
                    <li class="nav-item"><a data-scroll="" href="#subscribe-wrapper" class="nav-link">Why Us</a></li>
                    <li class="nav-item"><a data-scroll="" href="schedule.php" class="nav-link">Schedule</a></li>
                    <li class="nav-item"><a data-scroll="" href="presentation.php" class="nav-link">Presentation</a></li>
                </ul>
            </div>
            <div class="language">
            <?php
			if(!empty($_SESSION['skillistic_admin'])) 
			{
			   ?>
               <a data-scroll="" href="change_password.php" class="nav-link">Change Password</a>
               <a href="logout.php" class="token">Logout</a>  
             
              <?php
            }
		     else
			 {?>
               <a href="login.php" class="token">Login</a>	       
			 <?php
			 }?>
				
               <!-- <div class="dropdown"><span>Eng<i class="fas fa-chevron-down"></i></span>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="http://getnajmul.com/theme/cryptonio/blog.html">Deutsch</a></li>
                        <li><a class="dropdown-item" href="http://getnajmul.com/theme/cryptonio/blog-post.html">Español</a></li>
                        <li><a class="dropdown-item" href="http://getnajmul.com/theme/cryptonio/shop.html">Spanish</a></li>
                    </ul>
                </div>-->
            </div>
        </div>
    </nav></div><!-- END Navbar -->
   