<?php
include ("mem_header.php");
include("../database.php");

if (isset($_REQUEST['btn_update']))

{
	executeQuery("update member_list set mem_name='".$_REQUEST['mem_name']."' , mem_mobile='".$_REQUEST['mem_mobile']."', mem_desg='".$_REQUEST['mem_desg']."', mem_email='".$_REQUEST['mem_email']."', mem_pass='".$_REQUEST['mem_pass']."' WHERE mem_user='".$_SESSION['member']."'") ;
	
	$global['message']= "Update successfully";
	

}


?>













<div class="col-8 offset-1">
<h2> Update Member </h2>
   <h5 style="color:#0482FF;"> 
<?php
if (isset($global['message']))
{
	echo $global['message'];
}
?>
</h5>
                            <form action="update_member.php" method="post" class="form-control">
                            
                             <?php
	  $res1=executeQuery("SELECT * FROM member_list WHERE mem_user='".$_SESSION['member']."'");
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
                                <input type="submit" value="Update" name="btn_update" class="form-control btn btn-primary" />
                                
                            </form>
                                                                  
                                 
              </div>
              </div>
              </html>                      
                               
                            <!-- /.table-responsive -->
                            