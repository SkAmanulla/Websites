<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	$insert=inst_insert();
}
//$masters=get_faculty();
// if(!empty($_GET['eid']))
// {
// 	$edit=get_inst_vals($_GET['eid']);
// }
/*if(!empty($_GET['did']))
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
}*/
$masters=get_inst();
if(!empty($_GET['eid']))
{
	$edit=get_inst_vals($_GET['eid']);
	//print_r($edit);
}
if(!empty($_GET['did']))
{
	$delete_inst=delete_inst($_GET['did']);
}
if(!empty($_GET['dis_id']))
{
	$disable_inst=disable_inst($_GET['dis_id']);
}
if(!empty($_GET['ena_id']))
{
	$enable_inst=enable_inst($_GET['ena_id']);
}
if(!empty($_POST['zones']))
$zone=$_POST['zones'];
else if(!empty($edit['zones']))
$zone=$edit['zones'];
else
$zone='';
if(!empty($_POST['district']))
$dist=$_POST['district'];
else if(!empty($edit['district']))
$dist=$edit['district'];
else
$dist='';
if(!empty($_POST['city']))
$city1=$_POST['city'];
else if(!empty($edit['city']))
$city1=$edit['city'];
else
$city1='';

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
function delete_inst(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="repinst.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_inst(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="repinst.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_inst(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="repinst.php?ena_id="+ena_id;
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
		window.location.href="inst_mgmt.php?eid="+eid;
		return false;
	}
	else
	{
		return true;
	}
}

function get_city(cid,citys)
{
	//alert("cid"+cid);
	if($('#district').val()=="")
	{
		$('#error1').text("Select District");
		$('#district').focus();
		return false;
	}
	else
	{
		var datastring="cid="+cid+"&city="+citys;
		$.ajax({
				type: "POST",
				url: "ajax.php",
				data: datastring,
				cache: false,
				success: function(html)
				{
					//alert(html);
					var con=html.split('~');
					//$('#table-content').html(html);
					if(con[1]==3)
					{
						$('#city').html(con[2]);
						$('#city').val(citys);
					}
				}
		});
	}
}

function get_dist(dist_id,dist)
{
		var state=$('#state').val();
		var datastring="dist_id="+dist_id+"&state="+state+"&dist="+dist;
		//alert(datastring);
		$.ajax({
				type: "POST",
				url: "ajax.php",
				data: datastring,
				cache: false,
				success: function(html)
				{
					//alert(html);
					var con=html.split('~');
					if(con[1]==1)
					{
						$('#district').html(con[2]);
						$('#district').val(dist);
					}
				}
		});
}

function get_zone(state_id,zone1)
{
	
	var datastring="state_id="+state_id+"&zone="+zone1;
		
		$.ajax({
				type: "POST",
				url: "ajax.php",
				data: datastring,
				cache: false,
				success: function(html)
				{
					//alert(html);
					var con=html.split('~');
					if(con[1]==1)
					{
						$('#zones').html(con[2]);
						$('#zones').val(zone1);
					}
					
				}
		});
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
                                                <h3 style="text-align:center;color:#FFFFFF">Institute Management</h3>
                                               <!-- <p>Register User can get sign in from here</p>-->
                                               <?php
											   	if(!empty($_GET['exst'])==1)
												{
											   ?>
                                               <div align="center" style="cursor:pointer; color:#00FF00">Institute Name already exists</div>
                                               <?php } ?> 
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
                                               <div class="container-fluid" style="margin-top:30px;">
                                                <form action="#" name="inst_management" id="inst_management" enctype="multipart/form-data" method="post" onSubmit="return validate_inst();">
												
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Institute Name</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                       <input type="text" name="inst_name" id="inst_name" value="<?php if(!empty($edit['inst_name'])){echo $edit['inst_name'];}else if(!empty($_POST['inst_name'])){echo $_POST['inst_name'];} ?>" class="form-control"></div>
                                                       </div>
                                                        
                                                    </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Address</label>
                                                 </div>
                                                 <div class="col-md-6">
                                                       <textarea name="address" id="address" class="form-control"><?php if(!empty($edit['address'])){echo $edit['address']; }?></textarea>
                                                       </div>
                                                       </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">State</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="state" id="state"  class="form-control" onChange="get_zone(this.value,'<?php echo $zone; ?>');">
													   		<option value="">Select State</option>
															<?php
																$sel_st=executework("select * from skillistic_masterdata where master_type='State' and catid='0'");
																while($row_st=@mysqli_fetch_array($sel_st))
																{
															?>
                                                            <option value="<?php echo $row_st['id']; ?>"<?php if($row_st['id']==$edit['state']){ ?> selected="selected"<?php } ?>><?php echo $row_st['master_value']; ?></option>
                                                            <?php } ?>
													   </select>
                                                    </div>
                                                    </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Zone</label></div>
                                                 <div class="col-md-6">
                                                       <select name="zones" id="zones" class="form-control" onchange="get_dist(this.value,'<?php echo $dist; ?>');">
													   <option value="">Select Zone</option>
													   <?php /*?><?php
													   	$sel_zone=executework("select * from skillistic_masterdata where master_type='Zones'");
														while($row_zone=@mysqli_fetch_array($sel_zone))
														{
													   ?>
													   <option value="<?php echo $row_zone['id']; ?>"<?php if($edit['zone']==$row_zone['id']){ ?> selected="selected"<?php } ?>><?php echo $row_zone['master_value']; ?></option>
													   <?php } ?><?php */?>
													   </select>
                                                   </div>
                                                   </div>
                                                    </div>
													<div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Drictist</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select name="district" id="district"  class="form-control" onChange="get_city(this.value,'<?php echo $city1; ?>');">
													   		<option value="">Select District</option>
													   </select>
                                                    </div>
                                                    </div>
                                                    </div>
												<div class="form-group-inner">
                                               		<div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">City</label>
                                                     </div>
                                                        <?php 
															if(!empty($edit['city']))
															{
																$city=get_master_value("City",$edit['city']);
															}
														?>
                                                        <div class="col-md-6">
                                                     <select name="city" id="city" class="form-control">
                                                     <option value="">Select City</option>
													 <?php 
													 	if(!empty($_GET['eid']))
														{
													 ?>
                                                     <option value="<?php echo $edit['city']?>" selected><?php echo $city['master_value']; ?></option>
													 <?php } ?>
                                                    <?php /*?> <?php 
													 	$sel_city=executework("select * from skillistic_masterdata where status='1'");
														while($row_city=@mysqli_fetch_array($sel_city))
														{
													 ?>
                                                     <option value="<?php echo $row_city['id']; ?>"<?php if($edit['city']==$row_city['id']){?> selected<?php } ?>><?php echo $row_city['master_value']; ?></option>
                                                     <?php }?><?php */?>
                                                     </select>
                                                     </div>
                                                     </div>
                                                    </div>
                                                    
                                                
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Email Id</label>
                                                </div>
                                                <div class="col-md-6">
														
                                                       <input type="text" name="email_id" id="email_id" class="form-control" value="<?php if(!empty($edit['email_id'])){echo $edit['email_id']; }?>">
                                                        </div>
                                                        </div>
                                                    </div>
												
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Contact Person</label></div>
                                                <div class="col-md-6">
                                                       <input type="text" name="cname" id="cname" value="<?php if(!empty($edit['cname'])){echo $edit['cname'];}else if(!empty($_POST['cname'])){echo $_POST['cname'];} ?>"  class="form-control">
                                                </div>
                                                </div>
                                                    </div>
                                                    
                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Contact Number</label></div>
                                                        <div class="col-md-6">
                                                       <input type="text" name="mobile_no" id="mobile_no" value="<?php if(!empty($edit['mobile_no'])){echo $edit['mobile_no'];}else if(!empty($_POST['mobile_no'])){echo $_POST['mobile_no'];} ?>"  class="form-control">
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Details</label></div>
                                                        <div class="col-md-6">
                                                       <textarea name="details" id="details" class="form-control"><?php if(!empty($edit['details'])){echo $edit['details']; }?></textarea></div>
                                                       </div>
                                                        
                                                    </div>
                                                    <div class="col-md-12">
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" align="middle">
													<?php
														if(!empty($_GET['eid']))
														{
													?>
													<a href="inst_mgmt.php" style="cursor:pointer;" class="btn btn-primary">Cancel</a>
													<?php } ?>
                                                    </div>
                                                </form>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
<?php 
$sel1=executework("select * from skillistic_institute order by id desc");
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
	$sel=executework("select * from skillistic_institute order by id desc LIMIT $pagenow1, $max_recs_per_page");
	if($count>0)
	{
?>
                                                <table class="table border-table" bordercolor="#FFFFFF" style="color:white; border-color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Institute&nbsp;Name</th>
                                                <th>Contact&nbsp;Person</th>
                                               	<th>Email&nbsp;Id</th>
                                                <th>Mobile&nbsp;No</th>
												<th>Address</th>
												<th>Status</th>
												<th>Modify</th>
												<th>Delete</th>
												<th>Disable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											//for($s=0;$s<count($masters);$s++)
											$s=1;
											while($row=@mysqli_fetch_array($sel))
											{
										?>
                                            <tr>
                                                <td><?php echo $s; ?></td>
                                                <td><?php echo $row['inst_name']; ?></td>
                                                <td><?php echo $row['cname']; ?></td>
												<td><?php echo $row['email_id']; ?></td>
												<td><?php echo $row['mobile_no']; ?></td>
												<td><?php echo $row['address']; ?></td>
                                                <td><?php if($row['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($row['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td>
												<a href="#" style="cursor:pointer" onClick="modify('<?php echo $row['id']; ?>')" class="btn btn-primary">Modify</a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_inst('<?php echo $row['id']; ?>')">Delete</a></td>
												<td><?php if($row['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_inst('<?php echo $row['id']; ?>')">Disable</a><?php } else if($row['status']==0){ ?><a href="#" onClick="enable_inst('<?php echo $row['id']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
                                            </tr>
                                            
                                       <?php 
									   	$s++;
									   } ?>     
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
			$prv='inst_mgmt.php?page_index='.($page12-1);
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='inst_mgmt.php?page_index='.($page12+1);
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
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="inst_mgmt.php?page_index=<?php echo $im ?>"><?php echo $im; ?></a> </li>
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
<?php 
if(!empty($_GET['eid']))
{
?>
<script type="text/javascript">
get_zone('<?php echo $edit['state']; ?>','<?php echo $zone; ?>');
get_dist('<?php echo $zone; ?>','<?php echo $dist; ?>');
get_city('<?php echo $dist; ?>','<?php echo $city1; ?>');
</script>
<?php } ?>	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>