<?php
include("database.php");



if (isset($_REQUEST['btn_submit']))

{
	$check_user=executeQuery("SELECT * FROM std_registration WHERE std_username='".$_REQUEST['std_username']."'");
	
	if(@mysql_num_rows($check_user)>0)
	{
		echo "Username allready exits";
	}
	
	else
	{
	
	
			$insertq="INSERT INTO std_registration VALUES(NULL,'".$_REQUEST['std_name']."','".$_REQUEST['std_course']."', '".$_REQUEST['std_year']."','".$_REQUEST['std_roll_no']."','".$_REQUEST['std_email']."','".$_REQUEST['std_username']."','".$_REQUEST['std_pass']."','".$_REQUEST['std_mobile']."')";
		
		if(!executeQuery($insertq))
		{
			echo "Query Not Execute Error".@mysql_error();
		}
		
		else
		{
			echo "Registration Successfully";
		}
	}

}




?>
