<?php
include "header.php";
if(!empty($_POST['submit']))
{
	//$sel=executework("select * from skillistic_faculty where password='".$_POST['old_password']."' and faculty_id='".$_SESSION['skillistic_admin']."'");
	//$sel=executework("select * from skillistic_faculty where password='".$_POST['old_password']."' and email_id_off='".$_SESSION['faculty_id']."'");

	//$cnt=@mysqli_num_rows($sel);
	//echo "count".$cnt;
	//exit();
	//if($cnt>0)
	//{
		$upd=executework("update skillistic_faculty set password='".$_POST['new_password']."' where email_id_off='".$_SESSION['username']."'");
		redirect("login.php?succ=1");
	//}
	//else
	//{
	//	redirect("change_forgot.php?fail=1");
	//}
}

?>
<style type="text/css">
label
{
	color:white;
}
.form-control
{
	width:50%;
	align:center;
}
</style>
<script type="text/javascript" src="jscript/jsvalidation.js"></script>
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:500px;">
                        <div class="sparkline8-list mt-b-30">
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad" style="
    align-content: center;
    text-align: -webkit-match-parent;
"><br><br>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                            <div class="basic-login-inner">
                                                <h3 style="text-align:center;color:#FFFFFF">Change Password</h3>
                                               <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="change_password" id="change_password" enctype="multipart/form-data" method="post" onSubmit="return validate_resetpswd();">
                                                    <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">New Password</label>
                                                        <input type="password" class="form-control" placeholder="New password" name="new_password" id="new_password"/>
                                                        <div id="error2" style=" text-align:center; color:#FF0000"></div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">Confirm Password</label>
                                                        <input type="password" class="form-control" placeholder="Confirm password" name="confirm_password" id="confirm_password"/>
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
        <?php include "footer.php"?>