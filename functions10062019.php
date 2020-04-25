<?php
function master_insert()
{
	if($_GET['id']!=6)
	{
		if($_GET['id']==5)
		{
			$catid=$_POST['district'];
		}
		/*else
		{
			$catid=0;
		}*/
		else if($_GET['id']==2)
		{
			//echo "hiii";
		//	echo $_POST['state'];
			//exit();
			$catid=$_POST['state'];
		}
		/*else
		{
			$catid=0;
		}*/
		else if($_GET['id']==4)
		{
			$catid=$_POST['zones'];
		}
		else
		{
			$catid=0;
		}
		for($i=1;$i<=5;$i++)
		{
			if(!empty($_POST['master_name'.$i]))
			{
				$sel=executework("select * from skillistic_masterdata where master_type='".$_GET['master_name']."' and master_value='".$_POST['master_name'.$i]."'");
				$count=@mysqli_num_rows($sel);
				if($count>0)
				{
					redirect("masterdata.php?exist=1&master_name=".$_GET['master_name']);
				}
				else
				{
					$insert=executework("insert into skillistic_masterdata(id,master_type,catid,master_value,status,created_on)values('','".$_GET['master_name']."','".$catid."','".$_POST['master_name'.$i]."','1','".date("Y-m-d H:i:s")."')");
					//echo ("insert into skillistic_masterdata(id,master_type,catid,master_value,status,created_on)values('','".$_GET['master_name']."','".$catid."','".$_POST['master_name'.$i]."','1','".date("Y-m-d H:i:s")."')");
					//exit();
				}
				//echo ("insert into skillistic_masterdata(id,master_type,catid,master_value,status,created_on)values('','".$_GET['master_name']."','".$catid."','".$_POST['master_name'.$i]."','1','".date("Y-m-d H:i:s")."')");
				
			}
		}
		redirect("masterdata.php?id=".$_GET['id']."&master_name=".$_GET['master_name']."&succ=1");
	}
	else if($_GET['id']==6)
	{
		$update=executework("update skillistic_payments set status='0' where status='1'");

		$sel=executework("select * from skillistic_payments where pdate='".date("Y-m-d")."'");
		$row=@mysqli_fetch_array($sel);
		$count=@mysqli_num_rows($sel);
		if($count>0)
		{
			$update=executework("update skillistic_payments set amt='".$_POST['payment_per_km']."',status='1' where pdate='".date("Y-m-d")."'");
			redirect("masterdata.php?id=".$_GET['id']."&master_name=".$_GET['master_name']."&upd=1");
		}
		else
		{
			//echo "insert".("insert into skillistic_payments(id,pdate,amt,status,created_on)values('','".date("Y-m-d")."','".$_POST['payment_per_km']."','1','".date("Y-m-d H:i:s")."')");
			//exit();
			
			$insert=executework("insert into skillistic_payments(id,pdate,amt,status,created_on)values('','".date("Y-m-d")."','".$_POST['payment_per_km']."','1','".date("Y-m-d H:i:s")."')");
			redirect("masterdata.php?id=".$_GET['id']."&master_name=".$_GET['master_name']."&succ=1");
		}
	}
}

function get_masters($master_type)
{
	$sel=executework("select * from skillistic_masterdata where master_type='".$master_type."' order by id desc");
	$arr=array();
	while($row=@mysqli_fetch_array($sel))
	{
		$arr[]=$row;
	}
	return $arr;
}

function state_masterdata($id)
{
	$sel_state=executework("select * from skillistic_states where id='".$id."'");
	$row_state=@mysqli_fetch_array($sel_state);
	return $row_state;
}

function delete_master($did,$id,$master_name)
{
	$delete=executework("delete from skillistic_masterdata where id='".$did."'");
	redirect("masterdata.php?id=".$id."&master_name=".$master_name."&del=1");
}
function disable_master($dis_id,$id,$master_name)
{
	$disable=executework("update skillistic_masterdata set status='0' where id='".$dis_id."'");
	redirect("masterdata.php?id=".$id."&master_name=".$master_name."&dis=1");
}

function enable_master($ena_id,$id,$master_name)
{
	$enable=executework("update skillistic_masterdata set status='1' where id='".$ena_id."'");
	redirect("masterdata.php?id=".$id."&master_name=".$master_name."&ena=1");
}

function edit_master($hid,$mid,$mval)
{
	//echo "hid".$hid;
	//echo "mid".$mid;
	//echo "mvalue".$mval;
	if(!empty($_POST['edit_value']))
	{
	//echo "updateing".$_POST['edit_value'];
//	exit();
		$update=executework("update skillistic_masterdata set master_value='".$_POST['edit_value']."' where id='".$hid."'");
		echo ("update skillistic_masterdata set master_value='".$_POST['edit_value']."' where id='".$hid."'");
		//exit();
	}
	redirect("masterdata.php?suc=2&id=".$mid."&master_name=".$mval);
}

function faculty_insert()
{
	$qr='';
	if(!empty($_GET['eid']))
	$qr=" and id<>".$_GET['eid'];
	$sel=executework("select * from skillistic_faculty where faculty_id='".$_POST['faculty_id']."'".$qr);
	$cnt=@mysqli_num_rows($sel);
	if($cnt>0)
	{
		$exst=1;
	}
	else
	{
		if(!empty($_GET['eid']))
		{
			$update=executework("update skillistic_faculty set faculty_name='".$_POST['faculty_name']."', faculty_id='".$_POST['faculty_id']."',zones='".$_POST['zones']."',email_id_off='".$_POST['email_id_off']."',email_id_per='".$_POST['email_id_per']."',mobile_no_off='".$_POST['mobile_no_off']."',mobile_no_per='".$_POST['mobile_no_per']."',mobile_no_alt='".$_POST['mobile_no_alt']."',designation='".$_POST['designation']."',password='".$_POST['password']."',modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."' ");
			redirect("faculty_mgmt.php?upd=1");
		}
		else
		{
			$insert=executework("insert into skillistic_faculty(id,faculty_name,faculty_id,zones,email_id_off,email_id_per,mobile_no_off,mobile_no_per,mobile_no_alt,designation,password,created_on,status)values('','".$_POST['faculty_name']."','".$_POST['faculty_id']."','".$_POST['zones']."','".$_POST['email_id_off']."','".$_POST['email_id_per']."','".$_POST['mobile_no_off']."','".$_POST['mobile_no_per']."','".$_POST['mobile_no_alt']."','".$_POST['designation']."','".$_POST['password']."','".date("Y-m-d H:i:s")."','1')");
			redirect("faculty_mgmt.php?succ=1");
		}
	}
}

function get_faculty()
{
	$sel=executework("select * from skillistic_faculty order by id desc");
	$arr=array();
	while($row=@mysqli_fetch_array($sel))
	{
		$arr[]=$row;
	}
	return $arr;
}

function get_faculty_vals($eid)
{
	$sel=executework("select * from skillistic_faculty where id='".$eid."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function delete_faculty($did)
{
	$del=executework("delete from skillistic_faculty where id='".$did."'");
	redirect("faculty_mgmt.php?del=1");
}

function disable_faculty($dis_id)
{
	$update=executework("update skillistic_faculty set status='0' where id='".$dis_id."'");
	redirect("faculty_mgmt.php?dis=1");
}

function enable_faculty($dis_id)
{
	$update=executework("update skillistic_faculty set status='1' where id='".$dis_id."'");
	redirect("faculty_mgmt.php?ena=1");
}

function programs_insert()
{
 $qr='';
	    if(!empty($_GET['eid']))
	    $qr=" and id<>".$_GET['eid'];
	    $sel=executework("select * from skillistic_programs where (prgrm_title='".$_POST['prgrm_title']."')".$qr);
	    $cnt=@mysqli_num_rows($sel);
	    if($cnt>0)
	    {
		    $exst=1;
			redirect("programme_mgmt.php?exst=1");
	    }
	  	else
		{
			if(!empty($_GET['eid']))
			{
				$update=executework("update skillistic_programs set category='".$_POST['category']."',prgrm_title='".$_POST['prgrm_title']."',details='".$_POST['details']."',modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
				redirect("programme_mgmt.php?upd=1");
			}
			else
			{
				$insert=executework("insert into skillistic_programs(id,category,prgrm_title,details,status,created_on)values('','".$_POST['category']."','".$_POST['prgrm_title']."','".$_POST['details']."','1','".date("Y-m-d H:i:s")."')");
				redirect("programme_mgmt.php?succ=1");
			}
	}
}

function get_programs()
{
	$sel=executework("select * from skillistic_programs order by id desc");
	$arr=array();
	while($row=@mysqli_fetch_array($sel))
	{
		$arr[]=$row;
	}
	return $arr;
}

function get_programme_vals($eid)
{
	$sel=executework("select * from skillistic_programs where id='".$eid."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function delete_programme($did)
{
	$del=executework("delete from skillistic_programs where id='".$did."'");
	redirect("programme_mgmt.php?del=1");
}

function disable_programme($dis_id)
{
	$dis=executework("update skillistic_programs set status='0' where id='".$dis_id."'");
	redirect("programme_mgmt.php?dis=1");
}

function enable_programme($enb_id)
{
	$enb=executework("update skillistic_programs set status='1' where id='".$enb_id."'");
	redirect("programme_mgmt.php?enb=1");
}

function inst_insert()
{
 		$qr='';
	    if(!empty($_GET['eid']))
	    $qr=" and id<>".$_GET['eid'];
	    $sel=executework("select * from skillistic_institute where (inst_name='".$_POST['inst_name']."')".$qr);
	    $cnt=@mysqli_num_rows($sel);
	    if($cnt>0)
	    {
		    $exst=1;
			redirect("inst_mgmt.php?exst=1");
	    }
	  	else
		{
			if(!empty($_GET['eid']))
			{
				$update=executework("update skillistic_institute set inst_name='".$_POST['inst_name']."',address='".$_POST['address']."',state='".$_POST['state']."',zones='".$_POST['zones']."',district='".$_POST['district']."',city='".$_POST['city']."',email_id='".$_POST['email_id']."',mobile_no='".$_POST['mobile_no']."',cname='".$_POST['cname']."',details='".$_POST['details']."',modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
				redirect("inst_mgmt.php?upd=1");
			}
			else
			{
				$insert=executework("insert into skillistic_institute(id,inst_name,address,city,state,zones,district,email_id,cname,mobile_no,details,status,created_on)values('','".$_POST['inst_name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zones']."','".$_POST['district']."','".$_POST['email_id']."','".$_POST['cname']."','".$_POST['mobile_no']."','".$_POST['details']."','1','".date("Y-m-d H:i:s")."')");
				//echo ("insert into skillistic_institute(id,inst_name,address,city,state,zones,district,email_id,cname,mobile_no,details,status,created_on)values('','".$_POST['inst_name']."','".$_POST['address']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zones']."','".$_POST['district']."','".$_POST['email_id']."','".$_POST['cname']."','".$_POST['mobile_no']."','".$_POST['details']."','0','".date("Y-m-d H:i:s")."')");
				//exit();
				redirect("inst_mgmt.php?succ=1");
			}
	}
}

function get_inst_vals($eid)
{
	$get_vals=executework("select * from skillistic_institute where id='".$eid."'");
	$row=@mysqli_fetch_array($get_vals);
	return $row;
}

function get_inst()
{
	$sel=executework("select * from skillistic_institute order by id desc");
	$arr=array();
	while($row=@mysqli_fetch_array($sel))
	{
		$arr[]=$row;
	}
	return $arr;
}

function delete_inst($did)
{
	$del=executework("delete from skillistic_institute where id='".$did."'");
	redirect("inst_mgmt.php?del=1");
}

function disable_inst($dis_id)
{
	$upd=executework("update skillistic_institute set status='0' where id='".$dis_id."'");
	redirect("inst_mgmt.php?dis=1");
}

function enable_inst($enb_id)
{
	$upd=executework("update skillistic_institute set status='1' where id='".$enb_id."'");
	redirect("inst_mgmt.php?enb=1");
}

function get_master_value($type,$id)
{
	$sel=executework("select * from skillistic_masterdata where master_type='".$type."' and id='".$id."'");
	//echo ("select * from skillistic_masterdata where master_type='".$type."' and id='".$id."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function ppt_insert()
{
     $qr='';
	    if(!empty($_GET['eid']))
	    $qr=" and id<>".$_GET['eid'];
	    $sel=executework("select * from skillistic_ppt where (topic='".$_POST['topic']."')".$qr);
	    $cnt=@mysqli_num_rows($sel);
	    if($cnt>0)
	    {
		    $exst=1;
			redirect("ppt_mgmt.php?exst=1");
	    }
	  	else
		{
				if(!empty($_FILES['ppt']['name']))
				{
					$image_name = $_FILES['ppt']['name'];
					$tmp_name   = $_FILES['ppt']['tmp_name'];
					$filename = $_FILES['ppt']['name'];
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					$len=strlen($filename);
					$pos=strrpos($filename,'.');
					$ext1=substr($filename,$pos,$len);
					$fname=substr($filename,0,$pos);
					$file_name='';
					$target_dir = "ppt/";
					$file_name= preg_replace("/[^a-zA-Z0-9]/", "", $fname)."_".time().$ext1;
					$target_file = $target_dir.$file_name;
					//echo $target_file;
			 		move_uploaded_file($_FILES['ppt']['tmp_name'],$target_file);
					//exit();
			 		$fupd=",ppt='".$file_name."'";
				}	
			if(!empty($_GET['eid']))
			{
				$update=executework("update skillistic_ppt set category='".$_POST['category']."',prgrm_title='".$_POST['prgrm_title']."',topic='".$_POST['topic']."',details='".$_POST['details']."' $fupd,modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
				redirect("ppt_mgmt.php?upd=1");
			}
			else
			{
				$insert=executework("insert into skillistic_ppt(id,category,prgrm_title,topic,details,ppt,status,created_on)values('','".$_POST['category']."','".$_POST['prgrm_title']."','".$_POST['topic']."','".$_POST['details']."','".$file_name."','0','".date("Y-m-d H:i:s")."')");
				redirect("ppt_mgmt.php?succ=1");
			}
	}
}
function get_ppt_vals($eid)
{
	$sel=executework("select * from skillistic_ppt where id='".$eid."'");
	echo ("select * from skillistic_ppt where id='".$eid."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function get_ppt()
{
	$sel=executework("select * from skillistic_ppt order by id desc");
	$arr=array();
	while($row=@mysqli_fetch_array($sel))
	{
		$sel_title=executework("select * from skillistic_programs where id='".$row['prgrm_title']."'");
		$row_title=@mysqli_fetch_array($sel_title);
		$row['title']=$row_title;
		$arr[]=$row;
	}
	return $arr;
}

function delete_ppt($did)
{
	$del=executework("delete from skillistic_ppt where id='".$did."'");
	redirect("ppt_mgmt.php?del=1");
}

function disable_ppt($dis_id)
{
	$dis=executework("update skillistic_ppt set status='0' where id='".$dis_id."'");
	redirect("ppt_mgmt.php?dis=1");
}

function enable_ppt($enb_id)
{
	$enb=executework("update skillistic_ppt set status='1' where id='".$enb_id."'");
	redirect("ppt_mgmt.php?enb=1");
}

function schedule_insert()
{
	//echo "hiiii";
	//exit();
	//$sdate=date("Y-m-d",strtotime($_POST['sc_date']));
	$del_date=executework("delete from skillistic_schedule where faculty_id='".$_POST['faculty']."'");
	
	for($i=1;$i<=$_POST['hval'];$i++)
	{
		//$sdate=date("Y-m-d",strtotime($_POST['sc_date'.$i]));
		$sdate=$_POST['sc_date'.$i];
		//echo "sdate".$sdate;
		//exit();
		if(!empty($_POST['institute'.$i]))
		{
			$sel=executework("select * from skillistic_schedule where faculty_id='".$_POST['faculty_id']."' and sdate='".$sdate."'");
			//echo ("select * from skillistic_schedule where faculty_id='".$_POST['faculty_id'.$i]."'");
			//exit();
			$count=@mysqli_num_rows($sel);
			if($count>0)
			{
				//echo "hello";
				$update=executework("update skillistic_schedule set institution_id='".$_POST['institute'.$i]."',programme_id='".$_POST['programme'.$i]."',stime='".$_POST['time'.$i]."',modified_on='".date("Y-m-d H:i:s")."',sdate='".$sdate."' where faculty_id='".$_POST['faculty']."' and sdate='".$sdate."'");
				//echo ("update skillistic_schedule set institution_id='".$_POST['institute'.$i]."',programme_id='".$_POST['programme'.$i]."',stime='".$_POST['time'.$i]."',modified_on='".date("Y-m-d H:i:s")."',sdate='".$sdate."' where faculty_id='".$_POST['faculty_id'.$i]."' and sdate='".$sdate."'");
				//exit();
				//redirect("schedule.php?upd=1");
				
			}
			else
			{
			//echo "hii";
			//exit();
			//echo "faculty".$faculty_val;
				$insert=executework("insert into skillistic_schedule(id,faculty_id,institution_id,programme_id,stime,created_on,sdate,status,sc_status)values('','".$_POST['faculty']."','".$_POST['institute'.$i]."','".$_POST['programme'.$i]."','".$_POST['time'.$i]."','".date("Y-m-d H:i:s")."','".$sdate."','Scheduled','1')");
				//echo ("insert into skillistic_schedule(id,faculty_id,institution_id,programme_id,stime,created_on,sdate,status)values('','".$_POST['faculty']."','".$_POST['institute'.$i]."','".$_POST['programme'.$i]."','".$_POST['time'.$i]."','".date("Y-m-d H:i:s")."','".$sdate."','Scheduled')");
				//exit();
				
			}
		}
	}
	//redirect("schedule.php?succ=1");
	$succ=1;
}
//23-052019
function faculty_schedule()
{
	//$sdate=$_POST['sdate'];
	if(!empty($_FILES['filename']['name']))
			{
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
				// echo "filename".$file_name;
				// exit();
				$target_file = $target_dir.$file_name;
				//echo $target_file;
			 move_uploaded_file($_FILES['filename']['tmp_name'],$target_file);
			//exit();
			 $fupd=",filename='".$file_name."'";
			}	
	/*if(!empty($sdate))
	{
		$sel=executework("select * from skillistic_faculty_schedule where sdate='".$sdate."'");
		$count=@mysqli_num_rows($sel);
		//$row=@mysqli_fetch_array($)
		if($count>0)
		{
			$update=executework("update skillistic_faculty_schedule set student_name='".$_POST['sname']."',location='".$_POST['location']."',transport_type='".$_POST['see']."',no_kms='".$_POST['nkms']."',cost_transport='".$_POST['nkm2']."',intercity_transport='".$_POST['sitransport']."',room='".$_POST['sroom']."',food='".$_POST['sfood']."',postage='".$_POST['spostage']."' $fupd,total='".$_POST['stotal']."',modified_on='".date("Y-m-d H:i:s")."'");
			redirect("schedule.php?upd=1");
		}
		else
		{*/
			
			echo "insert into skillistic_faculty_schedule(sdate,faculty_id,schedule_id,institute_id,no_kms,local_transport,intercity_transport,room,food,postage,filename,total,created_on,modified_on,details,city) values('".$_SESSION['sdate']."','".$_SESSION['faculty_id']."','".$_POST['sch_id']."','".$_SESSION['institute_id']."','".$_POST['nkms']."','".$_POST['lt']."','".$_POST['ic']."','".$_POST['room']."','".$_POST['food']."','".$_POST['post']."','".$file_name."','".$_POST['gt']."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','".$_POST['details']."','".$_SESSION['city']."')";

			$sel_sc=executework("select * from skillistic_schedule where id='".$_POST['sch_id']."'");
			$row_sc=@mysqli_fetch_array($sel_sc);
			$sel_city=executework("select * from skillistic_institute where id='".$row_sc['institution_id']."'");
			$row_city=@mysqli_fetch_array($sel_city);

$insert=executework("insert into skillistic_faculty_schedule(sdate,faculty_id,schedule_id,institute_id,no_kms,local_transport,intercity_transport,room,food,postage,filename,total,created_on,modified_on,details,city) values('".$row_sc['sdate']."','".$_SESSION['faculty_id']."','".$_POST['sch_id']."','".$row_sc['institution_id']."','".$_POST['nkms']."','".$_POST['lt']."','".$_POST['ic']."','".$_POST['room']."','".$_POST['food']."','".$_POST['post']."','".$file_name."','".$_POST['gt']."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."','".$_POST['details']."','".$row_city['city']."')");
			//echo ("insert into skillistic_faculty_schedule(faculty_id,schedule_id,transport_type,no_kms,cost_transport,intercity_transport,room,food,postage,filename,total,created_on,mode_tr,details) values('".$_SESSION['faculty_id']."','".$_POST['sch_id']."','".$_POST['see']."','".$_POST['nkms']."','".$_POST['nkm2']."','".$_POST['sitransport']."','".$_POST['sroom']."','".$_POST['sfood']."','".$_POST['spostage']."','".$file_name."','".$_POST['stotal']."','".date("Y-m-d H:i:s")."','".$_POST['mode_tr']."','".$_POST['details']."')");
		 redirect("schedule.php?succ=1");
		//}
	/*}
	else
	{
		redirect("schedule.php?fail=1");
	}*/
}

function support_insert()
{
 $qr='';
	    if(!empty($_GET['eid']))
	    $qr=" and id<>".$_GET['eid'];
	    $sel=executework("select * from skillistic_support where (title='".$_POST['title']."')".$qr);
	    $cnt=@mysqli_num_rows($sel);
	    if($cnt>0)
	    {
		    $exst=1;
			 redirect("support.php?exst=1");
	    }
	  	else
			{
	if(!empty($_FILES['filename']['name']))
			{
				$image_name = $_FILES['filename']['name'];
				$tmp_name   = $_FILES['filename']['tmp_name'];
				$filename = $_FILES['filename']['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$len=strlen($filename);
				$pos=strrpos($filename,'.');
				$ext1=substr($filename,$pos,$len);
				$fname=substr($filename,0,$pos);
				$file_name='';
				$target_dir = "support/";
				$file_name= preg_replace("/[^a-zA-Z0-9]/", "", $fname)."_".time().$ext1;
				// echo "filename".$file_name;
				// exit();
				$target_file = $target_dir.$file_name;
				//echo $target_file;
			 move_uploaded_file($_FILES['filename']['tmp_name'],$target_file);
			//exit();
			 $fupd=",filename='".$file_name."'";
			}	
	if(!empty($_GET['eid']))
	{
		//echo "hai";
		//exit();
		 $update=executework("update skillistic_support set title='".$_POST['title']."' $fupd,modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
		// echo ("update skillistic_support set title='".$_POST['title']."' $fupd,modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
		 redirect("support.php?upd=1");
	}
	else
	{
		$insert=executework("insert into skillistic_support(id,title,filetype,filename,created_on,status)values('','".$_POST['title']."','".$_POST['filetype']."','".$file_name."','".date("Y-m-d H:i:s")."','0')");
		// echo "insert into skillistic_support(id,title,filetype,filename,created_on)values('','".$_POST['title']."','".$_POST['filetype']."','".$file_name."','".date("Y-m-d H:i:s")."')";
		// exit();
		redirect("support.php?succ=1");
	}
	}
}

function get_supp_vals($eid)
{
	$sel=executework("select * from skillistic_support where id='".$eid."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function delete_support($did)
{
	$del=executework("delete from skillistic_support where id='".$did."'");
	redirect("support.php?del=1");
}

function disable_support($dis_id)
{
	$upd=executework("update skillistic_support set status='0' where id='".$dis_id."'");
	redirect("support.php?dis=1");
}

function enable_support($enb_id)
{
	$upd=executework("update skillistic_support set status='1' where id='".$enb_id."'");
	redirect("support.php?enb=1");
}





function resource_insert()
{
 $qr='';
	    if(!empty($_GET['eid']))
	    $qr=" and id<>".$_GET['eid'];
	    $sel=executework("select * from skillistic_resource where (title='".$_POST['title']."')".$qr);
	    $cnt=@mysqli_num_rows($sel);
	    if($cnt>0)
	    {
		    $exst=1;
			redirect("resource.php?exst=1");
	    }
	  	else
			{
	if(!empty($_FILES['filename']['name']))
			{
				$image_name = $_FILES['filename']['name'];
				$tmp_name   = $_FILES['filename']['tmp_name'];
				$filename = $_FILES['filename']['name'];
				$ext = pathinfo($filename, PATHINFO_EXTENSION);
				$len=strlen($filename);
				$pos=strrpos($filename,'.');
				$ext1=substr($filename,$pos,$len);
				$fname=substr($filename,0,$pos);
				$file_name='';
				$target_dir = "resource/";
				$file_name= preg_replace("/[^a-zA-Z0-9]/", "", $fname)."_".time().$ext1;
				// echo "filename".$file_name;
				// exit();
				$target_file = $target_dir.$file_name;
				//echo $target_file;
			 move_uploaded_file($_FILES['filename']['tmp_name'],$target_file);
			//exit();
			 $fupd=",filename='".$file_name."'";
			}	
	if(!empty($_GET['eid']))
	{
		//echo "hai";
		//exit();
		 $update=executework("update skillistic_resource set title='".$_POST['title']."' $fupd,modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
		 //echo ("update skillistic_support set title='".$_POST['title']."' $fupd,modified_on='".date("Y-m-d H:i:s")."' where id='".$_GET['eid']."'");
		 redirect("resource.php?upd=1");
	}
	else
	{
		$insert=executework("insert into skillistic_resource(id,title,filename,created_on,status)values('','".$_POST['title']."','".$file_name."','".date("Y-m-d H:i:s")."','0')");
		// echo "insert into skillistic_support(id,title,filetype,filename,created_on)values('','".$_POST['title']."','".$_POST['filetype']."','".$file_name."','".date("Y-m-d H:i:s")."')";
		// exit();
		redirect("resource.php?succ=1");
	}
	}
}

function get_resource_vals($eid)
{
	$sel=executework("select * from skillistic_resource where id='".$eid."'");
	$row=@mysqli_fetch_array($sel);
	return $row;
}

function delete_resource($did)
{
	$del=executework("delete from skillistic_resource where id='".$did."'");
	redirect("resource.php?del=1");
}

function disable_resource($dis_id)
{
	$upd=executework("update skillistic_resource set status='0' where id='".$dis_id."'");
	redirect("resource.php?dis=1");
}

function enable_resource($enb_id)
{
	$upd=executework("update skillistic_resource set status='1' where id='".$enb_id."'");
	redirect("resource.php?enb=1");
}

function get_sch_vals($sdate)
{
$sel=executework("select * from skillistic_faculty_schedule where sdate='".$sdate."'");
/*echo $sdate;*/
/*echo "select * from skillistic_faculty_schedule where sdate='".$sdate."'";
*/

$row=@mysqli_fetch_array($sel);
return $row;
}
?>