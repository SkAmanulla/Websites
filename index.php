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
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.png">
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
<style type="text/css">
.btn {

    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    border-radius: 4px;

}
.dropdown-menu > li > a:focus, .dropdown-menu > li > a:hover {

    color: #262626;
    text-decoration: none;
    background-color: #7eb6ed;

}
</style>
    <link href="templates/css.css" rel="stylesheet"> 
    <link href="templates/css_002.css" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
  <style type="text/css">

.btn-primary:not(:disabled):not(.disabled).active, .btn-primary:not(:disabled):not(.disabled):active, .show > .btn-primary.dropdown-toggle {
    color: #eff3f3;
    background-color: #0bf51e;
    border-color: #005cbf;
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
                   <!-- <li class="nav-item"><a data-scroll="" href="#header" class="nav-link active">Home</a></li>-->
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
    border-color: #065dfb; font-size:14px;"><?php echo $_SESSION['faculty_name']; ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu" style="background-color:#C0CACB">
                <!--<li class="nav-item"><a data-scroll="" href="schedule.php" class="nav-link" style="color: #065dfb    !important;">Expenses</a></li>-->
            <li class="nav-item"><a data-scroll="" href="exp_report.php" class="nav-link" style="color: #065dfb    !important; font-size:14px;"><strong>Expenses Report</strong></a></li>

      		<li class="nav-item" style="width:100px;"><a data-scroll="" href="change_password.php" class="nav-link" style="width:172px; color: #065dfb    !important;font-size:14px;"><strong>Change Password</strong></a></li>
            <li class="nav-item"><a data-scroll="" href="logout.php" class="nav-link" style="color: #065dfb    !important;font-size:14px;"><strong>Logout</strong></a> </li>
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
    </nav></div><!-- END Navbar -->
    
    <div class="container" style="height:80vh;">
    <br>


    <div class="flexslider">
   	<div class="flex-viewport" style="overflow: hidden; position: relative;">
   		<ul class="slides" style="width: 100%; -webkit-transition: 0.6s; transition: 0.6s; -webkit-transform: translate3d(-5032px, 0, 0);">
   			<li class="clone" style="width: 100%; float: left; display: block;">
        		<img src="imagesnew/1.PNG" alt=""/>
    		</li>
       		<li style="width: 100%; float: left; display: block;" class="">
    	    	<img src="imagesnew/2.PNG" alt=""/>
    		</li>
    		<li class="" style="width:100%; float: left; display: block;">
    	    	<img src="imagesnew/3.PNG" alt=""/>
    		</li>
            <li class="" style="width:100%; float: left; display: block;">
    	    	<img src="imagesnew/4.PNG" alt=""/>
    		</li>
             <li class="" style="width:100%; float: left; display: block;">
    	    	<img src="imagesnew/5.PNG" alt=""/>
    		</li>
			
		</ul>
	</div>
</div>
       
                <div class="intro-text" style="display:none">
              <!--  <p>Knowledge can be communicated, but not wisdom. One can find it, live it, do wonders through it, but one cannot communicate and teach it.”  </p>
                    <h2>― Hermann Hesse</h2>-->
                    


                <!--    <a href="#" class="btn btn-default btn-default-style intro_active_3 intro_btn_3">White Paper</a>
					<a href="#" class="btn btn-default btn-default-style intro_btn_3">Try App</a>-->
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-5 img-wrapper" style="display:none">
               <!-- <div class="intro-img">
                    <img src="templates/banner-vector.png" alt="">
                </div>-->
            </div>
        </div>    
    </div>
    
</header> <!-- End Header -->
<style type="text/css" >
.flex-control-nav{
display:none;
}
</style>
<section id="benefits">
   

    <div id="about_cryptonic" class="about_cryptonic">
        <div class="container">
            <div class="row  justify-content-end">  
        <div class="about-img">
            <div class="img-wrapper  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                 <img src="templates/about.png" alt="" style="max-width: 100%">            </div>
        </div>
				<div class="col-sm-12 col-md-8 col-lg-6 padding-none">
					<div class="about_cryptonic-content">
						<h6 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;"><span></span>About Skillistic</h6><br>

						<h4 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Skilistic Solutions is trying fill up a void that is visible in the present day education system. </h4><br>

						<p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;" align="justify">A group of Educational Enthusiasts, from different fields, areas and expertise, coming together with a concept of academic partnership programmes, through training and upgrading the teachers, making them competitive enough to face the challenges in the modern education system, Skilistic Solutions is trying fill up a void that is visible in the present day education system. <br>

The advantages of technical and scientific advancements are brought to the learning atmosphere in classrooms, through updating and upgrading the teachers, thus improving the quality of education, an urgent requirement of the present day world. <br>
We, with the collaboration with experts from different Education Boards, Educational Research Wings, Scholars, Research Analysts and so on, our team is specially equipped with dealing with the different challenges that the teachers or the school management has to face, regarding  education.
</strong></p>

					  <p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">&nbsp;</p>
						<!--<a href="#" class="btn btn-default btn-default-style wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">DOWNLOAD WHITEPAPER</a>		-->			</div>
				</div>
            </div>   
        </div>
    </div> 
    
</section> <!-- End Benefits -->

<!--<section id="countdown-area">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2>Crowdsale ends In</h2>
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div class="countdown-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                    <div id="countdown" class="countdownHolder"><span class="countDays"><span class="position">					<span class="digit" style="top: -2.1em; opacity: 0;">0</span>					<span class="digit static" style="top: 0px; opacity: 1;">0</span>				</span>				<span class="position">					<span class="digit static" style="top: 0px; opacity: 1;">9</span>				</span></span><span class="countDiv countDiv0"></span><span class="countHours"><span class="position">					<span class="digit" style="top: -2.1em; opacity: 0;">2</span>					<span class="digit static" style="top: 0px; opacity: 1;">2</span>				</span>				<span class="position">					<span class="digit static" style="top: 0px; opacity: 1;">3</span>				</span></span><span class="countDiv countDiv1"></span><span class="countMinutes"><span class="position">					<span class="digit" style="top: -2.1em; opacity: 0;">5</span>					<span class="digit static" style="top: 0px; opacity: 1;">5</span>				</span>				<span class="position">					<span class="digit static" style="top: 0px; opacity: 1;">0</span>				</span></span><span class="countDiv countDiv2"></span><span class="countSeconds"><span class="position">					<span class="digit" style="top: -2.1em; opacity: 0;">0</span>					<span class="digit static" style="top: 0px; opacity: 1;">0</span>				</span>				<span class="position">					<span class="digit static" style="top: 0px; opacity: 1;">3</span>				</span></span></div>
              </div>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-12 ">
                <div id="progerss-wrapper">
                    
                    <div class="progress  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                        <div class="progress-bar"><span>80%</span></div>
                        <div class="minimum_goal">
                            <div class="progress-shpe"></div>
                            <div class="caption">
                                <span>Minimum Goal</span>
                                <h3>$713.07 K USD</h3>
                            </div>
                        </div>
                        <div class="heard_cap">
                            <div class="progress-shpe"></div>
                            <div class="caption">
                                <span>Hard Cap</span>
                                <h3>$900.07 K USD</h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
                <a href="#" class="btn btn-default btn-default-style  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4" style="visibility: hidden; animation-duration: 2s; animation-name: none;">Buy Token Now</a>
            </div>
        </div> 

        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="payment_mathod">
                    <h3 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Payment Method</h3>
                    <div class="payment-options">
                        <a href="#" class="payment-single wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                            <div class="payment-wrapper">
                                <div class="payment-icon">
                                    <i class="flaticon-litecoin"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="payment-single wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                            <div class="payment-wrapper">
                                <div class="payment-icon">
                                    <i class="flaticon-euro"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="payment-single wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                            <div class="payment-wrapper">
                                <div class="payment-icon">
                                    <i class="flaticon-ripple"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="payment-single wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                            <div class="payment-wrapper">
                                <div class="payment-icon">
                                    <i class="flaticon-cryptocurrency"></i>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="payment-single wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.6s; animation-name: none;">
                            <div class="payment-wrapper">
                                <div class="payment-icon">
                                   <i class="flaticon-litecoin"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>          
    </div>
</section>--> <!-- End Countdown -->

<!--<section id="token_distribution" class="token_distribution">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Initial Token Distribution</h2>
                    <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="token_distribution_wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                    <img src="templates/chart-3-01.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>--> <!-- End token distribution -->

<!--<section id="token_funds" class="token_funds">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Token Uses of Funds</h2>
                    <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 ">
                <div class="token_distribution_wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                    <img src="templates/chart-3-02.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>--> <!-- End token_funds -->

<section id="benefits-05">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">Benefits of Using Our Solution</h2>
                   <!-- <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>-->
                </div>
            </div>
        </div>
        <div class="row">    
            <div class="col-sm-12 col-md-6 col-lg-3 benefits-single-item">
                <div class="benefits-single-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="benefits-img">
                        <img src="templates/benefits1-01.png" alt="">
                    </div>
             
                    
<a href="#" data-toggle="popover" data-trigger="hover"  data-content="Every student is unique. The strategies that we develop for the students need to be applicable for many, as it could not be practical for individual strategies, in a classroom atmosphere.  There are different parameters to be considered while developing a useful strategy for a classroom."><h4>Teaching Strategy</h4></a>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 benefits-single-item">
                <div class="benefits-single-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="benefits-img">
                        <img src="templates/benefits1-02.png" alt="">
                    </div>
                    
                    <a href="#" data-toggle="popover" data-trigger="hover"  data-content="The edge factor always lies in the competency and preparation of the teacher. In addition to being trained, they need regular orientations and follow-up trainings, so as to keep them updated and upgraded."><h4>Teachers’ Training</h4></a>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 benefits-single-item">
                <div class="benefits-single-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="benefits-img">
                        <img src="templates/benefits1-03.png" alt="">
                    </div>
                    <h4>Activity Planning</h4>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 benefits-single-item">
                <div class="benefits-single-wrapper wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.8s; animation-name: fadeInUp;">
                    <div class="benefits-img">
                        <img src="templates/benefits1-04.png" alt="">
                    </div>
                    <h4>Parent Regulation</h4>
                </div>
            </div>
        </div>    
    </div>
 <!--   <span class="shape1"><img src="templates/shape-5-01.png" alt=""></span>
    <span class="shape2"><img src="templates/shape-5-02.png" alt=""></span>--></section>

<section id="roadmap" class="roadmap">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">The Edu map</h2>
                <!--    <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>-->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 roadmap-area">
                <div class="roadmap-tree">

                    <div class="row roadmap-cloumn pn_reverse  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                        <div class="roadmap-marker"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc  roadmap-dese-left">
                            <div class="doc-wraper">
                                <!--<h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">The Training Session mainly concentrates on the general aspects of teaching, common challenges in teaching, major motivations and  inspirations. They are mostly aimed at the general teaching aptitude.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-right">
                            <span>Phase 1</span><span> General</span>                        </div>
                    </div>
        <!-- Ends: .row -->

                    <div class="row roadmap-cloumn wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                        <div class="roadmap-marker marker-off"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-left">
                            <span>Phase 2</span><span> Subjects</span>                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc roadmap-dese-right">
                            <div class="doc-wraper">
                               <!-- <h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">The methodology of dealing with each and every subject is different, that too do change based on the age . The teachers have to be regularly updated about the changes in practices in these as well.</p>
                            </div>
                        </div>
                    </div>
        <!-- Ends: .row -->

                    <div class="row roadmap-cloumn pn_reverse  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                        <div class="roadmap-marker"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc roadmap-dese-left">
                            <div class="doc-wraper">
                                <!--<h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">Skills are often forgotten at the cost of marks, success and components like parent satisfaction, to name one. But skills are those that are required to be successful in life. The teachers have to incorporate the skill based teaching among the students, and they need to be updated about that as well.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-right">
                            <span>Phase 3</span><span> Skills</span>                        </div>
                    </div>
        <!-- Ends: .row -->

                    <div class="row roadmap-cloumn  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                        <div class="roadmap-marker marker-off"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-left">
                            <span>Phase 4</span><span> Grades</span>                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc roadmap-dese-right">
                            <div class="doc-wraper">
                                <!--<h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">Over the grades, the subject parts are so designed as they increase in its complications and they need to be followed on strategies that are different in one way or the other. The strategies that the teachers have to adopt also vary.</p>
                            </div>
                        </div>
                    </div>
      <!-- Ends: .row -->
                  
                      <div class="row roadmap-cloumn pn_reverse  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                        <div class="roadmap-marker"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc roadmap-dese-left">
                            <div class="doc-wraper">
                                <!--<h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">As we believe, every child is unique, as we should have some plans for some of them, at least, for they do demand it. Though they are not that Specially Abled Category, but need special attention. They need to be handled individually. </p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-right">
                            <span>Phase 5</span><span> Special Cares</span>                        </div>
                    </div>
              <!-- Ends: .row -->
              
                 <div class="row roadmap-cloumn  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                        <div class="roadmap-marker marker-off"></div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-status roadmap-left">
                            <span>Phase 6</span><span> Support Services</span>                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6 roadmap-desc roadmap-dese-right">
                            <div class="doc-wraper">
                                <!--<h4>Start of Airdrop and Token Sale.</h4>-->
                                <p align="justify">The teachers need some kinds of specific support, at times, with some lessons, sometimes with some concepts, sometimes with some lessons and at times, with some students as well. Issues could be there, at times, with evaluation strategies as well. </p>
                            </div>
                        </div>
                    </div>
                  <!-- Ends: .row -->
              

                </div>
            </div>
            
        </div>
    </div>
</section> <!-- End roadmap -->

<!--<section id="team_membar" class="team_membar">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Meet Our Team Member</h2>
                    <p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>
                </div>
            </div>
        </div>
        <div class="row single-row">
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-01.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Ariyan Rovert</h4>
                                <span>Ceo &amp; Co-Founder</span>                            </div>
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-02.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>David Martin</h4>
                                <span>Co-Founder &amp; Team Lead</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-03.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Reena Scot</h4>
                                <span>Team Lead</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-04.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Paul Smith</h4>
                                <span>Co-Founder</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div> 

        <div class="row single-row">
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-01.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Ariyan Rovert</h4>
                                <span>Ceo &amp; Co-Founde</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-02.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>David Martin</h4>
                                <span>Founder</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-03.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Reena Scot</h4>
                                <span>Ceo &amp; Co-Founde</span>                            </div>                            
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
            
            <div class="col-sm-6 col-md-6 col-lg-3 single-wrapper">
                <div class="team-single-item  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                    <figure>
                        <div class="member-img">
                            <img src="templates/team-04.jpg" alt="member img" class="img-fluid">                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4>Paul Smith</h4>
                                <span>Co-Founde</span>                            </div>
                            <ul class="social-links list-unstyled">
                                <li class="nav-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="nav-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div> 
    </div>
</section>-->  <!-- End team_membar -->

<!--<section id="logos" class="logos">
    <div class="container">
        <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Cryptonio As Seen On</h2>
                    <p class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 roadmap-area">
                
                <div class="companis-logo-wapper">
                    <ul class="companis-logos  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                        <li><img src="templates/partner6-1.png" alt=""></li>
                        <li><img src="templates/partner6-2.png" alt=""></li>
                        <li><img src="templates/partner6-3.png" alt=""></li>
                        <li><img src="templates/partner6-4.png" alt=""></li>
                        <li><img src="templates/partner6-5.png" alt=""></li>
                    </ul>
                    <ul class="companis-logos  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                        <li><img src="templates/partner6-6.png" alt=""></li>
                        <li><img src="templates/partner6-7.png" alt=""></li>
                        <li><img src="templates/partner6-8.png" alt=""></li>
                        <li><img src="templates/partner6-1.png" alt=""></li>
                        <li><img src="templates/partner6-2.png" alt=""></li>
                    </ul>
                    <ul class="companis-logos  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                        <li><img src="templates/partner6-3.png" alt=""></li>
                        <li><img src="templates/partner6-4.png" alt=""></li>
                        <li><img src="templates/partner6-5.png" alt=""></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</section>-->  <!-- End logos -->

<!--<section id="faq-area" class="faq-area">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-10">
                <div class="faq-wrapper">
                    <div class="sub-title">
                        <h2>Frequently Asked Questions</h2>
                    </div>
                    <div id="accordion">
                        <div class="card  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">
                            <div class="card-header" id="heading-1">
                                <a data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                    What cryptocurrencies can I use to purchase?                                </a>                            </div>
                      <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                                <div class="card-body">
                                    Artificial intelligence based on 
neural networks, built using the newest algorithms for self learning, 
analysis and comparison of neurons in which will be self-corrected, 
based on the history of success and failure, taking into account the 
correlation of the objects of analysis.
                                </div>
                            </div>
                        </div>

                        <div class="card  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                            <div class="card-header" id="heading-2">
                                <a data-toggle="collapse" href="#collapse-2" aria-expanded="true" aria-controls="collapse-2">
                                    How do I benefit from the ICO Token?                                </a>                            </div>
                     <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                                 <div class="card-body">
                                    Artificial intelligence based on 
neural networks, built using the newest algorithms for self learning, 
analysis and comparison of neurons in which will be self-corrected, 
based on the history of success and failure, taking into account the 
correlation of the objects of analysis.
                                </div>
                            </div>
                        </div>

                        <div class="card  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;">
                            <div class="card-header" id="heading-4">
                                <a data-toggle="collapse" href="#collapse-3" aria-expanded="true" aria-controls="collapse-3">
                                    To Keep Makeup Looking Fresh Take A Powder                                </a>                            </div>
                      <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
                                <div class="card-body">
                                    Artificial intelligence based on 
neural networks, built using the newest algorithms for self learning, 
analysis and comparison of neurons in which will be self-corrected, 
based on the history of success and failure, taking into account the 
correlation of the objects of analysis.
                                </div>
                            </div>
                        </div>

                        <div class="card  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                            <div class="card-header" id="heading-5">
                                <a data-toggle="collapse" href="#collapse-4" aria-expanded="true" aria-controls="collapse-4">
                                    What Curling Irons Are The Best Ones                                </a>                            </div>
                      <div id="collapse-4" class="collapse" data-parent="#accordion" aria-labelledby="heading-4">
                                <div class="card-body">
                                    Artificial intelligence based on 
neural networks, built using the newest algorithms for self learning, 
analysis and comparison of neurons in which will be self-corrected, 
based on the history of success and failure, taking into account the 
correlation of the objects of analysis.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>--> <!-- End faq-area -->

<section id="subscribe-wrapper">
    <div class="container">
        <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-12 col-lg-10 mx-auto">
            <!--<div id="subscribe" class="subscribe">
                <div class="subscribe-form">
                    <div class="sub-title">
                        <h2 class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;">Subscribe For Token Sale Update</h2>
                    </div>
                    <form action="#">
                        <div class="form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">
                            <input placeholder="Enter Your E-mail" type="email" required="">
                            <button type="submit" class="text-center">Subscribe</button>
                        </div>
                    </form>
              </div>

                <div class="subscribe-social">
                    <ul class="social-items list-unstyled">
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.2s; animation-name: none;"><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.3s; animation-name: none;"><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.4s; animation-name: none;"><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;"><a href="#"><i class="fab fa-instagram ins-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".6s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.6s; animation-name: none;"><a href="#"><i class="fab fa-facebook-f fb-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.7s; animation-name: none;"><a href="#"><i class="fab fa-twitter twitt-icon"></i></a></li>
                        <li class=" wow fadeInUp" data-wow-duration="2s" data-wow-delay=".8s" style="visibility: hidden; animation-duration: 2s; animation-delay: 0.8s; animation-name: none;"><a href="#"><i class="fab fa-linkedin-in link-icon"></i></a></li>
                    </ul>
                </div> 
            </div>-->
        </div>
		</div>
    </div>
</section> <!-- End subscribe -->

<footer id="footer" class="footer" style="padding-top:0px;">
    <div class="container">
        <div class="row footer-btm-wrapper">
            <!--<div class="col-12  col-sm-6 col-md-12 col-lg-6 footer-single-col">-->
                <div class="row">        
            <div class="col-sm-12">
                <div class="sub-title">
                    <h2 class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">Why Us</h2>
                   <!-- <p class="wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">Due
 to the use of large computing power and artificial based on the neural 
network, the NRM assistant will instantly analyze user data and offer 
solutions for their further use.</p>-->
                </div>
            </div>
        </div>
                <p>
Education is a more challenging concept in the present day world, with advancing technology, opportunities to acquire information and the global opportunities. The material part of education, including infrastructure and the textbooks are well taken care, but not much about the intellectual part – the teachers. 
The delivery and transmission of education that has to happen through the medium called the teachers, have to be upgraded with the kind of requirements in the system, in the society. Skilistic Solutions help in getting the teaching fraternity upgraded, as per they are required to meet them. 
</p>
            </div>

<!--            <div class="col-sm-6 col-md-6 col-lg-2 footer-single-col">
                <h3 class="subtitle_1">Company</h3> 
                <ul class="list-unstyled">
                    <li><a href="#">About Company</a></li>
                    <li><a href="#">Feature Product</a></li>
                    <li><a href="#">Our Team</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-2 footer-single-col">
                <h3 class="subtitle_1">Help Links</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Customer Support</a></li>
                    <li><a href="#">Refund Policy</a></li>
                    <li><a href="#">Live Chat</a></li>
                    <li><a href="#">Support Policy</a></li>
                </ul>
            </div>-->

           <!-- <div class="col-sm-6 col-md-6 col-lg-2 footer-single-col">
                <h3 class="subtitle_1">Product</h3>
                <ul class="list-unstyled">
                    <li><a href="#">Wordpres</a></li>
                    <li><a href="#">Pricing</a></li>
                    <li><a href="#">Download</a></li>
                    <li><a href="#">Other Product</a></li>
                </ul>
            </div>  -->
        </div>

        <div class="copyright">
            <p>Copyright © 2019, <span>Skilistic Solutions</span></p>            
        </div>         
</footer><!-- ./ End Footer Area-->
    <div id="particles-jsi3" class="particles" style="width: 100%; height: 800px;" ><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1349" height="100%"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1349" height="100%"></canvas></div>  

    <!-- JavaScript Files -->
    <script src="templates/jquery-3.js"></script>
    <script src="templates/popper.js"></script>
    <script src="templates/bootstrap.js"></script>
    <script src="templates/jquery_002.js"></script>
    <script src="templates/isotope.js"></script>
    <script src="templates/jquery_004.js"></script>
    <script src="templates/jquery.js"></script>
    <script src="templates/owl.js"></script>     
    <script src="templates/jquery_003.js"></script>
    <script src="templates/wow.js"></script>  
    <script src="templates/particles.js"></script>
    <script src="templates/app3.js"></script>  
    <script src="templates/smooth-scroll.js"></script>   
    <script src="templates/wow.js"></script>          
    <script src="templates/custom.js"></script>

<style type="text/css">
.flex-direction-nav{
display:none;
}
</style>
</body></html>