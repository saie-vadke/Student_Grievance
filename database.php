<?php

$servername="localhost";
$username="root";
$password="";
$database="grievance";
$conn=false;
function executeQuery($query)
{
	global $servername,$username,$password,$database, $result;
	$conn=@mysql_connect($servername,$username,$password) or die("Could not connect to server...");
	
	@mysql_select_db($database,$conn) or die ("could not found database");
	
	$result=@mysql_query($query);
	
		if(!$result)
			{
				echo " error while executing Query".@mysql_error();
			}
		else
			{
			 return $result;
			}
}


?>