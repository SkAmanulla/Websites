<?php
include "header.php";
//include("admin/include/include.php");
if(!empty($_POST['submit']))
{
            $sel_user=executework("select * from skillistic_faculty where faculty_id='".$_POST['username']."' and password='".$_POST['password']."'");
			$count_user=@mysqli_num_rows($sel_user);
			if($count_user>0)
			{
				$row_user=@mysqli_fetch_array($sel_user);
				if($row_user['status']==1)
				{
					$update=executework("update skillistic_faculty set last_login='".$row_user['login_time']."',login_time='".date("Y-m-d H:i:s")."'");
					$_SESSION['skillistic_admin']=$_POST['username'];
					$_SESSION['faculty']=$row_user['faculty_id'];
					$_SESSION['faculty_id']=$row_user['id'];
					$_SESSION['user_type']="user";
					$_SESSION['session_id']=time();
					$_SESSION['faculty_name']=$row_user['faculty_name'];
					$_SESSION['faculty_email']=$row_user['email_id_off'];
					$_SESSION['faculty_mobile']=$row_user['mobile_no'];;
					$_SESSION['last_login']=$row_user['login_time'];
					//print_r($_SESSION);
					//exit();
					redirect("index.php");
				}
				else
				{
					$dis=1;
				}
            }
            else
			{
				$sqlzoo=1;
			}
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>

</head>
<style type="text/css">
span
{
	color:#FF0000;
	text-align:center;
}
.form-control {
    width: 100%;
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
            <div class="col-md-8 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login" style="margin-top:100px; margin-bottom: 50px;">
                    <h3 style=" color:white; text-align: left">Login </h3>
                   
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                    <?php
				if(!empty($msg)){
				?>
			<div style="color: #CC0000;"><?php echo $msg; ?></div>
                <?php
                }else if(!empty($_GET['invalid'])==1){
				?>
				<div style="color:#CC0000"><?php echo "Entered Details Are Invalid"; ?></div>
				<?php
				}
				else if(!empty($sqlzoo)==1){
			?>
            <div style="color:#CC0000"><?php echo "Invalid Username/Password"; ?></div>
            <?php } 
				else if(!empty($_GET['inv_usr'])==1){
			?>
            <div style="color:#CC0000">Entered Username Is Invalid</div>
            <?php } 
            else if(!empty($_GET['succ'])==1){
            ?>
            <div style="color:green">Password changed successfully</div>
            <?php } 
			else if(!empty($dis)==1)
			{
			?>
            <div style="color:#FF0000">This User Is In De-Active</div>
            <?php } ?>
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
                                <h1>Login </h1>
                             
                            </div>
                        </div> -->
                        <div class="hpanel"> 
                        <div class="panel-body">
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
  
             
               
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="login_form" id="login_form" enctype="multipart/form-data" onSubmit="return login_validation();">
            
                            <div class="form-group-inner">
                                <label class="control-label" for="username">Username</label>
                        <input type="text" placeholder="Enter your ID" title="Please enter you username" value="" name="username" id="username" class="form-control">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                            <div class="form-group-inner">
                                <label class="control-label" for="password">Password</label>
                            <input type="password" title="Please enter your password" placeholder="******" value="" name="password" id="password" class="form-control">
                                <div id="error2" style=" text-align:left; color:#FF0000"></div>
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
                            <div>
                           <a href="forget_password.php">Forgot Password</a>
                            </div>
                            <div align="center" style="margin-top:20px; width:10%; margin-left:100px;">
                            <input type="submit" name="submit" id="submit" class="btn btn-success btn-block loginbtn" value="Login">
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>

<?php include "footer.php"?>
</html>