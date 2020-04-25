<?php

include_once("header.php");

$masters=get_ppt_new();
print_r($masters);
echo "count".count($masters);
if(!empty($_GET['eid']))
{
	$edit=get_ppt_vals($_GET['id']);
}
if(!empty($_GET['did']))
{
	$delete_ppt=delete_ppt($_GET['did']);
}



?>
<style>
.col-lg-12 {
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 70%;
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
function play(did)
{
window.open(did,'_blank');
}
function delete_ppt(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="repppt.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_ppt(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="repppt.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_ppt(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="repppt.php?ena_id="+ena_id;
		return false;
	}
	else
	{
		return true;
	}
}

function modify(eid)
{
	if(confirm("Are You Sure To Modify This Record?"))
	{
		window.location.href="ppt_mgmt.php?eid="+eid;
		return false;
	}
	else
	{
		return true;
	}
}
</script>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="center">
                        <div class="sparkline10-list mt-b-30">
                            <div class="sparkline10-hd" style="margin-top:60px">
                                <!--<div class="main-sparkline10-hd">
                                    <h1>Border Table</h1>
                                </div>-->
                                <br />
                                <br />
                                <br />
                                
								<h3 style="color:#FFFFFF">PPT Report</h3>
                            <div class="sparkline10-graph" style="margin-top:50px;">
                                <div class="static-table-list">
                               
								<?php
								
								
								////$sel=executework("select * from skillistic_resource where status='1' order by id desc");
                               // $count=@mysqli_num_rows($se1); 
								if(count($masters)>0)
									{
								?>
                                    <table class="table border-table" bordercolor="#FFFFFF" style="color:white;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Programme Title</th>
                                                <th>Topic</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											
											//while($row=@mysqli_fetch_array($masters))
											for($s=0;$s<count($masters);$s++)
											{
										?>
                                            <tr>
                                                <td><?php echo $s+1; ?></td>
                                                <td><?php echo $masters[$s]['title']['prgrm_title']; ?></td>
                                                <td>view</td>
                                                <td>
                                                <?php
												
												$yy="imagesnew/".$masters[$s]['ppt'];
												?>
												<input type="button" style="cursor:pointer" value="play" onClick="return play('<?php echo $yy ?>');" class="btn btn-primary">
												</td>

                                         
                                            </tr>
                                            
                                       <?php } ?>     
                                        </tbody>
                                    </table>
								<?php } 
								else{
								?>	
								<div align="center" style="color:#FF0000">No Data Found</div>
								<?php } ?>
                                </div>
                            </div>
							
                        </div>
                    </div>