<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	$insert=ppt_insert();
}
$masters=get_ppt();
if(!empty($_GET['eid']))
{
	$edit=get_ppt_vals($_GET['eid']);
}
if(!empty($_GET['did']))
{
	$delete_ppt=delete_ppt($_GET['did']);
}
if(!empty($_GET['dis_id']))
{
	$disable_ppt=disable_ppt($_GET['dis_id']);
}
if(!empty($_GET['ena_id']))
{
	$enable_ppt=enable_ppt($_GET['ena_id']);
}
if(!empty($edit['prgrm_title']))
$prgrm=$edit['prgrm_title'];
else
$prgrm='';

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
function delete_ppt(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="ppt_mgmt.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_ppt(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="ppt_mgmt.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_ppt(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="ppt_mgmt.php?ena_id="+ena_id;
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
		window.location.href="ppt_mgmt.php?eid="+eid;
		return false;
	}
	else
	{
		return true;
	}
}
//ajax for onchange of programme
function get_programme(prog_id,prgrm){
//alert("hiii");
var datastring="prog_id="+prog_id;
//alert(datastring);
$.ajax({

   type: "POST",
        url: "ajax.php",
		data: datastring,
		cache :false,
		success: function(html)
		{
			//alert(html);
			var con=html.split('~');
			//alert(con[1]);
	
//}	
			if(con[1]==4)
			{
				$('#prgrm_title').html(con[2]);
				if(prgrm!='')
				{
				   $('#prgrm_title').val(prgrm);
				}
			
			}
		
		}
		                                                                        
		} );

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
                                                <h3 style="text-align:center;color:#FFFFFF">PPT Management</h3>
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
                                               <div class="container-fluid" style="margin-top:30px;">
                                                <form action="#" name="ppt_management" id="ppt_management" enctype="multipart/form-data" method="post" onSubmit="return validate_ppt();">
												
												 <div class="form-group-inner">
                                                 <div class="row">
                                                 <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Category</label></div>
                                                        <div class="col-md-6">
                                                       <select name="category" id="category" value="<?php if(!empty($edit['category'])){echo $edit['category'];}else if(!empty($_POST['category'])){echo $_POST['category'];} ?>" class="form-control"  onchange="get_programme(this.value)";>
                                                       <option value="">Select</option>
                                                       <option value="Hycon">Hycon</option>
                                                        <option value="Techno">Techno</option>
                                                         <option value="general">General</option>
                                                          <option value="datta">Datta</option>
                                                        </select>
                                                        <?php
															if(!empty($edit['category'])){
															?>
                                                       <script>$('#category').val('<?php echo $edit['category']; ?>');</script>
                                                       <?php
															}
																?>
                                                        </div>
                                                        </div>
                                                    </div>
												<div class="form-group-inner" >
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Programme Title</label></div>
                                                 <div class="col-lg-6">
                                                       <select name="prgrm_title" id="prgrm_title" class="form-control">
                                                       
                                                       <option value="">Select</option>
                                                       <!-- <div class="form-control" id="prog"></div>-->
                                                      <?php /*?> <?php
													   	$sel=executework("select * from skillistic_programs where status='1' order by id desc");
														while($row=@mysqli_fetch_array($sel))
														{
													   ?>
                                                       <option value="<?php echo $row['id']; ?>"<?php if(!empty($edit['prgrm_title'])){if($edit['prgrm_title']==$row['id']){?> selected<?php }}?>><?php echo $row['prgrm_title']; ?></option>
                                                       <?php } ?><?php */?>
                                                       </select>
                                                        </div>
                                                        </div>
                                                    </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Topic</label></div>
                                                        <div class="col-md-6">
                                                       <input type="text" name="topic" id="topic" value="<?php if(!empty($edit['topic'])){echo $edit['topic'];}else if(!empty($_POST['topic'])){echo $_POST['topic'];} ?>"  class="form-control">
                                                       </div>
                                                       </div>
                                                        
                                                    </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Details</label></div>
                                                        <div class="col-md-6">
                                                       <textarea name="details" id="details" class="form-control"><?php if(!empty($edit['details'])){echo $edit['details'];}?></textarea>
                                                        </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Upload PPT</label></div>
                                                        <div class="col-md-6">
                                                        <input type="file" name="ppt" id="ppt">
                                                       <?php
													   	if(!empty($edit['ppt']))
														{
													   ?>
                                                       <a href="ppt/<?php echo $edit['ppt']; ?>" style="cursor:pointer; color:white;"><?php echo $edit['ppt']; ?></a></div>
                                                       <?php } ?> 
                                                       </div>
                                                       </div>
                                                    </div>
                                                <div class="col-md-12">
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" align="middle">
													<?php
														if(!empty($_GET['eid']))
														{
													?>
													<a href="ppt_mgmt.php" style="cursor:pointer;" class="btn btn-primary">Cancel</a>
													<?php } ?>
                                                    </div>
                                                </form>
                                                </div>
                                                <br>
                                                <br>
                                                <br>
 <script>
var st=$('#category').val();
if(st!='')
{
	
	get_programme(st,'<?php echo $prgrm; ?>');
}
</script>
<?php 
$sel1=executework("select * from skillistic_ppt order by id desc");
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
	$sel=executework("select * from skillistic_ppt order by id desc LIMIT $pagenow1, $max_recs_per_page");
	if($count>0)
	{
?>
                                                <table class="table border-table" bordercolor="#FFFFFF" style="color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Programme&nbsp;Title</th>
                                                <th>Topic</th>
                                                <th>Dettails</th>
                                                <th>PPT</th>
												<th>Status</th>
												<th>Modify</th>
												<th>Delete</th>
												<th>Disable</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											//for($s=0;$s<count($masters);$s++)
											$s=1;
											while($row=@mysqli_fetch_array($sel))
											{
												$sel_title=executework("select * from skillistic_programs where id='".$row['prgrm_title']."'");
												$row_title=@mysqli_fetch_array($sel_title);
										?>
                                            <tr>
                                                <td><?php echo $s; ?></td>
                                                <td><?php echo $row_title['prgrm_title']; ?></td>
                                                <td><?php echo $row['topic']; ?></td>
												<td><?php echo $row['details']; ?></td>
												<td><a href="ppt/<?php echo $row['ppt'];?>" style="cursor:pointer; color:#FFFFFF;" target="_blank"><?php echo $row['ppt']; ?></a></td>
                                                <td><?php if($row['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($row['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td>
												<a href="#" style="cursor:pointer" onClick="modify('<?php echo $row['id']; ?>')" class="btn btn-primary">Modify</a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_ppt('<?php echo $row['id']; ?>')">Delete</a></td>
												<td><?php if($row['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_ppt('<?php echo $row['id']; ?>')">Disable</a><?php } else if($row['status']==0){ ?><a href="#" onClick="enable_ppt('<?php echo $row['id']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
                                                 <td>
                            
                      
                            <a href="../display_ppt.php?id=<?php echo $row['ppt'];?>" style="cursor:pointer;color:#33FF00" target="_blank" class="btn">Play</a>
                            </td>
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
			$prv='ppt_mgmt.php?page_index='.($page12-1);
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='ppt_mgmt.php?page_index='.($page12+1);
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
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="ppt_mgmt.php?page_index=<?php echo $im ?>"><?php echo $im; ?></a> </li>
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
	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>