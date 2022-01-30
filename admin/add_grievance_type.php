<?php
include ("admin_header.php");
include("../database.php");


if(isset($_POST['btn_delete']))
	{
		
		executeQuery("DELETE FROM grr_type where g_id='".$_POST['btn_delete']."'");
	}
	
	
if (isset($_REQUEST['btn_add']))

{
		if($_REQUEST['gr_add_typ']=='')
		{
			
		}
		else
		{
			executeQuery("INSERT INTO grr_type VALUES('','".$_REQUEST['gr_add_typ']."')");
		}
}	
	
?>













<div class="col-8 offset-1">
<h2> Grievance Type </h2>

 <h5 style="color:#0482FF;"> 
<?php
if (isset($global['message']))
{
	echo $global['message'];
}
?>
</h5>

 
<form action="add_grievance_type.php" method="post">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Grievance Type </th>
                                        <th>Delete </th>
                                        
                                       
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                               
                               <?php
							   $grtype=executeQuery("SELECT * FROM grr_type");
							   $sr_no=0;
							   while($g=@mysql_fetch_array($grtype))
							   					   
							   {
								   $sr_no=$sr_no+1;
							   ?>
                              <tr> 
                              			 <td><?php echo $sr_no; ?> </td>
                                        <td><?php echo $g['gr_type']; ?></td>
                                        
                                      	<td><button class="btn btn-danger" type="submit" value="<?php echo $g['g_id']; ?>" name="btn_delete">Delete </button>  </td>
                                        
                                         
                              </tr>
                                    <?php
							   }
							   ?>
                               
                               
                               <tr> 
                              			 <td><?php echo $sr_no+1; ?> </td>
                                        <td><input type="text" class="form-control" name="gr_add_typ" />
                                       </td>
                                        
                                      	<td><button class="btn btn-primary" type="submit" name="btn_add">Add </button>  </td>
                                        
                                         
                              </tr>
                              
                               </tbody>
                                    </table>
                                   
                         </form>                                       
                                 <p> 
                              
              </div>
              </div>
              </html>                      
                               
                            <!-- /.table-responsive -->
                            