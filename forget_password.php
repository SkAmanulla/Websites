<?php
include "header.php";
include_once("phpmail/send_mail.php");
$a=0;
if(!empty($_POST['submit']))
{
            $sel_user=executework("select * from skillistic_faculty where email_id_off='".$_POST['username']."' ");
            $count_user=@mysqli_num_rows($sel_user);
            if($count_user>0)
            {
            $row_user=@mysqli_fetch_array($sel_user);
            $to=$row_user['email_id_off'];
            $rand_num=rand(99999,1000000);
			$message="Verification Code".$rand_num; 
            $admin_subject1="Skillistic Faculty Verification Code";
            $message=$rand_num." is your verification code for Skillistic account.";
            $mailsent=send_mail($to, "", $message, $admin_subject1);
            $updt=executework("update skillistic_faculty set random_code='".$rand_num."' where email_id_off='".$_POST['username']."' ");
            $_SESSION['username']=$_POST['username'];
            redirect("verify_mail.php");
            }
            else
            {
                $a=1;
            }
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forgot password | Skillistic Solutions</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="../admin/jscript/jsvalidation.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
span
{
    color:#FF0000;
    text-align:center;
}
.form-control {
    width: 30%;
}
</style>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--<div class="back-link back-backend">
                    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
                </div>-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12" style="margin-top:20px;">
                    <h3 align="center" style=" color:white;">Forgot password </h3>
                    <!--<p>This is the best app ever!</p>-->
                
                <div class="hpanel">
                    <div class="panel-body">
                    <?php
                    if($a==1){
                    ?>
                    <div align="center" style="color:#CC0000"><?php echo "Invalid Username"; ?></div>
                    <?php
                }
                ?>
<style type="text/css">
#content
{
  margin-left:0px;
}
.form-control
{
  width:50%
}
</style>
<div class="basic-form-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset">
                        <!-- <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Forgot Password</h1>
                             
                            </div>
                        </div> -->
                        <div class="hpanel">
                        <div class="panel-body">
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
  
             
               
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="login_form" id="login_form" enctype="multipart/form-data" onSubmit="return forgot_validation();">
            
                            <div class="form-group-inner">
                                <label class="control-label" for="username" style="color:#FFFFFF">Email</label>
                        <input type="text" placeholder="enter your Official Email Id" title="Please enter you username" value="" name="username" id="username" class="form-control" style="width:30%;">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                          <!--  <div class="form-group-inner">
                                <label class="control-label" ><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'></label>
                                <span class="help-block small">Can't read the image? click <a href='javascript: refreshCaptcha();' class="style1" style="color:#0099FF">here</a> to refresh.</span>
                                <input id="captcha" name="captcha"  class="form-control"  type="text" placeholder="Enter the above code here" >
                           <div id="error3" style=" text-align:center; color:#FF0000"></div>     
                            </div>-->
                            <!--<div class="checkbox login-checkbox">
                                <label>
                                        <input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>-->
                            <div align="center" style="margin-top:20px; width:10%; margin-left:100px;">
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-block loginbtn" value="Submit">
                            </div>
                            <!--<a class="btn btn-default btn-block" href="#">Register</a>-->
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <!--<div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>-->
    </div>
<!--<script type="text/javascript">
function refreshCaptcha(){
    var img = document.images['captchaimg'];
    img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
-->    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
</body>
<?php include "footer.php"?>
</html>