<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	$insert=programs_insert();
}
$masters=get_programs();
if(!empty($_GET['eid']))
{
	$edit=get_programme_vals($_GET['eid']);
	//print_r($edit);
	//exit();
}
if(!empty($_GET['did']))
{
	$del_programme=delete_programme($_GET['did']);
}
if(!empty($_GET['dis_id']))
{
	$dis_programme=disable_programme($_GET['dis_id']);
}
if(!empty($_GET['ena_id']))
{
	$enable_programme=enable_programme($_GET['ena_id']);
}

if(!empty($_POST['category']))
{

	$cat=implode(",",$_POST['category']);
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
.details{

    font-size: 14px;
    color: #f1f1f1;
    border: 1px solid white;
    outline: none;
    border-radius: 0px;
    box-shadow: none;

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
function delete_programme(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="repprogramme.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_programme(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="repprogramme.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_programme(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="repprogramme.php?ena_id="+ena_id;
		return false;
	}
	else
	{
		return true;
	}
}

function modify(eid)
{
	//alert("eid"+eid);
	if(confirm("Are You Sure To Update This Record?"))
	{
		window.location.href="programme_mgmt.php?eid="+eid;
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
                                            <div class="basic-login-inner" style="margin-top:30px;">
                                                <h3 style="text-align:center;color:#FFFFFF">Programme&nbsp;Management</h3>
                                               
                                               <!-- <p>Register User can get sign in from here</p>-->
											    <?php
											   	if(!empty($_GET['exst'])==1)
												{
											   ?>
                                               <div align="center" style="cursor:pointer; color:#00FF00">Title already exists</div>
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
                                               <div class="container-fluid"  style="margin-top:30px;">
                                                <form action="#" name="programs" id="programs" enctype="multipart/form-data" method="post" onSubmit="return validate_programs();">
												<div class="form-group-inner">
                                                <div class="row">
                                                        <div class="col-md-3"><label style="color: #f7f4f4;">Category</label></div>
                                                        <?php
                                                          //$cat="";

                                                        	if(!empty($_GET['eid']))
                                                        	{
                                                        		$cat=explode(",", $edit['category']);

                                                        	}
                                                        ?>
                                                        <div class="col-md-6">

                         <label style="color: #f7f4f4;"><input type="checkbox" name="category[]" id="category[]" value="Hycon" <?php if(!empty($_GET['eid'])){ if(in_array("Hycon", $cat)){echo 'checked="checked"';} }?>>Hycon</label>
                       <label style="color: #f7f4f4;"><input type="checkbox" name="category[]" id="category[]" value="Techno" <?php if(!empty($_GET['eid'])){ if(in_array("Techno", $cat)){echo 'checked="checked"';} }?>>Techno</label>
                      <label style="color: #f7f4f4;"><input type="checkbox" name="category[]" id="category[]" value="General" <?php if(!empty($_GET['eid'])){ if(in_array("General", $cat)){echo 'checked="checked"';} }?>>General</label>
                     <label style="color: #f7f4f4;"><input type="checkbox" name="category[]" id="category[]" value="Datta" <?php if(!empty($_GET['eid'])){ if(in_array("Datta", $cat)){echo 'checked="checked"';} }?>>Datta</label>
                                                   
                                                        </div>
                                                        </div>
                                                    </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                      <div class="col-md-3">  <label style="color:#FFFFFF">Programme Title</label></div>
                                                      <div class="col-md-6"> <input type="text" name="prgrm_title" id="prgrm_title" value="<?php if(!empty($edit['prgrm_title'])){echo $edit['prgrm_title'];}else if(!empty($_POST['prgrm_title'])){echo $_POST['prgrm_title'];} ?>" class="form-control"></div>
                                                      </div>
                                                        
                                                    </div>
												
												
                                                    <div class="col-md-12" >
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary">
													<?php
														if(!empty($_GET['eid']))
														{
													?>
													<a href="programme_mgmt.php" style="cursor:pointer;" class="btn btn-primary">Cancel</a>
													<?php } ?>
                                                    </div>
                                                </form>
                                               
                                                <br>
                                                <br>
                                                <br>
<?php 
$sel1=executework("select * from skillistic_programs order by id desc");
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
	$sel=executework("select * from skillistic_programs order by id desc LIMIT $pagenow1, $max_recs_per_page");
	if($count>0)
	{
?>
                                       <table class="table border-table" bordercolor="#FFFFFF" style="color:white; width:95%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Programme&nbsp;Title</th>
                                               <!--  <th>Details</th> -->
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
                                                <td><?php echo $row['prgrm_title']; ?></td>
                                              <!--   <td><?php echo $row['details']; ?></td> -->
                                                <td><?php if($row['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($row['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td>
												<a href="#" style="cursor:pointer" onClick="modify('<?php echo $row['id']; ?>')" class="btn btn-primary">Modify</a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_programme('<?php echo $row['id']; ?>')">Delete</a></td>
												<td><?php if($row['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_programme('<?php echo $row['id']; ?>')">Disable</a><?php } else if($row['status']==0){ ?><a href="#" onClick="enable_programme('<?php echo $row['id']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
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
			$prv='programme_mgmt.php?page_index='.($page12-1);
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='programme_mgmt.php?page_index='.($page12+1);
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
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="programme_mgmt.php?page_index=<?php echo $im ?>"><?php echo $im; ?></a> </li>
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
        </div>
	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>