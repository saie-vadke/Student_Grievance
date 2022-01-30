
<?php
include ("stud_header.php");
include("../database.php");

if(isset($_REQUEST['btn_submit']))
{
	$g_date=date("d/m/Y");
	$store="INSERT INTO post_grievance VALUES('','".$_REQUEST['gr_type']."','".$_REQUEST['gr_subject']."', '".$_REQUEST['gr_details']."','".$_SESSION['user']."','Pending','".$g_date."','')";
	
	if(!executeQuery($store))
	{
		echo "Error while executing Query".@mysql_error();
	}
	else
	$_GLOBAL['message']= "Grievance Post Successfully";
	
}



?>

<div class="col-9"> 
          <h2 ALIGN="CENTER">Post grievance</h3></h2>
          
          <h3>
          <?php
		  if (isset($_GLOBAL['message']))
		  {
			  echo $_GLOBAL['message'];
		  }
		  
		  ?>


 </h3>

<form role="form" action="" method="post">
                                   
                                                                             
                                        
                                        	<div class="form-group">
                                                <label>Grievance Type</label>
                                                
                                                
                                                
                                                
                                               
                                                
                                                <select class="form-control" name="gr_type"  >
                                               
                                                   <?php
												$grievance=executeQuery("SELECT * from grr_type");
												 while($g1=@mysql_fetch_array($grievance))
												 {
													?>                                         
                                                <option value="<?php echo $g1['g_id'];?>" > <?php echo $g1['gr_type'];?> </option>
                                           
                                           			<?php
												 }
													?>
                                                                                               
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input class="form-control" type="text" name="gr_subject" required>
                                           
                                           
                                        </div>
                                       
                                        <div class="form-group">
                                            <label>Grievance Details</label>
                                            <textarea class="form-control" rows="3" name="gr_details" required></textarea>
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-default" name="btn_submit">Submit</button>
                                       </div>
                                       </div>
                                       </body>
                                       </html>