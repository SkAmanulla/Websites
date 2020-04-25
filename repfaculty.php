<?php
include_once("header.php");

$masters=get_faculty();
if(!empty($_GET['eid']))
{
	$edit=get_faculty_vals($_GET['id']);
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
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
<script type="text/javascript" src="jscript/jsvalidation.js"></script>
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

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                        <div class="sparkline10-list mt-b-30">
                            <div class="sparkline10-hd">
                                <!--<div class="main-sparkline10-hd">
                                    <h1>Border Table</h1>
                                </div>-->
								<h3 style="color:#FFFFFF">Faculty Report</h3>
                            </div>
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
                            <div class="sparkline10-graph" style="margin-top:50px;">
                                <div class="static-table-list">
								<?php 
									if(count($masters)>0)
									{
								?>
                                    <table class="table border-table" bordercolor="#FFFFFF" style="color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Faculty Name</th>
                                                <th>Email Id</th>
                                                <th>Mobile No</th>
                                                <th>Password</th>
												<th>Status</th>
												<th>Modify</th>
												<th>Delete</th>
												<th>Disable</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											for($s=0;$s<count($masters);$s++)
											{
										?>
                                            <tr>
                                                <td><?php echo $s+1; ?></td>
                                                <td><?php echo $masters[$s]['faculty_name']; ?></td>
                                                <td><?php echo $masters[$s]['email_id']; ?></td>
												<td><?php echo $masters[$s]['mobile_no']; ?></td>
												<td><?php echo $masters[$s]['password']; ?></td>
                                                <td><?php if($masters[$s]['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($masters[$s]['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td>
												<a href="#" style="cursor:pointer" onClick="modify('<?php echo $masters[$s]['id']; ?>')" class="btn btn-primary">Modify</a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_faculty('<?php echo $masters[$s]['id']; ?>')">Delete</a></td>
												<td><?php if($masters[$s]['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_faculty('<?php echo $masters[$s]['id']; ?>')">Disable</a><?php } else if($masters[$s]['status']==0){ ?><a href="#" onClick="enable_faculty('<?php echo $masters[$s]['id']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
                                            </tr>
                                            
                                       <?php } ?>     
                                        </tbody>
                                    </table>
								<?php } 
								else{
								?>	
								<div align="center" style="color:#FF0000">No Data Found</div>
								<?php } ?>
                                </div>
                            </div>
							
                        </div>
                    </div>