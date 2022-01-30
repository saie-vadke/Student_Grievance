<?php
include ("admin_header.php");
include("../database.php");

if (isset($_REQUEST['btn_change']))

{
	executeQuery("update member_list set mem_name='".$_REQUEST['mem_name']."' , mem_mobile='".$_REQUEST['mem_mobile']."', mem_desg='".$_REQUEST['mem_desg']."', mem_email='".$_REQUEST['mem_email']."', mem_pass='".$_REQUEST['mem_pass']."' WHERE mem_user='".$_REQUEST['mem_user']."'") ;
	header("Location:member_view_old.php");
	$global['message']= "Update successfully";
	

}


?>













<div class="col-8 offset-1">
<h2> Update Member </h2>
  
                            <form action="update_member.php" method="post" class="form-control">
                            
                            
                            <div style="display:none">
                            <input type="text" value="<?php echo $_POST['btn_update'] ?>" name="mem_user" />
                            </div>
                            
                            
                            
                            
                             <?php
	  $res1=executeQuery("SELECT * FROM member_list WHERE mem_user='".$_POST['btn_update']."'");
	  $r1=@mysql_fetch_array($res1);
	  ?>
                            	<label> Name: </label>
                                <input type="text" name="mem_name" value="<?php echo $r1['mem_name'] ?>" required="required" class="form-control" />
                                <label> Mobile No: </label>
                                <input type="text" name="mem_mobile" value="<?php echo $r1['mem_mobile'] ?>" required="required" class="form-control" />
                                  <label> Designation </label>
                                <input type="text" name="mem_desg" value="<?php echo $r1['mem_desg'] ?>" required="required" class="form-control" />
                                
                                <label> Email-ID </label>
                                <input type="email" name="mem_email" value="<?php echo $r1['mem_email'] ?>" required="required" class="form-control" />
                                
                                
                                
                                 <label> Password</label>
                                <input type="password" name="mem_pass" value="<?php echo $r1['mem_pass'] ?>" required="required" class="form-control" />
                                <br />
                                <input type="submit" value="Update" name="btn_change" class="form-control btn btn-primary" />
                                
                            </form>
                                                                  
                                 
              </div>
              </div>
              </html>                      
                               
                            <!-- /.table-responsive -->
                            