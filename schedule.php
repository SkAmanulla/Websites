<?php
include_once("header.php");
$sel=executework("select * from skillistic_payments where status='1'");
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

if(!empty($_POST['see']))
{
	$transportation=$_POST['see'];
}
else
{
	$transportation="";
}

if(!empty($_POST['sch_id']))
{
	$sch_id=$_POST['sch_id'];
}
else if(!empty($_GET['sch_id']))
{
	$sch_id=$_GET['sch_id'];
}
else
{
	$sch_id="";
}
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
<!doctype html>
<html class="no-js" lang="en">

<head>

</head>
<style type="text/css">
span
{
	color:#FF0000;
	text-align:center;
}
.form-control {
    width: 100%;
}
</style>
<script type="text/javascript" src="../admin/jscript/jsvalidation.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">

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
  
    
<script type="text/javascript">
 function get_value(id)
 {
       if(id=="own")
       {
            $('#nkm').show();
            $('#nkm1').hide();
			$('#nkm2').val('');
			$('#mode_tr').val('');
			$('#stotal').val('');
			$("#sum").html('');
			//$('#schedule_form').submit();
       }
       else if(id=="local")
       {
           $('#nkm1').show();
           $('#nkm').hide();
		   $('#nkms').val('');
		   $('#nkm2').val();
		   $('#stotal').val('');
			$("#sum").html('');
		   //$('#schedule_form').submit();
       }
	   document.schedule_form.submit();
 }
</script>
<body>
   

    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-8 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login" style="margin-top:10px;">
                    <h3 style=" color:white; text-align: left"><strong>Expenses Form</strong></h3>
                    <br>
                   
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
            <div style="color:green">Inserted successfully</div>
            <?php } ?>
<style type="text/css">
#content
{
  margin-left:0px;
}
.form-control
{
  width:50%
}
label,th,h3
{
	color:#FFFFFF;
}
.col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-xs-1, .col-xs-10, .col-xs-11, .col-xs-12, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 1px;
    padding-left: 1px;
}
</style>           
            <form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" name="schedule_form" id="schedule_form" enctype="multipart/form-data" onSubmit="return schedule_validate();">
             <div id="error1" style=" text-align:left; color:#FF0000"></div>
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6">
                   <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Transport</label></h3>
                     </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Own vehicle(in kms)</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Kms" value="" name="nkms" id="nkms" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                           <input type="hidden" name="charge" id="charge" value="<?php echo $row['amt'];?>">  
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Local Transport</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="lt" id="lt" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Inter City</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="ic" id="ic" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="total1" id="total1" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>  
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4" style="margin-left: 50px;">
                         <label class="control-label"> Grand Total</label> 
                        </div>
                        <div class="col-md-6" style="margin-left: -50px;">
                          <input type="text" placeholder="Rs" value="" name="gt" id="gt" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>                   
                 </div>                 
            
                 

                 <div class="col-md-6">
                   <div class="form-group">
                     <div class="col-md-4">
                      <h3> <label class="control-label">Others</label></h3>
                     </div>
                   </div>
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Food</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="food" id="food" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div>     
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Room</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="room" id="room" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div> 
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Postage</label> 
                        </div>
                        <div class="col-md-6">
                          <input type="text" placeholder="Rs" value="" name="post" id="post" class="form-control txt" style="width:50%;" onChange="return get_total2();">
                        </div>
                      </div>
                   </div> 
                   <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
                         <label class="control-label">Total</label> 
                        </div>
                        <div class="col-md-6">
                         <input type="text" placeholder="Rs" value="" name="total2" id="total2" class="form-control txt" style="width:50%;" readonly>
                        </div>
                      </div>
                   </div>  
                  <div class="form-group">
                      <div class="row">
                        <div class="col-md-4">
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
                          <input type="hidden" name="sch_id" id="sch_id" value="<?php echo $sch_id; ?>">
                        </div>
                      </div>
                   </div>
               </div>

               <div class="col-md-12">   
                        <div style="margin-top:20px; width:10%; margin-left:200px;">
                             <input type="submit" name="subm" id="subm" class="btn btn-success btn-block loginbtn" value="submit">
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
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
       
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>


<?php include "footer.php"; ?>
