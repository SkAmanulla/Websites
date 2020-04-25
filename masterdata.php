<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	$insert=master_insert();
}
//$masters=get_masters($_GET['master_name']);

if(!empty($_GET['did']))
{
	$del_master=delete_master($_GET['did'],$_GET['id'],$_GET['master_name']);
}
if(!empty($_GET['dis_id']))
{
	$dis_master=disable_master($_GET['dis_id'],$_GET['id'],$_GET['master_name']);
}
if(!empty($_GET['ena_id']))
{
	$enable_master=enable_master($_GET['ena_id'],$_GET['id'],$_GET['master_name']);
}

if(!empty($_POST['popup_subm']))
{
	//echo "hid".$_POST['hid'];
	//echo "mid".$_POST['mid'];
	//echo "mvalue".$_POST['mval'];
	//exit();
	$update=edit_master($_POST['hid'],$_POST['mid'],$_POST['mval']);
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
<script type="text/javascript">
function delete_master(did,id,master_name)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="masterdata.php?did="+did+"&id="+id+"&master_name="+master_name;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_master(dis_id,id,master_name)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="masterdata.php?dis_id="+dis_id+"&id="+id+"&master_name="+master_name;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_master(ena_id,id,master_name)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="masterdata.php?ena_id="+ena_id+"&id="+id+"&master_name="+master_name;
		return false;
	}
	else
	{
		return true;
	}
}

function modify(btn)
{
	if(confirm("Are You Sure To Modify This Record?"))
	{
		//alert("hiii");
		var master_id_val=$(btn).attr("data-id");
		$("#m"+master_id_val).click();
		$('#hid').val(master_id_val);
		var datastring="master_id="+master_id_val;
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
						//alert(con[2]);
						//alert(con[3]);
						//alert(con[4]);
						$('#master_value').text(con[2]);
						$('#mval').val(con[2]);
						$('#mid').val(con[2]);
						$('#edit_value').val(con[3]);
					}
				}
		});
	}
	else
	{
		return false;
	}
}

function get_dist(dist_id)
{
		var state=$('#state').val();
		var datastring="dist_id="+dist_id+"&state="+state;
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
					}
				}
		});
}

function get_zone(state_id)
{
	var datastring="state_id="+state_id;
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
						$('#zones').html(con[2]);
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
                                                
                                             <!--  <div class="container-fluid" align="center">-->
                                             <div class="container-fluid" style="margin-top:30px;">
                                             <h3 style="text-align:center;color:#FFFFFF"><?php echo $_GET['master_name']?>&nbsp;&nbsp;<?php echo "Master"; ?></h3><br>
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
                                                <form action="#" name="masterdata" id="masterdata" enctype="multipart/form-data" method="post" onSubmit="return validate_masterdata();">
												<?php
													if($_GET['id']==4 || $_GET['id']==5 || $_GET['id']==2)
													{
												?>
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">State</label></div>
                                                 <div class="col-md-6">
                                                       <select name="state" id="state" class="form-control" onchange="get_zone(this.value);">
													   <option value="">Select</option>
													   <?php
																$sel_st=executework("select * from skillistic_masterdata where master_type='State' and catid='0'");
																while($row_st=@mysqli_fetch_array($sel_st))
																{
															?>
                                                            <option value="<?php echo $row_st['id']; ?>"><?php echo $row_st['master_value']; ?></option>
                                                            <?php } ?>
													   </select>
                                                   </div>
                                                   </div>
                                                    </div>
												<?php
													}
													if($_GET['id']==4 || $_GET['id']==5)
													{
												?>
													<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">Zone</label></div>
                                                 <div class="col-md-6">
                                                       <select name="zones" id="zones" class="form-control" onchange="get_dist(this.value);">
													   <option value="">Select</option>
													   <?php
													   	$sel_zone=executework("select * from skillistic_masterdata where master_type='Zones'");
														while($row_zone=@mysqli_fetch_array($sel_zone))
														{
													   ?>
													   <option value="<?php echo $row_zone['id']; ?>"><?php echo $row_zone['master_value']; ?></option>
													   <?php } ?>
													   </select>
                                                   </div>
                                                   </div>
                                                    </div>
												<?php } 
													if($_GET['id']==5)
													{
												?>
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF">District</label></div>
                                                 <div class="col-md-6">
                                                       <select name="district" id="district" class="form-control">
													   <option value="">Select</option>
													   <?php /*?><?php
													   	$sel_state=executework("select * from skillistic_states");
														while($row_state=@mysqli_fetch_array($sel_state))
														{
													   ?>
													   <option value="<?php echo $row_state['id']; ?>"><?php echo $row_state['state']; ?></option>
													   <?php } ?><?php */?>
													   </select>
                                                   </div>
                                                   </div>
                                                    </div>
												<?php 
												}
												if($_GET['id']!='6')
												{
													for($i=1;$i<=5;$i++)
													{
												?>
                                                    <div class="form-group-inner">
                                                    <div class="row">
                                                    <div class="col-md-3">
                                                        <label style="color:#FFFFFF"><?php echo $_GET['master_name'].$i; ?></label></div>
                                                     <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter Master Name" name="master_name<?php echo $i; ?>" id="master_name<?php echo $i; ?>"/>
                                                        </div>
                                                        </div>
                                                        
                                                    </div>
                                                <?php } } 
													else if($_GET['id']==6)
													{
												?> 
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-md-3">
                                                        <label style="color:#FFFFFF"><?php echo $_GET['master_name']; ?></label></div>
                                                      
														<?php
															$sel_pay=executework("select * from skillistic_payments where pdate='".date("Y-m-d")."'");
															$row_pay=@mysqli_fetch_array($sel_pay);
														?>
                                                        <div class="col-md-6">
                                                        <input type="text" class="form-control" placeholder="Enter Master Name" name="payment_per_km" id="payment_per_km" value="<?php if(!empty($row_pay['amt'])){echo $row_pay['amt'];} ?>"/>
                                                        </div>
                                                        </div>
                                                    </div>
												<?php } ?>
                                                <div class="col-md-12">
                                                    <input type="hidden" name="masters" id="masters" value="<?php echo $_GET['id']; ?>">
                                                    <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-primary" align="middle">
                                                    </div>
                                                </form>
                                             </div>
                                               <!-- </div>-->
                                            </div>
                                        </div>
                                        
										<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                        <div class="sparkline10-list mt-b-30">
                            <div class="sparkline10-hd">
                                <!--<div class="main-sparkline10-hd">
                                    <h1>Border Table</h1>
                                </div>-->
                            </div>
<?php
	$sel=executework("select * from skillistic_masterdata where master_type='".$_GET['master_name']."' order by id desc");
	//echo ("select * from skillistic_faculty_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst order by sdate,faculty_id desc");
	$count=@mysqli_num_rows($sel);
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
	$sel1=executework("select * from skillistic_masterdata where master_type='".$_GET['master_name']."' LIMIT $pagenow1, $max_recs_per_page");
	//echo ("select * from skillistic_faculty_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst group by sdate,faculty_id,institute_id order by sdate,faculty_id desc LIMIT $pagenow1, $max_recs_per_page");
?>
							<?php 
								if(($count>0)&&($_GET['id']!=6))
								{
							?>
                            <div class="sparkline10-graph">
                                <div class="static-table-list">
                                    <table class="table border-table" bordercolor="#FFFFFF" style="color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<?php if($_GET['id']==2){?>
												<th>State</th>
                                                <?php } if($_GET['id']==4){?>
												<th>Zone</th>
												<?php } if($_GET['id']==5){ ?>
												<th>District</th>
												<?php } ?>
                                                <th>Master Name</th>
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
											while($row=@mysqli_fetch_array($sel1))
											{
												$dist=executework("select * from skillistic_masterdata where id='".$row['catid']."'");
												$row_dist=@mysqli_fetch_array($dist);
												$sel_zone=get_master_value('Zones',$row['catid']);
												//$get_state=get_master_value('State',$row['catid']);
												$get_state=get_master_value('State',$row['catid']);
												$get_dist=get_master_value('District',$row['catid']);
										?>
                                            <tr>
                                                <td><?php echo $s; ?></td>
												<?php if($_GET['id']==2){ ?>
                                                <td><?php echo ucwords($get_state['master_value']); ?></td>
												<?php } if($_GET['id']==4){ ?>
                                                <td><?php echo ucwords($sel_zone['master_value'])?></td>
                                                <?php } if($_GET['id']==5){ ?>
												<td><?php echo ucwords($get_dist['master_value']); ?></td>
												<?php } ?>
                                                <td><?php echo ucwords($row['master_value']); ?></td>
                                                <td><?php if($row['status']==1){ ?><div  style=" color:#33FF00">Active</div><?php } else if($row['status']==0){?><div style="color:#FF0000">Disable</div><?php } ?></td>
												<td><a class="Primary mg-b-10 btn btn-primary" href="#"   data-id='<?php echo $row['id'];?>' onclick="modify(this);" style="cursor:pointer;" >Modify</a>
												<a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert"  data-id='<?php echo $row['id'];?>' ><span id="m<?php echo $row['id']; ?>"></span></a>
												</td>
												<td><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="delete_master('<?php echo $row['id']; ?>','<?php echo $_GET['id']; ?>','<?php echo $_GET['master_name']; ?>')">Delete</a></td>
												<td><?php if($row['status']==1){ ?><a href="#" style="cursor:pointer;" class="btn btn-primary" onClick="disable_master('<?php echo $row['id']; ?>','<?php echo $_GET['id']; ?>','<?php echo $_GET['master_name']; ?>')">Disable</a><?php } else if($row['status']==0){ ?><a href="#" onClick="enable_master('<?php echo $row['id']; ?>','<?php echo $_GET['id']; ?>','<?php echo $_GET['master_name']; ?>')" style="cursor:pointer;" class="btn btn-primary">Enable</a><?php } ?></td>
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
			$prv='masterdata.php?page_index='.($page12-1).'&id='. $_GET['id'].'&master_name='.$_GET['master_name'];
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='masterdata.php?page_index='.($page12+1).'&id='. $_GET['id'].'&master_name='.$_GET['master_name'];
		}
?>
<div class="pull-right pagination">
     <ul class="pagination" style="margin-left:-500px;">
          <li <?php echo $pr; ?>  class="page-pre"><a href="<?php echo $prv; ?>">Prev</a></li>
<?php
	  for($im=1;$im<=$pages;$im++)
	  {
		  if($page12 == $im)
			$ac="class=active";
		  else
			$ac='';
?>
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="masterdata.php?page_index=<?php echo $im ?>&id=<?php echo $_GET['id']; ?>&master_name=<?php echo $_GET['master_name']; ?>"><?php echo $im; ?></a> </li>
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

							else{
							?>
                            <div style="color:#FF0000; margin-left:-200px;">No Data Found</div>
                            <?php } ?>                                  
									<div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                    </div>
                                    <div class="modal-body">
                                        <!--<i class="fa fa-check modal-check-pro"></i>-->
                                        <h2>Modify <?php echo $_GET['master_name']; ?></h2>
                                        <!--<p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>-->
                                    </div>
									<form name="master_popup" id="master_popup" action="masterdata.php" method="post" enctype="multipart/form-data">
                
                
                
                					<div class="row">
                                    
                                        <div class="col-lg-5">
                                       
                                        <strong><span id="master_value" style="color:white;"></span></strong>
                                         <label class="login2" style="color:#000000;">Master Value</label>
                                        </div>
                                        
                                        <div class="col-lg-5">
                                       <input type="text" name="edit_value" id="edit_value">
                                        </div>
                                    </div>  
                                    <br>
                 
                  <div class="col-lg-12" align="center">
                  <input type="submit" name="popup_subm" id="popup_subm" value="Submit" class="btn btn-primary">
                  <input type="hidden" name="hid" id="hid">
                  <input type="hidden" name="mid" id="mid">
                  <input type="hidden" name="mval" id="mval">
                  </div>                                                                   
                </form>
				<br>
                                    <!--<div class="modal-footer">-->
                                        <a data-dismiss="modal" href="#" style="margin-left:450px;">Cancel</a>
                                       <!-- <a href="#">Process</a>-->
                                    <!--</div>-->
                                </div>
                            </div>
                        </div>
                                </div>
                            </div>
							<?php //}?>
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