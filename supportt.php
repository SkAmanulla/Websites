<?php
include_once("header.php");
if(!empty($_POST['submit']))
{
	//echo "hii";
	//exit();
	$insert=support_insert();
}
//$masters=get_support();
if(!empty($_GET['eid']))
{
	$edit=get_supp_vals($_GET['eid']);
}
if(!empty($_GET['did']))
{
	$del_faculty=delete_support($_GET['did']);
}
if(!empty($_GET['dis_id']))
{
	$dis_faculty=disable_support($_GET['dis_id']);
}
if(!empty($_GET['ena_id']))
{
	$enable_faculty=enable_support($_GET['ena_id']);
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
<script type="text/javascript" src="jscript/genfunctions.js"></script>
<script type="text/javascript">
function play(did)
{
window.open(did,'_blank');
}
function delete_sup(did)
{
	if(confirm("Are You Sure To Delete Record?"))
	{
		window.location.href="support.php?did="+did;
		return false;
	}
	else
	{
		return true;
	}
}
function disable_sup(dis_id)
{
	if(confirm("Are You Sure To Disable Record?"))
	{
		window.location.href="support.php?dis_id="+dis_id;
		return false;
	}
	else
	{
		return true;
	}
}

function enable_sup(ena_id)
{
	if(confirm("Are You Sure To Enable Record?"))
	{
		window.location.href="support.php?ena_id="+ena_id;
		return false;
	}
	else
	{
		return true;
	}
}

function modify(eid)
{
	if(confirm("Are You Sure To Update Record?"))
	{
		window.location.href="support.php?eid="+eid;
		return false;
	}
	else
	{
		return true;
	}
}

</script>
        <!-- Basic Form Start -->
        <div class="basic-form-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="height:500px; width:70%;" align="center">
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
                                  
 <?php 
$sel1=executework("select * from skillistic_support where status='1' order by id desc");
$count=@mysqli_num_rows($sel1);
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
	$sel=executework("select * from skillistic_support where status='1' order by id desc LIMIT $pagenow1, $max_recs_per_page");
	if($count>0)
	{
?>
                                                <table class="table border-table" bordercolor="#FFFFFF" style="color:white; width:50%;" align="center">
                                        <thead>
                                            <tr>
                                                <th>#</th>
												<th>Title</th>
                                                <th>File</th>
                                                <th></th>
                                              
												
                                                <!--<th></th>-->
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php
											//for($s=0;$s<count($masters);$s++)
											$s=1;
											while($row=@mysqli_fetch_array($sel))
											{
										?>
                                            <tr>
                                                <td><?php echo $s; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td>view</td>
                                                <?php
												
												$yy="imagesnew/".$row['filename'];
												?>
												<td><input type="button" style="cursor:pointer" value="play" onClick="return play('<?php echo $yy ?>');" class="btn btn-primary"></td>
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
			$prv='support.php?page_index='.($page12-1);
		}
		if($page12 == $pages)
		{
			$nx="class=disabled";
			$nxt='#';
		}
		else
		{
			$nx='';
			$nxt='support.php?page_index='.($page12+1);
		}
?>
<div class="pull-right pagination">
     <ul class="pagination">
          <li <?php echo $pr; ?>  class="page-pre"><a href="<?php echo $prv; ?>">Prev</a></li>
<?php
	  for($im=1;$im<=$pages;$im++)
	  {
		  if($page12 == $im)
			$ac="class=active";
		  else
			$ac='';
?>
               <li <?php echo $ac; ?>  class="page-number <?php if(!empty($_GET['page_index'])&&($_GET['page_index']==$ac)){echo "active"; }?>"> <a href="support.php?page_index=<?php echo $im ?>"><?php echo $im; ?></a> </li>
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
		   
		   
		   else
		   {
		   ?>
           
		   	<div align="center" style="color:#FF0000">No Data Found</div>
	<?php		}
		   ?> 
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
	
        <!-- Basic Form End-->
        <?php
		include_once("footer.php");
		?>