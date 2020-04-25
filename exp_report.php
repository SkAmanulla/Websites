<?php 
include "header.php";
  $con="";
            if(!empty($_POST['sub']))
             {
           
                    $con.=" and sdate>='".$_POST['fdate']."' and sdate<='".$_POST['tdate']."'";
               
              }
              $sql=executework("select * from skillistic_faculty_schedule where id<>'' ".$con);
		
?>
<script type="text/javascript">
    function openfile(filename)
{ 
    // $query = "select * from skillistic_faculty_schedule where id=$did";
    alert(filename);
    //window.location.href=filename;
    window.open(filename,'_blank');
}

</script>

<style type="text/javascript">
.table {

    width: 77%;
    max-width: 70%;
    margin-bottom: 20px;
	align:center;

}
</style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
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
                        <div class="hpanel" style="color:#FFFFFF"> 
                        <div class="panel-body">
                        <div class="sparkline12-graph">
                            <div class="basic-login-form-ad">
                                <div class="row">
                                    <div class="col-lg-12">
                                    <div style="margin-left:-100px;">
 <form name="forms" id="forms" method="post" enctype="multipart" action="<?php echo $_SERVER['PHP_SELF'] ?>">
              <!-- <div class="col-md-12">
               <div class="col-md-3" align="center">-->
               <label style="color:white;">From Date:</label><!--</div><div class="col-md-3" align="center">--><input type="date" name="fdate" id="fdate" value="<?php echo $fdate; ?>" class="form-control" style="width:20%"><!--</div> 
                <div class="col-md-3" align="center">--><label style="color:white;">To Date:</label><!--</div><div class="col-md-3" align="center">--><input type="date" name="tdate" id="tdate" value="<?php echo $tdate; ?>" class="form-control" style="width:20%"><!--</div></div>-->
                <input type="submit" name="sub" id="sub" value="Search" style="color:#000000;">
            </form>
<table width="70%" border="4" class="table border-table" align="center">
  <tr>
    <th rowspan="2" scope="col">S.no</th>
    <th rowspan="2" scope="col">Sdate</th>
    <th rowspan="2" scope="col">Institute</th>
    <th rowspan="2" scope="col">City</th>
    <th colspan="3" scope="col">Transport</th>
    <th colspan="3" scope="col">Other Charges</th>
    <th rowspan="2" scope="col">Total Charges</th>
    <th rowspan="2" scope="col">Bills</th>
  </tr>
  <tr>
    <th scope="col">No of Kms</th>
    <th scope="col">Local Transport</th>
    <th scope="col">Intercity Transport</th>
    <th scope="col">Food</th>
    <th scope="col">Room</th>
    <th scope="col">Postage</th>
  </tr>
   <?php 
        $i=1;
        while ($row=mysqli_fetch_array($sql)) {
		
		$sql1= executework("select * from skillistic_institute where id ='". $row['institute_id']."'");
		$row1=mysqli_fetch_array($sql1);
		$sql2= executework("select * from skillistic_masterdata where id ='". $row['city']."'");
		$row2= mysqli_fetch_array($sql2);
					
            ?>
   <tr>
            <td><?php echo $i; ?></td>
            <td><?php
             if($row['sdate']=="0000-00-00" || $row['sdate']=="1970-01-01")
                {
                echo "00-00-0000";
            }
            else{ echo date("d/m/Y",strtotime($row['sdate'])); }; ?>
            </td>
            
          
                    
            <td><?php echo $row1['inst_name']; ?></td>
            <td><?php echo $row2['master_value']; ?></td>
            <td><?php echo $row['no_kms']; ?></td>
            <td><?php echo $row['local_transport']; ?></td>
            <td><?php echo $row['intercity_transport']; ?></td>
            <td><?php echo $row['food']; ?></td>
            <td><?php echo $row['room']; ?></td>
            <td><?php echo $row['postage']; ?></td>
            <td><?php echo $row['total']; ?></td>
            <?php
              $yy="expenses/".$row['filename'];
              ?>
            <td> <input type="button" name="file" value="View" onclick="return openfile('<?php echo $yy; ?>')" style="color:#000000;"/> </tr>
            <?php
            $i++;
         } ?>

</table>
</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <!--<div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>-->
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

<?php 
include "footer.php";
?>