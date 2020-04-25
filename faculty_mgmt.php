<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	$insert=faculty_insert();
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
function delete_faculty(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="repfaculty.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_faculty(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="repfaculty.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_faculty(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="repfaculty.php?ena_id="+ena_id;
		return false;
	}
	else
	{
		return true;
	}
}

function modify(eid)
{
	if(confirm("Are You Sure To Modify This Record?"))
	{
		window.location.href="faculty_mgmt.php?eid="+eid;
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
                                            <div class="basic-login-inner">
                                               
                                               <div class="container-fluid" style="margin-top:40px;">
                                                <h3 style="text-align:center;color:#FFFFFF">Faculty Management</h3><br>
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
                                                <form action="#" name="faculty_management" id="faculty_management" enctype="multipart/form-data" method="post" onSubmit="return validate_faculty();">
												
												<div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3"> <label style="color:#FFFFFF">Name</label></div>
                                                    <div class="col-md-6">   <input type="text" name="faculty_name" id="faculty_name" value="<?php if(!empty($edit['faculty_name'])){echo $edit['faculty_name'];}else if(!empty($_POST['faculty_name'])){echo $_POST['faculty_name'];} ?>" class="form-control"></div>
                                                    </div>
                                                        
                                                    </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3"> <label style="color:#FFFFFF">Faculty Id</label></div>
                                                    <div class="col-md-6">   <input type="text" name="faculty_id" id="faculty_id" value="<?php if(!empty($edit['faculty_id'])){ echo $edit['faculty_id']; } ?>" class="form-control"></div>
                                                    </div>
                                                        
                                                    </div>
													<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Zone</label></div>
                                                 <div class="col-md-6">
                                                       <select name="zones" id="zones" class="form-control">
													   <option value="">Select</option>
													   <?php
													   	$sel_zone=executework("select * from skillistic_masterdata where master_type='Zones'");
														while($row_zone=@mysqli_fetch_array($sel_zone))
														{
													   ?>
													   <option value="<?php echo $row_zone['id']; ?>"<?php if(!empty($_GET['eid'])){if($edit['zones']==$row_zone['id']){ ?> selected="selected"<?php } } ?>><?php echo $row_zone['master_value']; ?></option>
													   <?php } ?>
													   </select>
                                                   </div>
                                                   </div>
                                                    </div>
												<div class="form-group-inner">
                                                 <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Email Id(official)</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="email_id_off" id="email_id_off" value="<?php if(!empty($edit['email_id_off'])){echo $edit['email_id_off'];}else if(!empty($_POST['email_id_off'])){echo $_POST['email_id_off'];} ?>"  class="form-control"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                 <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Email Id(personal)</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="email_id_per" id="email_id_per" value="<?php if(!empty($edit['email_id_per'])){echo $edit['email_id_per'];}else if(!empty($_POST['email_id_per'])){echo $_POST['email_id_per'];} ?>"  class="form-control"></div>
                                                   
                                                    </div>     
                                                    </div>

												<div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Mobile No(official)</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="mobile_no_off" id="mobile_no_off" value="<?php if(!empty($edit['mobile_no_off'])){echo $edit['mobile_no_off'];}else if(!empty($_POST['mobile_no_off'])){echo $_POST['mobile_no_off'];} ?>"  class="form-control"></div>
                                                    </div>
                                                        
                                                   
                                                    </div>

                                                <div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Mobile No(personal)</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="mobile_no_per" id="mobile_no_per" value="<?php if(!empty($edit['mobile_no_per'])){echo $edit['mobile_no_per'];}else if(!empty($_POST['mobile_no_per'])){echo $_POST['mobile_no_per'];} ?>"  class="form-control"></div>
                                                    </div>
                                                        
                                                   
                                                    </div>
                                                    
                                                <div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Mobile No(alternate)</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="mobile_no_alt" id="mobile_no_alt" value="<?php if(!empty($edit['mobile_no_alt'])){echo $edit['mobile_no_alt'];}else if(!empty($_POST['mobile_no_alt'])){echo $_POST['mobile_no_alt'];} ?>"  class="form-control"></div>
                                                    </div>
                                                        
                                                   
                                                    </div>        


                                                
												<div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Designation</label></div>
                                                    <div class="col-md-6">
														
                                                       <select name="designation" id="designation"  class="form-control">
													   		<option value="">Select</option>
															<?php 
																$sel_data=executework("select * from skillistic_masterdata where status='1' and master_type='Designation'");
																while($row_data=@mysqli_fetch_array($sel_data))
																{
															?>
															<option value="<?php echo $row_data['id'];?>"<?php if(!empty($edit['designation'])){ if($row_data['id']==$edit['designation']){?> selected="selected"<?php } }?>><?php echo $row_data['master_value'];?></option>
															<?php } ?>
													   </select></div>
                                                    </div>
                                                        
                                                    </div>
												
												<div class="form-group-inner">
                                                <div class="row">
                                                       <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Password</label></div>
                                                    <div class="col-md-6">
                                                       <input type="text" name="password" id="password" value="<?php if(!empty($edit['password'])){echo $edit['password'];}else if(!empty($_POST['password'])){echo $_POST['password'];} ?>"  class="form-control"></div>
                                                    </div>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                    <input type="hidden" name="masters" id="masters" value="<?php echo $_GET['id']; ?>">
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" align="middle">
													<?php
														if(!empty($_GET['eid']))
														{
													?>
													<a href="faculty_mgmt.php" style="cursor:pointer;" class="btn btn-primary">Cancel</a>
													<?php } ?>
                                                    </div>
                                                    </div>
													<br>
													<br>
													<br>
<?php 
$sel1=executework("select * from skillistic_faculty order by id desc");
$count=@mysqli_num_rows($sel1);
	$max_recs_per_page=10;
	if (empty($_GET['page_index']))
	{
		$page_index=1;
	}	
	else
	{
		$page_index=$_GET['page_index'];
	}
	$total_recs = $count;
	$pages = $count / $max_recs_per_page; 
	if ($pages < 1)
	{ 
		$pages = 1; 
	}
	if ($pages / (int) $pages <> 1)
	{ 
		$pages = (int) $pages + 1; 
	} 
	else
	{ 
		$pages = $pages; 
	}
	$page12=(int) $page_index;
				
	$pagenow1 = ($max_recs_per_page*($page12-1));
	$sel=executework("select * from skillistic_faculty order by id desc LIMIT $pagenow1, $max_recs_per_page");
?>
													<?php 
														if($count>0)
														{
													?>
													<table class="table border-table" bordercolor="#FFFFFF" style="color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Faculty&nbsp;Name</th>
												<th>Faculty&nbsp;Id</th>
												<th>Zone</th>
                                                <th>Email&nbsp;Id(official)</th>
                                                <th>Mobile&nbsp;No(official)</th>
                                                <th>Password</th>
												<th>Status</th>
												<th>Modify</th>
												<th>Delete</th>
												<th>Disable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										$i=1;
											while($row=@mysqli_fetch_array($sel))
											{
												$sel_zone=get_master_value('Zones',$row['zones']);
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['faculty_name']; ?></td>
												<td><?php echo $row['faculty_id']; ?></td>
												<td><?php echo $sel_zone['master_value']; ?></td>
                                                <td><?php echo $row['email_id_off']; ?></td>
												<td><?php echo $row['mobile_no_off']; ?></td>
												<td><?php echo $row['password']; ?></td>
                                                <td><?php if($row['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($row['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td>
												<a href="#" style="cursor:pointer" onClick="modify('<?php echo $row['id']; ?>')" class="btn btn-primary">Modify</a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_faculty('<?php echo $row['id']; ?>')">Delete</a></td>
												<td><?php if($row['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_faculty('<?php echo $row['id']; ?>')">Disable</a><?php } else if($row['status']==0){ ?><a href="#" onClick="enable_faculty('<?php echo $row['id']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
                                            </tr>
                                            
                                       <?php $i++; } ?>     
                                        </tbody>
                                    </table>
<?php 
if($pages > 1)
{
		if($page12 == 1)
		{
			$pr="class=disabled";
			$prv='#';
		}
		else
		{
			$pr='';
			$prv='faculty_mgmt.php?page_index='.($page12-1);
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='faculty_mgmt.php?page_index='.($page12+1);
		}
?>
<div class="pull-right pagination">
     <ul class="pagination">
          <li <?php echo $pr; ?>  class="page-pre"><a href="<?php echo $prv; ?>">Prev</a></li>
<?php
	  for($im=1;$im<=$pages;$im++)
	  {
		  if($page12 == $im)
			$ac="class=active";
		  else
			$ac='';
?>
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="faculty_mgmt.php?page_index=<?php echo $im ?>"><?php echo $im; ?></a> </li>
		<?php
	  }
		?>
                <li <?php echo $nx; ?> class="page-next"><a href=<?php echo $nxt; ?> >Next</a></li>
              </ul>
            </div>
        
        <?php
	}			  ?>
                           <?php
		   }
		   
		   
		   else
		   {
		   ?>
           
		   	<div align="center" style="color:#FF0000">No Data Found</div>
	<?php		}
		   ?>    
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
        </div>
	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>