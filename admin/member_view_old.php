<?php
include ("admin_header.php");
include("../database.php");
?>













<div class="col-8 offset-1">
<h2> Grievance Member </h2>

 <h5 style="color:#0482FF;"> 
<?php
if (isset($global['message']))
{
	echo $global['message'];
}
?>
</h5>
<form action="update_member.php" method="post">
     <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name </th>
                                         <th>Designation </th>
                                       
                                        <th>Email ID </th>
                                         <th>Mobile Number </th>
                                          <th>Update </th>
                                       
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                               
                               <?php
							   $mem=executeQuery("SELECT * FROM member_list");
							   $sr_no=0;
							   while($m=@mysql_fetch_array($mem))
							   					   
							   {
								   $sr_no=$sr_no+1;
							   ?>
                              <tr> 
                              			 <td><?php echo $sr_no; ?> </td>
                                        <td><?php echo $m['mem_name']; ?></td>
                                        <td><?php echo $m['mem_desg']; ?> </td>
                                         <td><?php echo $m['mem_email']; ?> </td>
                                         <td><?php echo $m['mem_mobile']; ?> </td>
                                      	<td><button type="submit" value="<?php echo $m['mem_user']; ?>" name="btn_update">Update </button>  </td>
                                        
                                         
                              </tr>
                                    <?php
							   }
							   ?>
                               </tbody>
                                    </table>
                                   
                         </form>                                       
                                 <p> 
                                 <h3> <a href="add_member.php"> Add Member </a> </h3>
              </div>
              </div>
              </html>                      
                               
                            <!-- /.table-responsive -->
                            