<?php
include ("stud_header.php");
include("../database.php");
?>
<div class="col-9">
<h2> View Grievance </h2>

<?php


 $fetch=executeQuery("SELECT * FROM post_grievance where gr_id='".$_POST['btn_submit']."'");
 $f=@mysql_fetch_array($fetch);
?>
<table class="table offset-1 border table-bordered">
               
               <tr>
                   <td width="20%">Complaint ID </td>
                   <td> <?php echo $f['gr_id']; ?> </td>
               </tr>
               <tr>
                   <td>Grievance type </td>
                   <?php
                   $gtype=executeQuery("SELECT * FROM grr_type where g_id='".$f['gr_type']."'");
				 $gt=@mysql_fetch_array($gtype);
				 ?>
                   <td> <?php echo $gt['gr_type']; ?></td>
               </tr>
               <tr>
                   <td> Grievance Subject</td>
                   <td><?php echo $f['gr_subject']; ?> </td>
               </tr>
               <tr>
                   <td>Status </td>
                   <td> <?php echo $f['status']; ?></td>
               </tr>
               <tr>
                   <td>Details </td>
                   <td><?php echo $f['gr_details']; ?> </td>
               </tr>
                <tr>
                   <td>Member Response </td>
                   <td><?php echo $f['gr_mem_details']; ?> </td>
               </tr>
               </table>
               
               
               
               
             
   </div>
   </div>                                 
                                            
</body>
</html>