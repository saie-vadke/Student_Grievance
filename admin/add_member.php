<?php
include ("admin_header.php");
include("../database.php");

if (isset($_REQUEST['btn_submit']))

{
	$check_user=executeQuery("SELECT * FROM member_list WHERE mem_user='".$_REQUEST['mem_user']."'");
	
	if(@mysql_num_rows($check_user)>0)
	{
		echo "Member allready exits";
	}
	
	else
	{
	
	
			$insertq="INSERT INTO member_list VALUES('','".$_REQUEST['mem_name']."','".$_REQUEST['mem_mobile']."', '".$_REQUEST['mem_desg']."','".$_REQUEST['mem_email']."','".$_REQUEST['mem_user']."','".$_REQUEST['mem_pass']."')";
		
		if(!executeQuery($insertq))
		{
			echo "Query Not Execute Error".@mysql_error();
		}
		
		else
		{
		 	header("Location:member_view_old.php");
		}
	}

}


?>













<div class="col-8 offset-1">
<h2> Add Member </h2>
   
                            <form action="add_member.php" method="post" class="form-control">
                            	<label> Name: </label>
                                <input type="text" name="mem_name" required="required" class="form-control" />
                                <label> Mobile No: </label>
                                <input type="text" name="mem_mobile" required="required" class="form-control" />
                                  <label> Designation </label>
                                <input type="text" name="mem_desg" required="required" class="form-control" />
                                
                                <label> Email-ID </label>
                                <input type="email" name="mem_email" required="required" class="form-control" />
                                
                                 <label> User ID </label>
                                <input type="text" name="mem_user" required="required" class="form-control" />
                                
                                 <label> Password</label>
                                <input type="text" name="mem_pass" required="required" class="form-control" />
                                <br />
                                <input type="submit" value="Submit" name="btn_submit" class="btn btn-primary" />
                                
                            </form>
                                                                  
                                 
              </div>
              </div>
              </html>                      
                               
                            <!-- /.table-responsive -->
                            