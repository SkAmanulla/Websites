<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	//echo "hii";
	//exit();
	$insert=support_insert();
}
$masters=get_faculty();
if(!empty($_GET['eid']))
{
	$edit=get_faculty_vals($_GET['eid']);
}
if(!empty($_GET['did']))
{
	$del_faculty=delete_faculty($_GET['did']);
}
if(!empty($_GET['dis_id']))
{
	$dis_faculty=disable_faculty($_GET['dis_id']);
}
if(!empty($_GET['ena_id']))
{
	$enable_faculty=enable_faculty($_GET['ena_id']);
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
<script type="text/javascript" src="jscript/jsvalidation.js"></script>
<script type="text/javascript" src="jscript/genfunctions.js"></script>
<script type="text/javascript">
function delete_master(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="masterdata.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_master(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="masterdata.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_master(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="masterdata.php?ena_id="+ena_id;
		return false;
	}
	else
	{
		return true;
	}
}


</script>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:500px;">
                        <div class="sparkline8-list mt-b-30">
                            <!--<div class="sparkline8-hd">
                                <div class="main-sparkline8-hd">
                                    <h1>Change Password</h1>
                                </div>
                            </div>-->
                            <div class="sparkline8-graph">
                                <div class="basic-login-form-ad" style="
    align-content: center;
    text-align: -webkit-match-parent;
">
                                    <!--<div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="login-social-inner">
                                                <a href="#" class="button btn-social basic-ele-mg-b-10 facebook span-left"> <span><i class="fa fa-facebook"></i></span> Facebook </a>
                                                <a href="#" class="button btn-social basic-ele-mg-b-10 twitter span-left"> <span><i class="fa fa-twitter"></i></span> Twitter </a>
                                                <a href="#" class="button btn-social basic-ele-mg-b-10 googleplus span-left"> <span><i class="fa fa-google-plus"></i></span> Google+ </a>
                                                <a href="#" class="button btn-social linkedin span-left"> <span><i class="fa fa-linkedin"></i></span> Linkedin </a>
                                            </div>
                                        </div>
                                    </div>-->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                                            <div class="basic-login-inner" style="margin-left: 50px;">
                                                <h3 style="text-align:center;color:#FFFFFF">Support</h3>
                                               <!-- <p>Register User can get sign in from here</p>-->
											   <?php
											   	if(!empty($_GET['succ'])==1)
												{
											   ?>
											   <div align="center" style="cursor:pointer; color:#00FF00">Inserted Successfully</div>
											   <?php }
											   else if(!empty($_GET['upd'])==1)
											   {
											   ?>
											   <div align="center" style="cursor:pointer; color:#00FF00">Updated Successfully</div>
											   <?php } 
											   else if(!empty($_GET['del'])==1)
											   {
											   ?>
											   <div align="center" style="cursor:pointer; color:#00FF00">Deleted Successfully</div>
											   <?php }
											   else if(!empty($_GET['dis'])==1)
											   {
											   ?>
											   <div align="center" style="cursor:pointer; color:#00FF00">Disabled Successfully</div>
											   <?php } 
											   else if(!empty($_GET['ena'])==1)
											   {
											   ?>
											   <div align="center" style="cursor:pointer; color:#00FF00">Enabled Successfully</div>
											   <?php } ?>
											   <div id="error1" style=" text-align:center; color:#FF0000"></div>
                                                <form action="#" name="support" id="support" enctype="multipart/form-data" method="post" onSubmit="return validate_support();">
												
												<div class="form-group-inner">
                                                        <label style="color:#FFFFFF">Title</label>
                                                       <input type="text" name="title" id="title" value="<?php if(!empty($edit['title'])){echo $edit['title'];}else if(!empty($_POST['title'])){echo $_POST['title'];} ?>" class="form-control">
                                                    </div>
                                                <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">File Type</label>
                                                        <select name="filetype" id="filetype"  class="form-control">
													   		<option value="">Browse</option>
															<option value="img" <?php if($edit['filetype']=="img"){
																?>selected <?php } ?> >IMG</option>
															<option value="pdf" <?php if($edit['filetype']=="pdf"){
																?>selected <?php } ?>>PDF</option>
															<option value="video"<?php if($edit['filetype']=="video"){
																?>selected <?php } ?>>VIDEO</option>
													   </select>
                                                    </div>
                                                <div class="form-group-inner">
                                                        <label style="color:#FFFFFF">File Upload</label>
                                                       <input type="file" name="filename" id="filename" value="" >
                                                        
                                                    </div>    
												
                                                    <input type="hidden" name="masters" id="masters" value="<?php echo $_GET['id']; ?>">
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" align="middle">
													<?php
														if(!empty($_GET['eid']))
														{
													?>
													<a href="repfaculty.php" style="cursor:pointer;" class="btn btn-primary">Cancel</a>
													<?php } ?>
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
                
                
            </div>
        </div>
	
        <!-- Basic Form End-->
        <!-- <?php
		// include_once("footer.php");
		?> -->