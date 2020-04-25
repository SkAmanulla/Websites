<?php
include_once("header.php");

	$get_faculty=get_faculty();
	$get_inst=get_inst();
	$get_program=get_programs();
	
	if(!empty($_POST['from_date']))
	{
		$from_date=date("Y-m-d",strtotime($_POST['from_date']));
	}
	else
	{
		$from_date=date("Y-m-d");
	}
	if(!empty($_POST['to_date']))
	{
		$to_date=date("Y-m-d",strtotime($_POST['to_date']));
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
	else
	{
		$faculty_id="";
		$faculty="";
	}
	$inst="";
	if(!empty($_POST['institution']))
	{
		$inst_id=$_POST['institution'];
		$inst=" and institution_id='".$_POST['institution']."'";
	}
	else
	{
		$inst_id="";
		$inst="";
	}
	$status="";
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
	}

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
                                                <h3 style="text-align:center;color:#FFFFFF">Faculty Schedule</h3><br>
                                               <!-- <p>Register User can get sign in from here</p>-->
											   <div class="container">
											   <div id="error1" style=" text-align:center; color:#FF0000"></div>
                                                <form action="#" name="schedule_report" id="schedule_report" enctype="multipart/form-data" method="post">
												<div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-lg-3">
                                                        <label style="color:#FFFFFF;">Faculty</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="faculty" id="faculty" style="width:70%; text-align:center">
                                                        	<option value="">Select</option>
                                                            <?php 
																for($i=0;$i<count($get_faculty);$i++)
																{
															?>
                                                            <option value="<?php echo $get_faculty[$i]['id'];?>"><?php echo $get_faculty[$i]['faculty_name'];?></option>
                                                            <?php } ?>
                                                        </select>
                                                        <?php
											 if(!empty($_POST['faculty']))
											 {
											 ?>
							            <script language="javascript">
											var adv='<?php echo $_POST['faculty'] ?>';
											for(k=1;k<=document.schedule_report.faculty.options.length;k++)
											{
												if(document.schedule_report.faculty.options[k].value==adv)
												{
													document.schedule_report.faculty.options[k].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>
                                                 
                                                       <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">Institution</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="institution" id="institution"  style="width:70%; text-align:center">
                                                        	<option value="">Select</option>
                                                            <?php 
																for($in=0;$in<count($get_inst);$in++)
																{
															?>
                                                            <option value="<?php echo $get_inst[$in]['id']?>"><?php echo $get_inst[$in]['inst_name']?></option>
                                                            <?php } ?>
                                                        </select>
                                                             <?php
											 if(!empty($_POST['institution']))
											 {
											 ?>
							            <script language="javascript">
											var adv3='<?php echo $_POST['institution'] ?>';
											for(a=1;a<=document.schedule_report.institution.options.length;a++)
											{
												if(document.schedule_report.institution.options[a].value==adv3)
												{
													document.schedule_report.institution.options[a].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>  
                                                    </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                <div class="row">
                                               <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">Programme</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="program" id="program" style="width:70%; text-align:center">
                                                        	<option value="">Select Programme</option>
                                                            <?php 
																for($p=0;$p<count($get_program);$p++)
																{
															?>
                                                            <option value="<?php echo $get_program[$p]['id']?>"><?php echo $get_program[$p]['prgrm_title']?></option>
                                                            <?php } ?>
                                                        </select>
                                                         <?php
											 if(!empty($_POST['program']))
											 {
											 ?>
							            <script language="javascript">
											var adv1='<?php echo $_POST['program'] ?>';
											for(l=1;l<=document.schedule_report.program.options.length;l++)
											{
												if(document.schedule_report.program.options[l].value==adv1)
												{
													document.schedule_report.program.options[l].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>
                                                 
                                                      <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">Status</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <select name="status" id="status" style="width:70%; text-align:center">
                                                        	<option value="">Select</option>
                                                            <option value="Scheduled">Scheduled</option>
                                                            <option value="Attended">Attended</option>
                                                        </select>
                                                         <?php
											 if(!empty($_POST['status']))
											 {
											 ?>
							            <script language="javascript">
											var adv2='<?php echo $_POST['status'] ?>';
											for(s=1;s<=document.schedule_report.status.options.length;s++)
											{
												if(document.schedule_report.status.options[s].value==adv2)
												{
													document.schedule_report.status.options[s].selected=true;
												}
											}
												</script>
													<?php
											 }
										?>
                                                 </div>   
                                                    </div>
                                                   </div>
                                                   <div class="form-group-inner">
                                                <div class="row">
                                                <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">From Date</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <input type="date" class="form-control" name="from_date" id="from_date" value="<?php echo $from_date; ?>" style="width:70%;"/>
                                                 </div>
                                                 
                                                     <div class="col-lg-3">
                                                        <label style="color:#FFFFFF">To Date</label></div>
                                                        <div class="col-lg-3" style="margin-left:-120px;">
                                                        <input type="date" class="form-control" name="to_date" id="to_date" value="<?php echo $to_date; ?>" style="width:70%;"/>
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
									$sel=executework("select * from skillistic_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst $status $program order by sdate desc");
									//echo ("select * from skillistic_schedule where id!='' and sdate between '$from_date' and '$to_date' $faculty $inst $status $program order by sdate desc");
									$count=@mysqli_num_rows($sel);
									//echo "count".$count;
									//exit();
								?>
							<?php 
								if($count>0)
								{
							?>
                            <div class="sparkline10-graph">
                                <div class="static-table-list">
                              
                               
                                    <table class="table border-table" bordercolor="#FFFFFF" style="color:white; margin-left:-80px;" style="width:70%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Faculty Name</th>
                                                <th>Institute Name</th>
                                                <th>Programme</th>
												<th>Time</th>
												<th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
										//$sel=executework("select * from skillistic_schedule order by id desc");
										$i=1;
										$get_inst="";$institute="";
										$get_prgrm="";$programme="";
											while($row=@mysqli_fetch_array($sel))
											{
												$get_inst=get_inst_vals($row['institution_id']);
												$institute=$get_inst['inst_name'];
												$get_prgrm=get_programme_vals($row['programme_id']);
												$programme=$get_prgrm['prgrm_title'];
												$faculty=get_faculty_vals($row['faculty_id']);
												$faculty_name=$faculty['faculty_name'];
										?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $faculty_name; ?></td>
                                                <td><?php echo $institute; ?></td>
                                                <td><?php echo $programme; ?></td>
												<td><?php echo $row['stime']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                            </tr>
                                            
                                       <?php 
									   	$i++;
									   } ?>     
                                        </tbody>
                                    </table>
									
                                </div>
                            </div>
                             <input type="hidden" name="sc_date" id="sc_date" value="<?php if(!empty($_POST['sdate'])){echo $_POST['sdate']; }?>">
                    <input type="hidden" name="hval" id="hval" value="<?php echo $i-1; ?>">
                    <div align="center">
                    <input type="submit" name="subm" id="subm" value="Submit" class="btn btn-default">
							<?php }?>
                       
                   
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