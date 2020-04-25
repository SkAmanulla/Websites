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
    <meta name="description" content="Cryptocurrency Landing Page HTML5 Template">
    <meta name="keywords" content="Cryptocurrency, bitcoin, bitcoin landing, blockchain, crypto trading ">
    <meta name="author" content="Getnajmul">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skilistic Solutions</title>
    <!--<link rel="shortcut icon" href="http://getnajmul.com/theme/cryptonio/images/favicon.ico" type="image/x-icon">-->
    <!-- Goole Font -->
    <!--slider-->
<script src="jsnew/modernizr.js"></script>
 <!-- jQuery -->
<script src="jsnew/jquery.min.js"></script>
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
 <script type="text/javascript" src="admin/jscript/jsvalidation.js"></script>
 <script type="text/javascript" src="admin/jscript/genfunctions.js"></script>
 <style type="text/css">

.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
    color: #eff3f3;
    background-color: #0bf51e;
    border-color: #005cbf;
}
.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {

    color: #262626;
    text-decoration: none;
    background-color: #7eb6ed;

}
 </style>
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
            <a class="navbar-brand" data-scroll="" href="index.php" style="display: flex; height: 100%"><img src="templates/logo.png" alt="logo" style="height:100%; max-height: 150px;"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!--<li class="nav-item"><a data-scroll="" href="index.php" class="nav-link active">Home</a></li>-->
                    <li class="nav-item"><a data-scroll="" href="index.php#about_cryptonic" class="nav-link">About</a></li>
                    <li class="nav-item"><a data-scroll="" href="index.php#benefits-05" class="nav-link">Benefits</a></li>
                    <li class="nav-item"><a data-scroll="" href="index.php#roadmap" class="nav-link">Edumap</a></li>
                   <!-- <li class="nav-item"><a data-scroll="" href="#team_membar" class="nav-link">Team</a></li>                    
                    <li class="nav-item"><a data-scroll="" href="#faq-area" class="nav-link">Faq</a></li>-->
                    <li class="nav-item"><a data-scroll="" href="index.php#subscribe-wrapper" class="nav-link">Why Us</a></li>
                      <?php
            if(!empty($_SESSION['skillistic_admin'])) 
            {
               ?>
                     
                <li class="nav-item"><a data-scroll="" href="fac_schedule.php" class="nav-link">Schedule</a></li>
                    <li class="nav-item"><a data-scroll="" href="#" class="nav-link">Presentation</a></li>
                     
            
</div>

              <?php
            }
             
            ?>
                </ul>
            </div>
            <div class="language">
                <!--<a href="#" class="token">Login</a>-->
                 <?php
            if(!empty($_SESSION['skillistic_admin'])) 
            {
               ?>
                <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="height: 52px;
    color: #ffff;
    background-color: #065dfb;
    border-color: #065dfb;"><?php echo $_SESSION['faculty_name']; ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="background-color:#C0CACB">
                <!--<li class="nav-item"><a data-scroll="" href="schedule.php" class="nav-link" style="color: #065dfb    !important;">Expenses</a></li>-->
            <li class="nav-item"><a data-scroll="" href="exp_report.php" class="nav-link" style="color: #065dfb    !important;"><strong>Expenses Report</strong></a></li>

      		<li class="nav-item" style="width:100px;"><a data-scroll="" href="change_password.php" class="nav-link" style="width:173px; color: #065dfb    !important;"><strong>Change Password</strong></a></li>
            <li class="nav-item"><a data-scroll="" href="logout.php" class="nav-link" style="color: #065dfb    !important;"><strong>Logout</strong></a> </li>
    </ul>
  </div>
  <?php } ?>
                       <?php
            if(empty($_SESSION['skillistic_admin'])) 
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
    
    
            
        </div>    
    </div>


