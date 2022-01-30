ession_start();
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
