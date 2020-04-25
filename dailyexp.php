<?php
include_once("header.php");

	$get_faculty=get_faculty();
	$get_inst=get_inst();
	$get_program=get_programs();
	
	if(!empty($_POST['fdate']))
	{
		$from_date=date("Y-m-d",strtotime($_POST['fdate']));
	}
	else if(!empty($_GET['from_date']))
	{
		$from_date=$_GET['from_date'];
	}
	else
	{
		$from_date=date("Y-m-01");
	}
	if(!empty($_POST['tdate']))
	{
		$to_date=date("Y-m-d",strtotime($_POST['tdate']));
	}
	else if(!empty($_GET['to_date']))
	{
		$to_date=$_GET['to_date'];
	}
	else
	{
		$to_date=date("Y-m-d");
	}
	$faculty="";
	if(!empty($_POST['faculty']))
	{
		$faculty_id=$_POST['faculty'];
		$faculty=" and faculty_id='".$_POST['faculty']."'";
	}
	else if(!empty($_GET['faculty']))
	{
		$faculty_id=$_GET['faculty'];
		$faculty=" and faculty_id='".$_GET['faculty']."'";
	}
	else
	{
		$faculty_id="";
		$faculty="";
	}
	$inst="";
	if(!empty($_POST['institute']))
	{
		$inst_id=$_POST['institute'];
		$inst=" and institute_id='".$_POST['institute']."'";
	}
	else if(!empty($_GET['institute']))
	{
		$inst_id=$_GET['institute'];
		$inst=" and institute_id='".$_GET['institute']."'";
	}

	else
	{
		$inst_id="";
		$inst="";
	}
	/*$status="";
	if(!empty($_POST['status']))
	{
		$sts=$_POST['status'];
		$status=" and status='".$_POST['status']."'";
	}
	else
	{
		$sts="";
		$status="";
	}
	$program="";
	if(!empty($_POST['program']))
	{
		$program=" and programme_id='".$_POST['program']."'";
	}
	else
	{
		$program="";
	}*/

?>
<style type="text/css">
label
{
	color:white;
}
.form-control
{
	width:90%;
	text-align:center;
	height:30px;
	padding: 0px 12px;
}
select
{
	height:30px;
}
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>-->
<script type="text/javascript" src="jscript/jsvalidation.js"></script>

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
                                                <h3 style="text-align:center;color:#FFFFFF">Daily Expenses Report</h3><br>
                                               <!-- <p>Register User can get sign in from here</p>-->
											   <div class="container">
											   <div id="error1" style=" text-align:center; color:#FF0000"></div>
                                                <form action="<?php echo $_SERVER['PHP_SELF'];?>" name="expenses_report" id="expenses_report" enctype="multipart/form-data" method="post">
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-lg-3">
                                                        <label style="color:#FFFFFF;">From Date</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <input type="date" name="fdate" id="fdate" value="<?php echo $from_date;?>" class="form-control" style="width:70%; text-align:center">
                                                 </div>
                                                 
                                                       <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">To Date</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <input type="date" name="tdate" id="tdate" style="width:70%; text-align:center" value="<?php echo $to_date;?>" class="form-control">
                                                 </div>  
                                                    </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                <div class="row">
                                               <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">Faculty Name</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="faculty" id="faculty" style="width:70%; text-align:center" class="form-control">
                                                        	<option value="">Select Faculty</option>
                                                            <?php 
																for($p=0;$p<count($get_faculty);$p++)
																{
															?>
                                                            <option value="<?php echo $get_faculty[$p]['id']; ?>"><?php echo $get_faculty[$p]['faculty_name']; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                         <?php
											 if(!empty($_POST['faculty']))
											 {
											 ?>
							            <script language="javascript">
											var adv1='<?php echo $_POST['faculty'] ?>';
											for(l=1;l<=document.expenses_report.faculty.options.length;l++)
											{
												if(document.expenses_report.faculty.options[l].value==adv1)
												{
													document.expenses_report.faculty.options[l].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>
                                                 
                                                      <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">Institute</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="institute" id="institute" class="form-control" style="width:70%; text-align:center">
                                                        	<option value="">Select Institute</option>
															<?php
																for($i=0;$i<count($get_inst);$i++)
																{
                                                            ?>   
                                                            <option value="<?php echo $get_inst[$i]['id'];?>"><?php echo $get_inst[$i]['inst_name'];?></option>
                                                            <?php } ?>                    
                                                 </select>
                                                         <?php
											 if(!empty($_POST['status']))
											 {
											 ?>
							            <script language="javascript">
											var adv2='<?php echo $_POST['institute'] ?>';
											for(s=1;s<=document.expenses_report.institute.options.length;s++)
											{
												if(document.expenses_report.institute.options[s].value==adv2)
												{
													document.expenses_report.institute.options[s].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>   
                                                    </div>
                                                   </div>
                                                   
                                                  <!-- <div class="form-group-inner">
                                                <div class="row">
                                               
                                                 
                                                        
                                                    </div>
                                                   </div>
												<div class="form-group-inner">
                                                <div class="row">
                                                
                                                 
                                                        
                                                    </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                <div class="row">
                                                
                                                 
                                                        
                                                    </div>
                                                   </div>-->
                                                    <div class="col-lg-12" style="margin-left:380px;">
                                                    <div class="form-group-inner">
                                                   
                                                 <input type="submit" name="submit" id="submit" value="Go" class="btn btn-primary" align="middle" style="width:10%">
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
	$sel=executework("select * from skillistic_faculty_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst group by sdate,faculty_id,institute_id order by sdate,faculty_id desc");
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
	$sel1=executework("select * from skillistic_faculty_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst group by sdate,faculty_id,institute_id order by sdate,faculty_id desc LIMIT $pagenow1, $max_recs_per_page");
	//echo ("select * from skillistic_faculty_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst group by sdate,faculty_id,institute_id order by sdate,faculty_id desc LIMIT $pagenow1, $max_recs_per_page");
?>
							<?php 
								if($count>0)
								{
							?>
                            <div class="sparkline10-graph">
                                <div class="static-table-list">
                              
                               
                                    <table class="table border-table" style="color:white; margin-left:-200px;width:70%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Date</th>
                                                <th>Faculty</th>
                                                <th>Institute</th>
												<th>Intercity&nbsp;Transport</th>
                                                <th>Room</th>
                                                <th>Food</th>
                                                <th>Postage</th>
												<th>Total</th>
                                               <!-- <th>Grand Total</th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										//$sel=executework("select * from skillistic_schedule order by id desc");
										$i=1;
										$get_inst="";$institute="";
										$get_prgrm="";$programme="";
										$total_val=0;
											while($row=@mysqli_fetch_array($sel1))
											{
												$get_inst=get_inst_vals($row['institute_id']);
												$institute=$get_inst['inst_name'];
												$faculty=get_faculty_vals($row['faculty_id']);
												$faculty_name=$faculty['faculty_name'];
												$total_val+=$row['total'];
												
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['sdate']; ?></td>
                                                <td><?php echo $faculty_name; ?></td>
                                                <td><?php echo $institute; ?></td>
												<td><?php echo $row['intercity_transport']; ?></td>
                                                <td><?php echo $row['room']; ?></td>
                                                <td><?php echo $row['food']; ?></td>
												<td><?php echo $row['postage']; ?></td>
                                                <td><?php echo $row['total']; ?></td>
                                               <?php /*?> <td><?php echo $total_val; ?></td><?php */?>
                                            </tr>
                                            
                                       <?php 
									   	$i++;
									   } 
									   ?>    
                                       <tr>
                                            	<th colspan="8"><span align="right" style="margin-left:560px; font-size:larger">Grand Total</span></th>
                                                <td><?php echo $total_val; ?></td>
                                            </tr> 
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
			$prv='dailyexp.php?page_index='.($page12-1).'&from_date='. $from_date.'&to_date='.$to_date.'&faculty='.$faculty_id.'&institute='.$inst_id;
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='dailyexp.php?page_index='.($page12+1).'&from_date='. $from_date.'&to_date='.$to_date.'&faculty='.$faculty_id.'&institute='.$inst_id;
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
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="dailyexp.php?page_index=<?php echo $im ?>&from_date=<?php echo $from_date; ?>&to_date=<?php echo $to_date; ?>&faculty=<?php echo $faculty_id; ?>&institute=<?php echo $inst_id; ?>"><?php echo $im; ?></a> </li>
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
                        </div>
                            </div>
                   
                    </div>
                        </div>
                    </div>                         
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
	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>