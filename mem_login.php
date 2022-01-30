<?php

session_start();
include("database.php");
if (isset($_REQUEST['btn_submit']))
{
	
$result=executeQuery("SELECT * FROM member_list where mem_user='".$_REQUEST['mem_user']."' AND mem_pass='".$_REQUEST['mem_pass']."'");
	
	
	if(@mysql_num_rows($result)>0)
	
	{
		$_SESSION['member']=$_REQUEST['mem_user'];
		header("Location:member/dashboard.php");
	}
	
	else
	{
		echo "Wrong Username or password ";
	}
	
	
}

include("main_header.php");
?>



<div class="row">
<div class="offset-4 col-4 border">
<h2 ALIGN="CENTER">Member Login </h2>

<form action="mem_login.php" method="post" class="form-control">
      
        <label for="id">Enter User Name</label>        
        <input class="form-control" name="mem_user" type="text" placeholder="Please Enter UserName"/>
         <label for="id">Enter Password</label>    
		<input class="form-control" name="mem_pass" type="password" placeholder="Please Enter Password"/>
       
<br /> 
    <input type="submit" class="form-control btnn btn-primary" value="Login"  name="btn_submit"/>

</form>

</div>













</body>


</html>