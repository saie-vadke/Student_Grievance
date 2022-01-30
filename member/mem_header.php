<?php
session_start();

if(!isset($_SESSION['member']))
{
	header("Location:../index.php");
}


if (isset($_REQUEST['btn_logout']))
{
	unset($_SESSION['member']);
	header("Location:../index.php");
}
?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Grievance redressal System</title>

<link rel="stylesheet" href="../css/bootstrap.css" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-grid.css" />
<link rel="stylesheet" href="../css/bootstrap-grid.min.css" />
<link rel="stylesheet" href=""/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../style.css" />
</head>

<body>

<div style="height:100px; width:100%; background:#3E9EFF; color:#FFF; padding-top:15px;">
<center> <H1> GRIEVANCE REDRESSAL SYSTEM </H1> </center> <br />
</div>

<div class="container">
<div class=" row left_menu" >
    <div class="col-3 border" style="background:#F4F4F4;"> 
    <img src="../e.jpg" width="90%" />
   <center>  <h3>
   <?php
   echo $_SESSION['member'];
   ?>
    </h3> 
    
    
    
    </center>
  
    <ul> 
    <li> <a href="dashboard.php">  Dashboard </a></li>
    <li> <a href="update_member.php">  Edit Profile </a></li>
    <li> <a href="mem_view_grievance.php"> View Grievance </a></li>
    
     <li> <a href="member_view_old.php"> View Members </a></li>
     <li> 
     
     <form action="dashboard.php" method="post">
     <input type="submit" value="Log Out" name="btn_logout" class="btn btn-danger"> 
     </form>
      </li>
    
    </ul>
   
    	
    </div>