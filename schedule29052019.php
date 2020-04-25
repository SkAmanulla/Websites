<?php
include_once("header.php");
//include_once("admin/include/include.php");
//include_once("admin/include/functions.php");
$sel=executework("select * from skillistic_payments");
$row=@mysqli_fetch_array($sel); 
$a=0;
if(!empty($_POST['subm']))
{
			$update=faculty_schedule();
           // exit();
}

if(!empty($_POST['sdate']))
{
	$sdate=$_POST['sdate'];
	$get_val=get_sch_vals($_POST['sdate']);
	
}
else
{
	$sdate=date("Y-m-d");
}
if(!empty($_POST['fdate']))
{
    $fdate=$_POST['fdate'];
}
else
{
    $fdate=date("Y-m-01");
}
//}
if(!empty($_POST['tdate']))
{
    $tdate=$_POST['tdate'];
}
else
{
    $tdate=date("Y-m-d");
}
//}

//$get_vals=get_schedule_vals($sdate);

?>
<?php 
            
            $con="";
            if(!empty($_POST['sub']))
             {
            //$sql=executework("select * from skillistic_faculty_schedule where sdate>='".$_POST['fdate']."' and '".$_POST['tdate']."'");
                
                //if(!empty($_post['fdate']))
                //{
                    $con.=" and sdate>='".$_POST['fdate']."' and sdate<='".$_POST['tdate']."'";
                //}
                //$con.=
              }
             // echo "select * from skillistic_faculty_schedule where sdate>='".$_post['fdate']."' and '".$_post['tdate']"'";
              $sql=executework("select * from skillistic_faculty_schedule where id<>'' ".$con);
              //echo ("select * from skillistic_faculty_schedule where id<>'' ".$con);
             ?>
 <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="../admin/jscript/jsvalidation.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  function get_total()
  {
 // alert($('#nkms').val());
 var total=0;
 var kms=0;
 var cot=0;
 var ict=0;
 var food=0;
 var postage=0;
 var room=0;
 var stotal=0;
  	var kms=$('#nkms').val();
	//alert("km"+kms);
	
	var amount=$('#charge').val();
	//alert("amt"+amount);
	 cot=$('#nkm2').val();
	 ict=$('#sitransport').val();
	//alert("ict"+ict);
	 food=$('#sfood').val();
	postage=$('#spostage').val();
	 room=$('#sroom').val();
	//var total=0;
	if(kms!="")
	{
		total=parseInt(kms)*parseInt(amount);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	
		
	}
	
	
	
	if(ict!="")
	{
		//alert("hiiii");
		//alert("total"+total);
		total=total+parseInt(ict);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	}
	if(cot!="")
	{
		//alert("hiiii");
		//alert("total"+total);
		total=total+parseInt(cot);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	}	
	if(food!="")
	{
		//alert("total"+total);
		total=parseInt(total)+parseInt(food);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	}
	if(postage!="")
	{
		total=parseInt(total)+parseInt(postage);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	}
	if(room!="")
	{
		total=parseInt(total)+parseInt(room);
		$('#stotal').val(total.toFixed(2));
		$('#sum').text(total.toFixed(2));
	}
	/*
	
	
	*/
	
	
  }
  </script>
  
    <script>
	$(document).ready(function(){
	   

		//iterate through each textboxes and add keyup
		//handler to trigger sum event
		$(".txt").each(function() {

			$(this).keyup(function(){
				calculateSum();
			});
		});

	});

	function calculateSum() {

		var sum = 0;
	
		$(".txt").each(function() {

			if(!isNaN(this.value) && this.value.length!=0) {
				sum += parseFloat(this.value);
			}

		});
		$("#sum").html(sum.toFixed(2));
		$("#stotal").val(sum.toFixed(2));
	}
</script>
							<script>
 function get_value(id){
                            if(id=="own")
                            {
							
                            $('#nkm').show();
                            $('#nkm1').hide();
                            }
                            else if(id=="local")
                            {
                            $('#nkm1').show();
                            $('#nkm').hide();
                            }}
							</script>
</head>
<style type="text/css">
span
{
	color:#FF0000;
	text-align:center;
}
.form-control {
    width: 30%;
}
</style>
<style type="text/css">
#content
{
  margin-left:0px;
}
.form-control
{
  width:50%
}
label
{
	color:#FFFFFF;
}

</style>
<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!--<div class="back-link back-backend">
                    <a href="index.html" class="btn btn-primary">Back to Dashboard</a>
                </div>-->
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login" style="margin-top:100px;">
                <h3 style="font-family:Verdana, Arial, Helvetica, sans-serif; color:white;"> Schedule form</h3><br> 
               
                   
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                    <?php
				if(!empty($msg)){
				?>
			<div align="center" style="color: #CC0000;"><?php echo $msg; ?></div>
                <?php
                }else if(!empty($_GET['invalid'])==1){
				?>
				<div align="center" style="color:#CC0000"><?php echo "Entered Details Are Invalid"; ?></div>
				<?php
				}
				else if(!empty($sqlzoo)==1){
			?>
            <div align="center" style="color:#CC0000"><?php echo "Invalid Username/Password"; ?></div>
            <?php } 
				else if(!empty($_GET['inv_usr'])==1){
			?>
            <div align="center" style="color:#CC0000">Entered Username Is Invalid</div>
            <?php } 
            else if(!empty($_GET['succ'])==1){
            ?>
            <div align="center" style="color:green">Schedule Inserted successfully</div>
            <?php } ?>

<div class="basic-form-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset">
                        <!-- <div class="sparkline12-hd">
                            <div class="main-sparkline12-hd">
                                <h1>Login </h1>
                             
                            </div>
                        </div> -->
                        <div class="hpanel">
                        <div class="panel-body">
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                            <div class="col-md-12">
                                <div class="row">
               
                                    <div id="error1" style="color:#FF0000; margin-left:180px;" ></div>
  
             
                <div class="container">
             <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="schedule_form" id="schedule_form" enctype="multipart/form-data" onSubmit="return schedule_validate();">
                    <label style=" color:white;">Date <input type="date" name="sdate" id="sdate" onChange="schedule_form.submit();" value="<?php echo $sdate; ?>" style=" color:#666666"> </label>
            <?php 
				if(!empty($_POST['sdate']))
				{
			?>
           
            
                         <div id="schedule">   <div class="form-group-inner">
                               <label class="control-label" for="name">Name of the Faculty</label>
                             
                        <input type="text" placeholder="enter name" title="Please enter you name" value=" <?php if(!empty($get_val['student_name'])){echo $get_val['student_name'];} ?>" name="sname" id="sname" class="form-control" style="width:30%;">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                            <div class="form-group-inner">
                                <label class="control-label" for="location">Location</label>
                            <input type="text" title="Please enter your location" placeholder="enter location" value="<?php if(!empty($get_val['location'])){echo $get_val['location'];} ?>" name="location" id="location" class="form-control" style="width:30%;">
                                <div id="error2" style=" text-align:left; color:#FF0000"></div>
                            </div>
                            <div class="form-group-inner">
                           
                                <label class="control-label" for="transport">Means of Transport</label><br>
                           <span style="color:white;"> <input type="radio"  name="see" id="see" onClick="return get_value(this.value);" value="own"
						                                  <?php 
                                                          if($get_val['transport_type']=="own")
                                                          {
                                                            ?>
                                                            selected
                                                            <?php
                                                          }
                                                         ?>>Own Vehicle</span><br>
                           
                           <span style="color:white;"> <input type="radio" 
														   name="see" id="see" onClick="return get_value(this.value);" value="local"
                                                         <?php 
                                                          if($get_val['transport_type']=="local")
                                                          {
                                                            ?>
                                                            selected
                                                            <?php
                                                          }
														  ?>>Local Transport</span><br>
                                <div id="error2" style=" text-align:left; color:#FF0000"></div>
                            </div> 
                       <div class="form-group-inner" id="nkm" style="display:none">
                                <label class="control-label" for="transport">No.of KM</label>
                            <input type="text" placeholder="enter KM" value="<?php if(!empty($get_val['no_kms'])){echo $get_val['no_kms'];} ?>" name="nkms" id="nkms" class="form-control txt" style="width:30%;" onChange="return get_total();">
                               <div id="error2" style=" text-align:left; color:#FF0000";> 
								</div>
                            </div>
                             <input type="hidden" name="charge" id="charge" value="<?php echo $row['amt'];?>">  
                            <div class="form-group-inner" id="nkm1" style="display:none">
                                <label class="control-label" for="transport">cost of transport</label>
                            <input type="number" placeholder="enter cost" value="<?php if(!empty($get_val['cost_transport'])){echo $get_val['cost_transport'];} ?>" name="nkm2" id="nkm2" class="form-control txt" style="width:30%;" onChange="return get_total();" ><div id="error2" style=" text-align:left; color:#FF0000"> </div>
                            </div>                       
                              <div class="form-group-inner">
                                <label class="control-label" for="inter">Inter city transport</label>
                        <input type="int" placeholder="enter inter city transport" title="Please enter you transport" value="<?php if(!empty($get_val['intercity_transport'])){echo $get_val['intercity_transport'];} ?>" name="sitransport" id="sitransport" class="form-control txt" style="width:30%;" onChange="return get_total();">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                              <div class="form-group-inner">
                                <label class="control-label" for="room">Room</label>
                        <input  type="text" placeholder="Room" title="Please enter you room" value="<?php if(!empty($get_val['room'])){echo $get_val['room'];} ?>" name="sroom" id="sroom" class="form-control txt" style="width:30%;" onChange="return get_total();">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                              <div class="form-group-inner">
                                <label class="control-label" for="food">Food</label>
                        <input type="text" placeholder="food" title="Please enter you food" value="<?php if(!empty($get_val['food'])){echo $get_val['food'];} ?>" name="sfood" id="sfood" class="form-control txt" style="width:30%;" onChange="return get_total();">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                              <div class="form-group-inner">
                                <label class="control-label" for="postage">Postage</label>
                        <input type="text" placeholder="postage" title="Please enter you postage" value="<?php if(!empty($get_val['postage'])){echo $get_val['postage'];} ?>" name="spostage" id="spostage" class="form-control txt" style="width:30%;" onChange="return get_total();">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>
                           

                              <div class="form-group-inner">
                              <label class="control-label" for="stotal">total</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sum"><?php if(!empty($get_val['total'])){echo $get_val['total'];} ?>
                        <strong><b></b></strong></span><input type="hidden" name="stotal" id="stotal">
                                <div id="error1" style=" text-align:left; color:#FF0000"></div>
                            </div>

                          
                          <!--  <div class="form-group-inner">
                                <label class="control-label" ><img src="captcha.php?rand=<?php echo rand();?>" id='captchaimg'></label>
                                <span class="help-block small">Can't read the image? click <a href='javascript: refreshCaptcha();' class="style1" style="color:#0099FF">here</a> to refresh.</span>
                                <input id="captcha" name="captcha"  class="form-control"  type="text" placeholder="Enter the above code here" >
                           <div id="error3" style=" text-align:center; color:#FF0000"></div>     
                            </div>-->
                            <!--<div class="checkbox login-checkbox">
                                <label>
										<input type="checkbox" class="i-checks"> Remember me </label>
                                <p class="help-block small">(if this is a private computer)</p>
                            </div>-->
                           
                           
                            <div align="center" style="margin-top:20px; width:10%; margin-left:100px;">
                            <input type="submit" name="subm" id="subm" class="btn btn-success btn-block loginbtn" value="submit">
                            </div>
                            </div>
                                  
                            
           <?php } ?>
           </form>   
                            <!--<a class="btn btn-default btn-block" href="#">Register</a>-->
                           <!-- <br><br><br>-->
                    <h3>Report</h3> 
                    <div style="margin-left:-150px;">
                <form name="forms" id="forms" method="post" enctype="multipart" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <label style="color:white;">From Date:</label><input type="date" name="fdate" id="fdate" value="<?php echo $fdate; ?>" >&nbsp;&nbsp; 
                <label style="color:white;">To Date:</label><input type="date" name="tdate" id="tdate" value="<?php echo $tdate; ?>"> &nbsp;&nbsp;
                <input type="submit" name="sub" id="sub" value="Search">
            </form>
            
           <!-- </div>-->
       
            <table width="60%" border="1" class="table border-table" style="margin-left:-300px;">
 <tbody>
        <tr>
            <th>Sl.no</th> 
            <th>Sdate</th>
            <th>Student&nbsp;Name</th>
            <th>Location</th>
            <th>Transport&nbsp;Type</th>
            <th>No&nbsp;Of&nbsp;kms</th>
            <th>Cost&nbsp;Of&nbsp;transport</th>
            <th>Intercity&nbsp;transport</th>
            <th>Room</th>
            <th>Food</th>
            <th>Postage</th>
            <th>Total</th>
        </tr>
        <?php 
        $i=1;
        while ($row=mysqli_fetch_array($sql)) {
            ?>
             <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $row['sdate']; ?></td>
            <td><?php echo $row['student_name']; ?></td>
            <td><?php echo $row['location']; ?></td>
            <td><?php echo $row['transport_type']; ?></td>
            <td><?php echo $row['no_kms']; ?></td>
            <td><?php echo $row['cost_transport']; ?></td>
            <td><?php echo $row['intercity_transport']; ?></td>
            <td><?php echo $row['room']; ?></td>
            <td><?php echo $row['food']; ?></td>
            <td><?php echo $row['postage']; ?></td>
            <td><?php echo $row['total']; ?></td>

            </tr>
            <?php
            $i++;
         } ?>
  </tbody>
</table>
</div>
       </div>
                    </div>
                </div>
                <div>
            </div>
            <div>
                </div>
    </br>
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
    </div>
   
              <style type="text/css">
                
                th
                {
                  text-align: center;
                  background-color:rgba(179,178,180,0.3);
                }

              </style>
 

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>

        </div>

     <?php
include_once("footer.php");
?>

