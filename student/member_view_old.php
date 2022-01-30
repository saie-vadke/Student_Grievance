<?php
include ("stud_header.php");
include("../database.php");

?>


<div class="col-8"> 
<h1> Member List</h1>
       <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Name </th>
                                         <th>Designation </th>
                                       
                                        <th>Email ID </th>
                                         <th>Mobile Number </th>
                                       
                                       
                                       
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
                                      
                                        
                                         
                              </tr>
                                    <?php
							   }
							   ?>
                                    </table>
                                   
                                                                  
                 </div>
                 </div>
                 </html>                   
                                    
                               
                            <!-- /.table-responsive -->
                            