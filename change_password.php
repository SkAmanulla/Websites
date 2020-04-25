<?php
include "header.php";
if(!empty($_POST['submit']))
{
	$sel=executework("select * from skillistic_faculty where password='".$_POST['old_password']."' and faculty_id='".$_SESSION['skillistic_admin']."'");
	//echo ("select * from skillistic_faculty where password='".$_POST['old_password']."' and username='".$_SESSION['skillistic_admin']."'");

	$cnt=@mysqli_num_rows($sel);
	echo "count".$cnt;
	//exit();
	if($cnt>0)
	{
		$upd=executework("update skillistic_faculty set password='".$_POST['new_password']."' where faculty_id='".$_SESSION['skillistic_admin']."'");
		redirect("change_password.php?succ=1");
	}
	else
	{
		redirect("change_password.php?fail=1");
	}
}

?>
<style type="text/css">
label
{
	color:white;
}
.form-control {

    display: block;
    width: 22%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;

}
</style>
<script type="text/javascript" src="jscript/jsvalidation.js"></script>
<br><br>
<meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accordion | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
         ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
         ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
         ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
         ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
         ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
         ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="css/animate.css">-->
    <!-- mCustomScrollbar CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">-->
    <!-- normalize CSS
         ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- accordions CSS
         ============================================ -->
    <link rel="stylesheet" href="css/accordions.css">
	<!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="css/tabs.css">
    <!-- style CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="style.css">-->
    <!-- responsive CSS
         ============================================ -->
   <!-- <link rel="stylesheet" href="css/responsive.css">-->
    <!-- modernizr JS
         ============================================ -->
   <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script>-->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:500px;">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad" style="
    align-content: center;
    text-align: -webkit-match-parent;
">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                            <div class="basic-login-inner">
                                                <h3 style="text-align:center;color:#FFFFFF">Change Password</h3>
                                               <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="change_password" id="change_password" enctype="multipart/form-data" method="post" onSubmit="return validate_changepassword();">
                                                    <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">Old Password</label>
                                                        <input type="password" class="form-control" placeholder="Old password" name="old_password" id="old_password" style="width:22%;"/>
                                                        <div id="error2" style=" text-align:center; color:#FF0000"></div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">New Password</label>
                                                        <input type="password" class="form-control" placeholder="New password" name="new_password" id="new_password" style="width:22%;"/>
                                                        <div id="error2" style=" text-align:center; color:#FF0000"></div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">Confirm Password</label>
                                                        <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" id="confirm_password" style="width:22%;"/>
                                                        <div id="error3" style=" text-align:center; color:#FF0000"></div>
                                                    </div>
                                                   <br>
                                                    <input type="submit" name="submit" id="submit" value="Change Password" class="btn btn-default">
                                                </form>
                                            </div>
                                        </div>              
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
		<?php  include "footer.php"  ?>
	