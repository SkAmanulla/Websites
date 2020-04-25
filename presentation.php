<?php 
include "header.php";
if(empty($_SESSION['faculty_id']))
redirect("login.php");
$get_ppt=get_ppt();
?>


<?php 
if(count($get_ppt)>0)
{
?>
<div class="basic-form-area mg-b-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline12-list shadow-reset">

                            <table border="1" cellpadding="5" cellspacing="5" align="center" width="75%" class="table border-table">
                             <tbody>
                            <tr>
                            <td>#</td>
                            <td>Program Title</td>
                            <td>topic</td>
                            <td>ppt</td>
							<td></td>
                            </tr>
                            <?php 
                            for($i=0;$i<count($get_ppt);$i++)
                            {
                            ?>
                            <tr>
                            <td><?php echo $i+1; ?></td>
                            <td><?php echo $get_ppt[$i]['title']['prgrm_title']?></td>
                            <td><?php echo $get_ppt[$i]['topic']?></td>
                            <td><?php echo $get_ppt[$i]['ppt']?></td>
                            <td>
                            
                            <input type="button" name="play" id="play" value="Play" onclick="window.location.href='display_ppt.php?id=<?php echo $get_ppt[$i]['ppt']?>'" class="btn" style="background-color:#30E08E" /></td>
                            </tr>
                            
                            <?php } ?>
                            </tbody>
                            </table>
                    </div>
                 </div>
             </div>
        </div>
 </div>
					
<?php } ?>
<?php 
include "footer.php";
?>