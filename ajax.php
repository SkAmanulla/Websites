<?php
ob_start();
session_start();
include_once("admin/include/include.php");
error_reporting(E_ALL); ini_set('display_errors', 1);
if(!empty($_POST['master_id']))
{
	//echo "master_id".$_POST['master_id'];
	$sel=executework("select * from skillistic_masterdata where id='".$_POST['master_id']."'");
	//echo ("select * from skillistic_masterdata where id='".$_POST['master_id']."'");
	$row=@mysqli_fetch_array($sel);
	$mid=$row['master_type'];
	$sel_master=executework("select * from skillistic_master where id='".$mid."'");
	$row_master=@mysqli_fetch_array($sel_master);
	$master_value=$row['master_value'];
	//$master_field=$row_master['master_name'];
	//echo "mid".$mid;
	//echo "master value".$master_value;
	//echo "master field".$master_field;
	echo "~1~".$mid."~".$master_value;
}

if(!empty($_POST['dist_id']))
{
	$sel=executework("select * from skillistic_masterdata where catid='".$_POST['dist_id']."'");
	//echo ("select * from skillistic_masterdata where state='".$_POST['dist_id']."'");
	$opt="";
	$opt.="<option value=''>Select District</option>";
	while($row=@mysqli_fetch_array($sel))
	{
		$opt.="<option value='".$row['id']."'>".$row['master_value']."</option>";
	}
	$sel1=executework("select * from skillistic_faculty where zones='".$_POST['dist_id']."'");
	echo ("select * from skillistic_faculty where zones='".$_POST['dist_id']."'");
	$opt1="";
	$opt1.="<option value=''>Select Faculty</option>";
	while($row1=@mysqli_fetch_array($sel1))
	{
		$opt1.="<option value='".$row1['id']."'>".$row1['faculty_name']."</option>";
	}
	
	echo "~1~".$opt."~".$opt1;
}

if(!empty($_POST['cid']))
{
	$sel=executework("select * from skillistic_masterdata where catid='".$_POST['cid']."'");
	//echo ("select * from skillistic_masterdata where catid='".$_POST['cid']."'");
	$arr=array();
	$opt="";
	$opt.="<option value=''>Select</option>";
	while($row=@mysqli_fetch_array($sel))
	{
		$opt.="<option value='".$row['id']."'>".$row['master_value']."</option>";
	}
	echo "~3~".$opt;
}
if(!empty($_POST['prog_id']))
{
	$sel=executework("select * from skillistic_programs where category='".$_POST['prog_id']."'");
	//echo "select * from skillistic_programs where category='".$_POST['prog_id']."'";
	$arr=array();
	$opt="";
	$opt.="<option value=''>Select</option>";
	while($row=@mysqli_fetch_array($sel))
	{
		$opt.="<option value='".$row['id']."'>".$row['prgrm_title']."</option>";
	}
	echo "~4~".$opt;
}

if(!empty($_POST['state_id']))
{
	$sel=executework("select * from skillistic_masterdata where master_type='Zones' and catid ='".$_POST['state_id']."'");
	//echo ("select * from skillistic_masterdata where state='".$_POST['state_id']."'");
	$count=@mysqli_num_rows($sel);
	if($count>0)
	{
		$opts="";
		$opts.="<option value=''>Select Zone</option>";
		while($row=@mysqli_fetch_array($sel))
		{
			$opts.="<option value='".$row['id']."'>".$row['master_value']."</option>";		
		}
	}
	echo "~1~".$opts;
}

if(!empty($_POST['inst_name']))
{
	//echo "hiii";
	//exit();
	$sel=executework("select * from skillistic_institute where inst_name='".$_POST['inst_name']."'");
	$count=@mysqli_num_rows($sel);
	if($count>0)
	{
		$inst=1;
		//echo "inst val".$inst;
	}
	else
	{
		$insert=executeworkpdbins("insert into skillistic_institute(id,inst_name,address,city,state,zones,district,email_id,cname,mobile_no,details,status,created_on)values('','".$_POST['inst_name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zones']."','".$_POST['district']."','".$_POST['email_id']."','".$_POST['cname']."','".$_POST['mobile_no']."','".$_POST['details']."','1','".date("Y-m-d H:i:s")."')");
		//echo ("insert into skillistic_institute(id,inst_name,address,city,state,zones,district,email_id,cname,mobile_no,details,status,created_on)values('','".$_POST['inst_name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zones']."','".$_POST['district']."','".$_POST['email_id']."','".$_POST['cname']."','".$_POST['mobile_no']."','".$_POST['details']."','0','".date("Y-m-d H:i:s")."')");
		if($insert>0)
		{
			$inst=$_POST['inst_name'];
			echo "inst name".$inst;
		}
	}
	
	echo "~1~".$inst."~".$insert;
}

if(!empty($_POST['sid']))
{
//$file_name='';
//print_r($_POST);

	$sel1=executework("select * from skillistic_schedule where id='".$_POST['sid']."'");
	$row1=@mysqli_fetch_array($sel1);
	$status1=$row1['sc_status'];
	//echo "sts".$status1;
	if($status1==1)
	{
	//echo "hiii";
	//exit();
	//print_r($_FILES);
		if(!empty($_FILES['filename']['name']))
		{
		//echo "hiiii";
		//exit();
			$image_name = $_FILES['filename']['name'];
			$tmp_name   = $_FILES['filename']['tmp_name'];
			$filename = $_FILES['filename']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$len=strlen($filename);
			$pos=strrpos($filename,'.');
			$ext1=substr($filename,$pos,$len);
			$fname=substr($filename,0,$pos);
			$file_name='';
			$target_dir = "fb/";
			$file_name= preg_replace("/[^a-zA-Z0-9]/", "", $fname)."_".time().$ext1;
			echo "file name".$file_name;
			exit();
			$target_file = $target_dir.$file_name;
			move_uploaded_file($_FILES['filename']['tmp_name'],$target_file);
			$fupd=",filename='".$file_name."'";
		}
		$insert=executeworkpdbins("insert into skillistic_feedback(id,sch_id,filename,details,created_on)values('','".$_POST['sid']."','".$file_name."','".$_POST['details']."','".date("Y-m-d H:i:s")."')");		
		//echo ("insert into skillistic_feedback(id,sch_id,filename,details,created_on)values('','".$_POST['sid']."','".$file_name."','".$_POST['details']."','".date("Y-m-d H:i:s")."')");	
		$update=executework("update skillistic_schedule set sc_status='0' where id='".$_POST['sid']."'");
		//echo ("update skillistic_schedule set status='0' where id='".$_POST['sid']."'");
		
		//echo "status value".$status_val;
		$sel=executework("select * from skillistic_schedule where id='".$_POST['sid']."'");
		$row=@mysqli_fetch_array($sel);
		$sts=$row['sc_status'];
		if($sts==0)
		{
			$sts_val="Completed";
		}
		else
		{
			$sts_val="Scheduled";
		}
	}
	else if($status1==0)
	{
		$sel2=executework("select * from skillistic_feedback where sch_id='".$_POST['sid']."'");
		$row2=@mysqli_fetch_array($sel2);
		$image=$row2['filename'];
		$details=$row2['details'];
		echo "det".$details;
	}
	echo "~1~".$insert."~".$sts_val."~".$image."~".$details;
}

if(!empty($_POST['hid']))
{
	$sele=executework("select * from skillistic_faculty_schedule where schedule_id='".$_POST['hid']."'");
	$rowe=@mysqli_fetch_array($sele);
	$count=@mysqli_num_rows($sele);
	//echo "count".$count;
	if($count==0)
	{
	//echo "hiii";
		if(!empty($_FILES['filename']['name']))
		{
			//echo "hiiii";
			//exit();
			$image_name = $_FILES['filename']['name'];
			$tmp_name   = $_FILES['filename']['tmp_name'];
			$filename = $_FILES['filename']['name'];
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			$len=strlen($filename);
			$pos=strrpos($filename,'.');
			$ext1=substr($filename,$pos,$len);
			$fname=substr($filename,0,$pos);
			$file_name='';
			$target_dir = "expenses/";
			$file_name= preg_replace("/[^a-zA-Z0-9]/", "", $fname)."_".time().$ext1;
			//echo "file name".$file_name;
			//exit();
			$target_file = $target_dir.$file_name;
			move_uploaded_file($_FILES['filename']['tmp_name'],$target_file);
			$fupd=",filename='".$file_name."'";
		}
		$sel=executework("select * from skillistic_schedule where id='".$_POST['hid']."'");
		$row=@mysqli_fetch_array($sel);
		$sel_city=executework("select * from skillistic_institute where id='".$row['institution_id']."'");
				$row_city=@mysqli_fetch_array($sel_city);
		$insert=executeworkpdbins("insert into skillistic_faculty_schedule(id,sdate,faculty_id,schedule_id,institute_id,no_kms,local_transport,intercity_transport,room,food,postage,filename,total,created_on,details,city,status)values('','".$row['sdate']."','".$row['faculty_id']."','".$_POST['hid']."','".$row['institution_id']."','".$_POST['nkms']."','".$_POST['lt']."','".$_POST['ic']."','".$_POST['room']."','".$_POST['food']."','".$_POST['post']."','".$filename."','".$_POST['gt']."','".date('Y-m-d H:i:s')."','".$_POST['details']."','".$row_city['city']."','1')");
	//	echo ("insert into skillistic_faculty_schedule(id,sdate,faculty_id,schedule_id,institute_id,no_kms,local_transport,intercity_transport,room,food,postage,filename,total,created_on,details,city,status)values('','".$row['sdate']."','".$row['faculty_id ']."','".$_POST['hid']."','".$row['institution_id']."','".$_POST['nkms']."','".$_POST['lt']."','".$_POST['ic']."','".$_POST['room']."','".$_POST['food']."','".$_POST['post']."','".$filename."','".$_POST['gt']."','".date('Y-m-d H:i:s')."','".$_POST['details']."','".$row_city['city']."','1')");
		if($insert>0)
		{
			
		}
	}
	
	echo "~1~".$insert;
}
if(!empty($_POST['sch_id']))
{
	$sel=executework("select * from skillistic_faculty_schedule where schedule_id='".$_POST['sch_id']."'");
	$row=@mysqli_fetch_array($sel);
	$count=@mysqli_num_rows($sel);
	if($count>0)
	{
		$inst=1;
		$sele=executework("select * from skillistic_faculty_schedule where schedule_id='".$_POST['sch_id']."'");
		$rowe=@mysqli_fetch_array($sele);
		$no_of_km=$rowe['no_kms'];
		$local_transport=$rowe['local_transport'];
		$intercity_transport=$rowe['intercity_transport'];
		$room=$rowe['room'];
		$food=$rowe['food'];
		$postage=$rowe['postage'];
		$filename=$rowe['filename'];
		$details=$rowe['details'];
		$total=$rowe['total'];
	}
	else
	{
		$inst=0;
	}
	echo "~1~".$inst."~".$no_of_km."~".$local_transport."~".$intercity_transport."~".$room."~".$food."~".$postage."~".$filename."~".$details."~".$total;
}

if(!empty($_POST['schedule_id']))
{
	$sel=executework("select * from skillistic_feedback where sch_id='".$_POST['schedule_id']."'");
	echo ("select * from skillistic_feedback where sch_id='".$_POST['schedule_id']."'");
	$row=@mysqli_fetch_array($sel);
	$count=@mysqli_num_rows($sel);
	if($count>0)
	{
		$inst=1;
		$details=$row['details'];
		$filename=$row['filename'];
	}
	else
	{
		$inst=0;
	}	
	echo "inst".$inst;
	echo "~1~".$inst."~".$details."~".$filename;
}
?>
