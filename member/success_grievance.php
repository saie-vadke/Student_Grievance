
<?php
include ("mem_header.php");
include("../database.php");
?>
<div class="col-9">
<h2> Success Grievance </h2>






<form action="mem_full_grievance.php" method="post"> 

<table class="table offset-1 border table-bordered">
                <tr> 
                	<th> Sr NO </th>
                    <th> Name </th>
                    <th> Complaint ID </th>
                    <th> Grievance type </th>
                    <th>Grievance Subject </th>
                    <th>Status </th>
                    <th>View </th>
                </tr> 
                
                
                <?php
				 $fetch=executeQuery("SELECT * FROM post_grievance where status='Success' ORDER BY gr_id DESC");
				 $sr_no=0;
				 while($f1=@mysql_fetch_array($fetch))
				 {
					 $sr_no=$sr_no+1;
				
               echo "<tr>";
              	 echo "<td>".$sr_no."</td>";
				  echo "<td>".$f1['std_user']."</td>";
				
                 echo "<td>".$f1['gr_id']."</td>";
				 
				 $gtype=executeQuery("SELECT * FROM grr_type where g_id='".$f1['gr_type']."'");
				 $gt=@mysql_fetch_array($gtype);
				 
                 echo "<td>".$gt['gr_type']."</td>";
                 echo "<td>".$f1['gr_subject']."</td>";
                 echo "<td>".$f1['status']."</td>";
				 ?>
				 <td>
                 <button name="btn_submit" value="<?php echo $f1['gr_id'];?>"> View </button>
                  </td>
                 
                 <?php echo "</tr>";
                    
				 }
					?>
             
                 
                </table>
                </form>
                
                <h5> <a href="dashboard.php"> Back.... </a> </h5>
   </div>
   </div>                                 
                                            
</body>
</html>
