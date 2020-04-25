<?php 
	include_once("header.php");

if(!empty($_POST['mnth']))
$mnth=$_POST['mnth'];
else if(!empty($_GET['mnth']))
$mnth=$_GET['mnth'];
else
$mnth=date('n');

if(!empty($_POST['yr']))
$yr=$_POST['yr'];
else if(!empty($_GET['yr']))
$yr=$_GET['yr'];
else
$yr=date('Y');

$dt=$yr."-".$mnth."-01";

$f=1;
$t=date('t',strtotime($dt));

$d=date('N',strtotime($dt));

$days=array('SUN','MON','TUES','WED','THU','FRI','SAT');
$_SESSION['facultyid']=4;

$sel=executework("select * from skillistic_schedule where faculty_id='".$_SESSION['faculty_id']."' and MONTH(sdate)='".$mnth."' and YEAR(sdate)='".$yr."'");
//echo "select * from skillistic_schedule where faculty_id='".$_SESSION['faculty_id']."' and MONTH(sdate)='".$mnth."' and YEAR(sdate)='".$yr."'";
$cnt=@mysqli_num_rows($sel);
$schedule=array();
while($row=@mysqli_fetch_array($sel))
{
	$s=date('j',strtotime($row['sdate']));
	$schedule[$s]=$row;
}
?>
<!--<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Accordion | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
         ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
         ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
         ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
         ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- adminpro icon CSS
         ============================================ -->
    <link rel="stylesheet" href="css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
         ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- animate CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="css/animate.css">-->
    <!-- mCustomScrollbar CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">-->
    <!-- normalize CSS
         ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- accordions CSS
         ============================================ -->
    <link rel="stylesheet" href="css/accordions.css">
	<!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="css/tabs.css">
    <!-- style CSS
         ============================================ -->
    <!--<link rel="stylesheet" href="style.css">-->
    <!-- responsive CSS
         ============================================ -->
   <!-- <link rel="stylesheet" href="css/responsive.css">-->
    <!-- modernizr JS
         ============================================ -->
   <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script>-->
    <script type="text/javascript">
	function add_expenses(sch_id)
	{
		window.location.href="schedule.php?sch_id="+sch_id;
	}
	
	function feedback(sch_id)
	{
		window.location.href="feedback.php?sch_id="+sch_id;
	}
	function send_val(btn)
	{
			var id=$(btn).attr("data-id");
			$("#m"+id).click();
			$('#hid').val(id);
			var datastring="sch_id="+id;
			$.ajax({
				type: "POST",
				url: "ajax.php",
				data: datastring,
				cache: false,
				success: function(html)
				{
					var con=html.split('~');
					if(con[2]==0)
					{
						$('#expenses_form').show();
						$('#view_form').hide();
					}
					else if(con[2]==1)
					{
						$('#expenses_form').hide();
						$('#view_form').show();
						$('#no_of_kms1').html(con[3]);
						$('#local_transport1').html(con[4]);
						$('#inter_city1').html(con[5]);
						$('#food1').html(con[7]);
						$('#room1').html(con[6]);
						$('#postage1').html(con[8]);
						$('#gt1').html(con[11]);
						$('#details1').html(con[10]);
						$('#image1').html(con[9]);
					}
				}
			});
	}
	function send_val1(btn)
	{
			var id=$(btn).attr("data-id");
			$("#l"+id).click();
			$('#sid').val(id);
			var sts=$('#stats').val();
			
				var datastring="schedule_id="+id;
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
						/*if(con[5]!="")
						{
						$('#det').html(con[5]);
						}
						if(con[4]!='')
						{
							$('#img').html('<img src="data:fb/' + con[4] + '" />');
						}*/
						if(con[2]==0)
						{
							$('#feedback_form').show();
							$('#view_fb').hide();
						}
						else if(con[2]==1)
						{
							$('#feedback_form').hide();
							$('#view_fb').show();
							$('#det').html(con[3]);
							$('#img').html(con[4]);
						}
					}
					
				}
		});

			
	}
	
	function fb_insert()
	{
		var datastring=$('#fb_form').serialize();
		/*var fd = new FormData(this);
 		 fd.append('file',$('#file')[0].files[0]);
		fd.append('details ',$('#message').val());
		fd.append('sid ',$('#sid').val());*/

		//alert("datastring"+datastring);
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
						if(con[2]>0)
						{
						//alert("con[3]"+con[3]);
						$('#status').html(con[3]);
							$("#close_pop").click();
						}
						//else if(con[5]!="")
						//{
						//	$('#det').html(con[5]);
						//}
					}
					
				}
		});
	}
	
	function exp_insert()
	{
		var datastring=$('#exp_form').serialize();
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
						if(con[2]>0)
						{
						//$('#status').html(con[3]);
							$("#close_popup").click();
						}
					}
					
				}
		});
	}
	function schedule_validate()
	{
		alert("hiiii");
		/*if($("#nkms").val()=="")
		{
			valid_error("nkms","enter no.of kms","error1");
			return false;
		}
	
		if(($('#nkms').val()!="") && (isNaN($('#nkms').val())==true))
			{
				$('#nkms').val('');	
				valid_error("nkms","Enter Numbers Only","error1");
				return false;
			}
	
		if(($('#nkms').val()!="") && ($('#nkms').val()>90))
			{
				$('#nkms').val('');	
				valid_error("nkms","Accept Upto 90 Kms","error1");
				return false;
			}	
	
		if($("#lt").val()=="")
		{
			valid_error("lt","enter valid amount","error1");
			return false;
		}
	
		if(($('#lt').val()!="") && (isNaN($('#lt').val())==true))
			{
				$('#lt').val('');	
				valid_error("lt","Enter Numbers Only","error1");
				return false;
			}
	
		if($("#ic").val()=="")
		{
			valid_error("ic","enter valid amount","error1");
			return false;
		}
	
		if(($('#ic').val()!="") && (isNaN($('#ic').val())==true))
			{
				$('#ic').val('');	
				valid_error("ic","Enter Numbers Only","error1");
				return false;
			}
	
		if($("#food").val()=="")
		{
			valid_error("food","enter valid amount","error1");
			return false;
		}
	
		if(($('#food').val()!="") && (isNaN($('#food').val())==true))
			{
				$('#food').val('');	
				valid_error("food","Enter Numbers Only","error1");
				return false;
			}
	
		if(($('#food').val()!="")&&($('#food').val()>300))
		{
			$('#food').val('');
			valid_error("food","Food Expenses Upto 300 Rs","error1");
			return false;	
		}		
	
		if($("#room").val()=="")
		{
			valid_error("room","enter valid amount","error1");
			return false;
		}
	
		if(($('#room').val()!="") && (isNaN($('#room').val())==true))
			{
				$('#room').val('');	
				valid_error("room","Enter Numbers Only","error1");
				return false;
			}
	
		if(($('#room').val()!="")&&($('#room').val()>1000))
		{
			$('#room').val('');	
			valid_error("room","Room Charges Allow Upto 1000 Rs","error1");
			return false;
		}
	
	
		if($("#post").val()=="")
		{
			valid_error("post","enter valid amount","error1");
			return false;
		}
	
		if(($('#post').val()!="") && (isNaN($('#post').val())==true))
			{
				$('#post').val('');	
				valid_error("post","Enter Numbers Only","error1");
				return false;
			}		
	
	
		if($('#filename').val()=="")	
		{
			valid_error("filename","Select File","error1");
			return false;
		}
		var fup = $('#filename').val();
		var ext = fup.substring(fup.lastIndexOf('.') + 1);
		if(ext =="pdf" || ext=="jpg" || ext=="png")
		{*/
			//return true;
		/*}
		else
		{
			valid_error("filename","Only Img And Pdf Are Allowed To Upload File","error1");	
			$('#filename').val('');
			return false;
		}
		if($('#details').val()=="")
		{
			valid_error("details","Enter Details","error1");	
			return false;
		}*/
	}
	 function get_total2()
  {
    var total1=0;
 var total2=0;
 var food=0;
 var postage=0;
 var room=0;
 var grandtotal=0;
 var kms=0;
 var ic=0;
 var lt=0;
 var kms=$('#nkms').val();
 var amount=$('#charge').val();
	 food=$('#food').val();
	postage=$('#post').val();
	 room=$('#room').val();
   ic=$('#ic').val();
   lt=$('#lt').val();

   if((kms!="") && (kms<=90))
  {
    total1=parseInt(kms)*parseInt(amount);
    grandtotal=total1+total2;
    $('#total1').val(total1.toFixed(2));
    $('#gt').val(grandtotal.toFixed(2));
  }

    if(ic!="")
  {
    total1=parseInt(ic)+parseInt(total1);
    grandtotal=total1+total2;
    $('#total1').val(total1.toFixed(2));
    $('#gt').val(grandtotal.toFixed(2));
  }

   if(lt!="")
  {
    total1=parseInt(lt)+parseInt(total1);
    grandtotal=total1+total2;
    $('#total1').val(total1.toFixed(2));
    $('#gt').val(grandtotal.toFixed(2));
  }



	if((food!="") && (food<=300))
	{
		total2=parseInt(total2)+parseInt(food);
    grandtotal=total1+total2;
		$('#total2').val(total2.toFixed(2));
		$('#gt').val(grandtotal.toFixed(2));
	}
	if((room!="") && (room<=1000))
	{
		total2=parseInt(total2)+parseInt(room);
    grandtotal=total1+total2;
		$('#total2').val(total2.toFixed(2));
		$('#gt').val(grandtotal.toFixed(2));
	}
	if(postage!="")
	{
		total2=parseInt(total2)+parseInt(postage);
    grandtotal=total1+total2;
		$('#total2').val(total2.toFixed(2));
		$('#gt').val(grandtotal.toFixed(2));
	}
	
  }
	</script>
    <style type="text/css">
	.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {

    position: relative;
    min-height: 1px;
    padding-right: 0px;
    padding-left: 15px;

}
	</style>
<!--</head>

<body>-->
    <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]-->
    
    <!-- accordion start-->
    <br><br>
    <div class="adminpro-accordion-area"> 
        <div class="container">
			<!--<div class="row">
                <div class="col-lg-12">
                    <div class="tab-content-details shadow-reset">
                        <h2>Custom Animate accordion Bootstrap</h2>
                        <p>These are the Custom Animate accordion Bootstrap. Using animate bounce, flash, pulse, rubberBand, shake, swing, tada, wobble, jello, bounceIn, bounceInDown, bounceInLeft, bounceInRight, bounceInUp, fadeIn, fadeInDown, fadeInDownBig, fadeInLeft, fadeInLeftBig, fadeInRight, fadeInRightBig, fadeInUp, fadeInUpBig, flipInX, flipInY, lightSpeedIn, rotateIn, rotateInDownLeft, rotateInDownRight, rotateInUpLeft, rotateInUpRight, rollIn, zoomIn, zoomInDown, zoomInLeft, zoomInRight, zoomInUp etc.</p>
                    </div>
                </div>
            </div>-->
            <form action="<?php $_SERVER['PHP_SELF']; ?>" name="form1" id="form1" method="post">
            	<div class="row">
                <div class="col-lg-12" style="background-color: #0e1e53; padding-bottom: 30px;">
                    <div class="admin-pro-accordion-wrap mg-b-40 shadow-reset" style="background-color: #0e1e53" >
                        <!--<div class="alert-title">
                            <h2>Animate bounce Accordion</h2>
                            <p>These are the Custom bootstrap Animate bounce Accordion style 1</p>
                        </div>-->
                        <div class="panel-group adminpro-custon-design" id="accordion">
                            <div class="panel panel-default">
                               <div class="col-md-10 col-md-offset-1">
                            <div class="row">
                              <div class="col-md-12" style="text-align: center">
                              	<div class="col-md-4 form-group-inner"><select name="mnth" id="mnth" class="form-control">
                              	  <option value="1">January</option>
                              	  <option value="2">February</option>
                              	  <option value="3">March</option>
                              	  <option value="4">April</option>
                              	  <option value="5">May</option>
                              	  <option value="6">June</option>
                              	  <option value="7">July</option>
                              	  <option value="8">August</option>
                              	  <option value="9">September</option>
                              	  <option value="10">October</option>
                              	  <option value="11">November</option>
                              	  <option value="12">December</option>
                              	</select></div>
                              	<div class="col-md-4">
                              	<select name="yr" id="yr" class="form-control">
                             	  <?php
									for($i=2010;$i<=(date('Y')+1);$i++)
									{
									?>
                              	  <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                              	  <?php
									}
									?>
                              	</select></div>
								  <script>
									  $('#mnth').val('<?php echo $mnth; ?>');
									  $('#yr').val('<?php echo $yr; ?>');
								  </script>
                              	<div class="col-md-2"><input type="button" name="go" value=" GO! " style="background-color: indigo;color: white;"  class="form-control" onClick="form1.submit();"></div>
                              </div>
                               <div class="col-md-12">
                             <?php
							 	$k=1;
								 $m=1;
								   $dd=$d;
								   $exst=array();
								for($i=1;$i<=($t+7+$dd);$i++)
								{
									$padd=30;
									$clr="000000";
									if($i<=count($days))
									{
										$clr="D9950F";
										$padd=10;
										$day=$days[$i-1];
									}
									else if($d>0)
									{
										$day='';
										$d--;
									}
									else
									{
										$day=$m;
										if(!empty($schedule[$m]))
										{
											if($schedule[$m]['sc_status']==2)
											$clr='840025';
											else
											$clr="307900";
											$exst[]=$i;
										}
										else
										{
											$clr='3d21ca';
										}
										$m++;
									}
							?>
                         
                            <div class="col-md-1" style="padding-top: 30px; width: 12%; max-width: 12%">
                               <?php
								if($day!='')
								{
									?>
                                <div class="panel-heading accordion-head" style="padding: <?php echo $padd; ?>px; background-color: #<?php echo $clr; ?>">
                                    <h4 class="panel-title" style="text-align: center">
                                 <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>">
                                <?php echo $day;?></a></h4>
                                </div>
                                <?php
								}
									?>
                            </div>
                            
                               
                                <?php 
								
								if($i==7 || $i==14 || $i==21 || $i==28 || $i==35 || $i==42)
								{
								 ?>
                                 <div class="clearfix"></div>
                              <?php
							  	for($j=$k;$j<=$i;$j++)
								{
									if(in_array($j,$exst))
									{
								//echo "k value".$k."<br>";
										$p=($j-7-$dd);
										$seli=executework("select * from skillistic_institute where id=". $schedule[$p]['institution_id']);
										$rowi=@mysqli_fetch_array($seli);
										if($schedule[$p]['stime']>12)
										$tm=($schedule[$p]['stime']-12)." PM";
										else
										$tm=$schedule[$p]['stime']." AM";
										
										$seld=executework("select * from skillistic_masterdata where id=".$rowi['district']);
										$rowd=@mysqli_fetch_array($seld);
										$selc=executework("select * from skillistic_masterdata where id=".$rowi['city']);
										$rowc=@mysqli_fetch_array($selc);
										
							  ?>
                                 <div id="collapse<?php echo $j; ?>" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce " style="background-color:#ca7e67">
                                        <div class="row">
                                        	<div class="col-md-10 col-md-offset-1" style="background-color: azure">
                                        	<div class="col-md-12"><h3><?php echo ucwords($rowi['inst_name']); ?></h3></div>
                                        		<div class="col-md-6">
													<div class="col-md-6"><h4>Date</h4></div>
                                        			<div class="col-md-6"><h4><?php echo date('d/m/Y',strtotime($schedule[$p]['sdate'])); ?></h4></div>
                                        			<div class="col-md-6"><h4>District</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowd['master_value']); ?></h4></div>
													<div class="col-md-6"><h4>Location</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['address']); ?></h4></div>
                                        			

                                        			
                                        			
                                        		</div>
                                        		<div class="col-md-6">
                                        			<div class="col-md-6"><h4>Time</h4></div>
                                        			<div class="col-md-6"><h4><?php echo $tm; ?></h4></div>
                                        			<div class="col-md-6"><h4>City</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowc['master_value']); ?></h4></div>
                                        			<div class="col-md-6"><h4>Contact Name</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['cname']); ?></h4></div>
                                        			<div class="col-md-6"><h4>Contact No</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['mobile_no']); ?></h4></div>
                                        		</div>
                                                <div class="col-md-12">
                                                <div class="col-md-3"><h4>Status</h4></div>
                                                <?php 
                                                $sels=executework("select * from skillistic_schedule where id='".$schedule[$p]['id']."' and sdate='".$schedule[$p]['sdate']."'");
												//echo ("select * from skillistic_schedule where id='".$schedule[$p]['id']."' and sdate='".$schedule[$p]['sdate']."'");
	$rows=@mysqli_fetch_array($sels);
	//print_r($rows);
	$status=$rows['sc_status'];
	//echo "status".$status;
	if($status==0)
	{
		$status_val="Completed";
	}
	else
	{
		$status_val="Scheduled";
	}
	?>
                                                <div class="col-md-3"><span id="status"><h4><?php echo $status_val;?></h4></span></div>
                                                </div>
                                                <?php
												$get_date=date('d/m/Y',strtotime($schedule[$p]['sdate']));
												//echo "get date".$get_date;
													$to_day=date("d/m/Y");
													//echo "today".$to_day;
													$time=date("G");
													if($time>12)
													$hr=($time-12)." PM";
													else
													$hr=$time." AM";
													//echo "time".$hr;
													if(($to_day>=$get_date) || (($get_date==$to_day) && ($tm>=$hr)))
													{
												?>
                                                <div class="col-md-12" style="text-align:left;">
												<!--<input type="button" name="feedback" id="feedback" value="Feed Back" onclick="feedback('<?php echo $schedule[$p]['id']; ?>');">--><a class="Primary mg-b-10 btn btn-default" href="#" data-toggle="modal" data-target="#PrimaryModalalert" data-id='<?php echo $schedule[$p]['id']; ?>' onclick="send_val1(this);" style="cursor:pointer; color:#2A00FF; text-align:left;">FeedBack</a>
                                                  <?php /*?> <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert"  data-id='<?php echo $row['id'];?>' style="cursor:pointer; color:#00FF00">Add&nbsp;New</a><?php */?>
                           <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert" data-id='<?php echo $schedule[$p]['id']; ?>' ><span id="l<?php echo $schedule[$p]['id']; ?>"></span></a></div>
                                                <!--<input type="button" name="add_exp" id="add_exp" value="Add Expenses" onclick="add_expenses('<?php echo $schedule[$s]['id']; ?>');">-->
                                                <div class="col-md-12" style="text-align:right;">
                                                <a class="Primary mg-b-10 btn btn-default" href="#" data-toggle="modal" data-target="#PrimaryModalalert1" data-id='<?php echo $schedule[$p]['id']; ?>' onclick="send_val(this);" style="cursor:pointer; color:#2A00FF; text-align:left; margin-top:-55px; margin-right:15px;">Add Expenses</a>
                           <a class="Primary mg-b-10" href="#" data-toggle="modal" data-target="#PrimaryModalalert1" data-id='<?php echo $schedule[$p]['id']; ?>' ><span id="m<?php echo $schedule[$p]['id']; ?>"></span></a>
                                                </div>
                                                <?php } ?>
                                        	</div>
                                        </div>
                                    </div>
                                </div>
                                 <?php 
									}
								 $k++;
								 }
								 
								 } } ?>
                                </div> </div>
								</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            </form>
            
    </div>
   
    <!-- jquery
         ============================================ -->
    <script src="js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
         ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- meanmenu JS
         ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- sticky JS
         ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- mCustomScrollbar JS
         ============================================ -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- scrollUp JS
         ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- main JS
         ============================================ -->
    <script src="js/main.js"></script>
<?php 
	include_once("footer.php");
?>
<div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog" style="max-width:2500px;">
                                <div class="modal-content" style=" background-color:#ece1bc">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#" style="font-size:x-large;" id="close_pop"><strong>X</strong></a>
                                    </div>
                                    <div class="modal-body"> <!--<i class="fa fa-check modal-check-pro"></i>-->
                                        
                                        <!--<p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>-->
                                        <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="fb_form" id="fb_form" enctype="multipart/form-data" onSubmit="return feedback_validate();">
										 <input type="hidden" name="sid" id="sid">
										 <input type="hidden" name="stats" id="stats" value="<?php echo $status; ?>">
                                        <h2 style="font-size:23px; color: blue;"><strong>FeedBack</strong></h2>
										
                                        <div class="feedback_form" id="feedback_form" style="display:none;">
                                         
             <div id="error1" style=" text-align:left; color:#FF0000"></div>
               <div class="row">
                 <div class="col-md-4">
                    <label class="control-label">Upload Bills</label>                   
                 </div>
                 <div class="col-md-6">
                    <input type="file" name="file" id="file"  style="width:40%;">
                 </div>
               </div>
               <br>
                <div class="row">
                 <div class="col-md-4">
                    <label class="control-label">Details</label>                   
                 </div>
                 <div class="col-md-6">
                    <textarea name="details" id="details" style="width: 100%;"></textarea>
                         
                 </div>
               </div>

               <div class="col-md-12">   
                        <div style="margin-top:20px; width:15%; margin-left:200px;">
                             <input type="button" name="fb" id="fb" class="btn btn-success btn-block loginbtn" value="submit" onclick="fb_insert();">
                            </div>
                            </div>

             </div>
										
                        				<div class="view_fb" id="view_fb" style="display:none;">
										<?php
										//print_r($_POST);
											//$self=executework("select * from skillistic_feedback where sch_id='".$_POST['sid']."'");
											//$rowf=@mysqli_fetch_array($self);
										?>
             <div id="error1" style=" text-align:left; color:#FF0000"></div>
               <div class="row">
                 <div class="col-md-4">
                    <label class="control-label">Upload Bills</label>                   
                 </div>
                 <div class="col-md-6">
				 <span id="img"></span>
                 </div>
               </div>
               <br>
                <div class="row">
                 <div class="col-md-4">
                    <label class="control-label">Details</label>                   
                 </div>
                 <div class="col-md-6">
				 <span id="det"></span>
                    <?php //echo $rowf['details']; ?>
                 </div>
               </div>

               

             </div>
                         
                        				
										
										</form>
                        				</div>
                                        

                        
                         
                       
                                        </div>
                                        
                                        </div>
                	
                                    </div>
<div id="PrimaryModalalert1" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                            <div class="modal-dialog" style="max-width:2500px;">
                                <div class="modal-content" style=" background-color:#ece1bc">
                                    <div class="modal-close-area modal-close-df">
                                        <a class="close" data-dismiss="modal" href="#" style="font-size:x-large;" id="close_popup"><strong>X</strong></a>
                                    </div>
                                    <div class="modal-body"> <!--<i class="fa fa-check modal-check-pro"></i>-->
                                        <h2 style="font-size:23px; color: blue;"><strong>Schedule Details</strong></h2>
                                        <!--<p>The Modal plugin is a dialog box/popup window that is displayed on top of the current page</p>-->
                                        <div class="col-md-12">
                                        <div class="col-md-12"><h3><?php echo ucwords($rowi['inst_name']); ?></h3></div>
                                        		<div class="col-md-6">
													<div class="col-md-6"><h4>Date</h4></div>
                                        			<div class="col-md-6"><h4><?php echo date('d/m/Y',strtotime($schedule[$p]['sdate'])); ?></h4></div>
                                        			<div class="col-md-6"><h4>District</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowd['master_value']); ?></h4></div>
													<div class="col-md-6"><h4>Location</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['address']); ?></h4></div>
                                        		</div>
                                        		<div class="col-md-6">
                                        			<div class="col-md-6"><h4>Time</h4></div>
                                        			<div class="col-md-6"><h4><?php echo $tm; ?></h4></div>
                                        			<div class="col-md-6"><h4>City</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowc['master_value']); ?></h4></div>
                                        			<div class="col-md-6"><h4>Contact Name</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['cname']); ?></h4></div>
                                        			<div class="col-md-6"><h4>Contact No</h4></div>
                                        			<div class="col-md-6"><h4><?php echo ucwords($rowi['mobile_no']); ?></h4></div>
                                        		</div>
                                        </div>
                                        <h2 style="font-size:23px; color: blue;"><strong>Expenses</strong></h2>
                                        
                                        <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="exp_form" id="exp_form" enctype="multipart/form-data" onSubmit="return schedule_validate();">
                                        <input type="hidden" name="hid" id="hid">
                                        <?php 
											//$sele=executework("select * from skillistic_faculty_schedule where schedule_id='".."'");
										?>
                                        <div class="expenses_form" id="expenses_form" style="display:none;">
             
               <div class="col-md-12">
               <div id="error1" style=" text-align:center; color:#FF0000"></div>
               <div class="row">
                 <div class="col-md-6">
                  <!-- <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Transport</label></h3>
                     </div>
                   </div>
                   <br>-->
                   <h2>Transport</h2>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6" align="left">
                         <label class="control-label">Own vehicle(in kms)</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Kms" value="" name="nkms" id="nkms" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                          <?php
						  $selp=executework("select * from skillistic_payments where status='1'");
							$rowp=@mysqli_fetch_array($selp); 
						  ?>
                          <?php $a=$rowp['amt']; 
                          // echo $a;?>
                           <input type="hidden" name="charge" id="charge" value="<?php if($a!=''){echo $rowp['amt'];}else {echo '0';}?>">    
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Local Transport</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="lt" id="lt" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Inter City</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="ic" id="ic" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="total1" id="total1" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>  
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6" style="margin-left: 50px;">
                         <label class="control-label"> Grand Total</label> 
                        </div>
                        <div class="col-md-6" style="margin-left: -50px;">
                          <input type="text" placeholder="Rs" value="" name="gt" id="gt" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>                   
                 </div>                 
            
                 

                 <div class="col-md-6">
                  <!-- <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Others</label></h3>
                     </div>
                   </div>
                   <br>-->
                   <h2>Others</h2>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Food</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="food" id="food" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>     
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Room</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="room" id="room" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div> 
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Postage</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="post" id="post" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div> 
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                         <input type="text" placeholder="Rs" value="" name="total2" id="total2" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>  
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Upload Bills</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="file" name="filename" id="filename"  style="width:40%;">
                        </div>
                      </div>
                   </div>  
                 </div>
                 </div>
                 <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Details</label> </div>
                         <div class="col-md-9">
                      
                          <textarea name="details" id="details" style="width: 100%;"></textarea>
                          <input type="hidden" name="sch_id" id="sch_id" >
                        </div>
                      </div>
                   </div>
               </div>

               <div class="col-md-12">   
                        <div style="margin-top:20px; width:13%; margin-left:200px;">
                             <input type="button" name="subm" id="subm" class="btn btn-success btn-block loginbtn" value="submit" onclick="exp_insert();">
                            </div>
                            </div>

             </div>
                        				</div>
                                        <div class="view_form" id="view_form" style="display:none;">
                                        <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6">
                  <!-- <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Transport</label></h3>
                     </div>
                   </div>
                   <br>-->
                   <h2>Transport</h2>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6" align="left">
                         <label class="control-label">Own vehicle(in kms)</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="no_of_kms1"></span>
                          <?php /*?><input type="text" placeholder="Kms" value="" name="nkms" id="nkms" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                           <input type="hidden" name="charge" id="charge" value="<?php echo $row['amt'];?>"> <?php */?> 
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Local Transport</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="local_transport1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="lt" id="lt" class="form-control txt" style="width:50%;" onChange="return get_total2();"><?php */?>
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Inter City</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="inter_city1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="ic" id="ic" class="form-control txt" style="width:50%;" onChange="return get_total2();"><?php */?>
                        </div>
                      </div>
                   </div>
                   <!--<div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="total1"></span>
                        </div>
                      </div>
                   </div>-->  
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6" style="margin-left: 50px;">
                         <label class="control-label"> Grand Total</label> 
                        </div>
                        <div class="col-md-6" style="margin-left: -50px;">
                        <span id="gt1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="gt" id="gt" class="form-control txt" style="width:50%;" readonly><?php */?>
                        </div>
                      </div>
                   </div>                   
                 </div>                 
            
                 

                 <div class="col-md-6">
                  <!-- <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Others</label></h3>
                     </div>
                   </div>
                   <br>-->
                   <h2>Others</h2>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Food</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="food1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="food" id="food" class="form-control txt" style="width:50%;" onChange="return get_total2();"><?php */?>
                        </div>
                      </div>
                   </div>     
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Room</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="room1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="room" id="room" class="form-control txt" style="width:50%;" onChange="return get_total2();"><?php */?>
                        </div>
                      </div>
                   </div> 
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Postage</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="postage1"></span>
                          <?php /*?><input type="text" placeholder="Rs" value="" name="post" id="post" class="form-control txt" style="width:50%;" onChange="return get_total2();"><?php */?>
                        </div>
                      </div>
                   </div> 
                   <!--<div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                        </div>
                      </div>
                   </div>-->  
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-6">
                         <label class="control-label">Upload Bills</label> 
                        </div>
                        <div class="col-md-6">
                        <span id="image1"></span>
                         <?php /*?> <input type="file" name="filename" id="filename"  style="width:40%;"><?php */?>
                        </div>
                      </div>
                   </div>  
                 </div>
                 </div>
                 <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Details</label> </div>
                         <div class="col-md-9">
                      <span id="details1"></span>
                          <?php /*?><textarea name="details" id="details" style="width: 100%;"></textarea>
                          <input type="hidden" name="sch_id" id="sch_id" value="<?php echo $sch_id; ?>"><?php */?>
                        </div>
                      </div>
                   </div>
               </div>
                                        </div>
                                        </form>
                	<br>
                                    <!--<div class="modal-footer">-->
                                      <!--  <a data-dismiss="modal" href="#" style="margin-left:450px;">Cancel</a>-->
                                       <!-- <a href="#">Process</a>-->
                                    <!--</div>--> </div>
									
			
                                </div>
                            </div>
                            
                            
                            
                            
                            
									
			
                                </div>
                            </div>
                        </div>