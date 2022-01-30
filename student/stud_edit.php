
<?php
include ("stud_header.php");
include("../database.php");

if (isset($_REQUEST['btn_update']))
{
	executeQuery("update std_registration set std_name='".$_REQUEST['std_name']."', std_course='".$_REQUEST['std_course']."', std_year='".$_REQUEST['std_year']."', std_roll_no='".$_REQUEST['std_roll_no']."', std_email='".$_REQUEST['std_email']."',std_pass='".$_REQUEST['std_pass']."', std_mobile='".$_REQUEST['std_mobile']."' WHERE std_username='".$_SESSION['user']."'") ;
	
	$global['message']= "Update successfully";
}

?>
    
     <div class="col-9"> 
          <h2 ALIGN="CENTER">Edit <br><h3>Student Details</h3></h2>
<h5 style="color:#0482FF;"> 
<?php
if (isset($global['message']))
{
	echo $global['message'];
}
?>
</h5>
<form action="#" method="post" class="form-control">
      
      
      <?php
	  $res=executeQuery("SELECT * FROM std_registration WHERE std_username='".$_SESSION['user']."'");
	  $r=@mysql_fetch_array($res);
	  ?>
              
        
         <label for="id">Name:</label>    
		<input class="form-control" name="std_name" value="<?php echo $r['std_name']; ?>" type="text" placeholder="Please Enter your Name:" required="required"/>
       
<label for="course year">Course:</label>
<select required name="std_course" class="form-control"  >
 <option value="<?php echo $r['std_course']; ?>"> <?php echo $r['std_course']; ?></option>
  <option value="Computer"> Computer Engg </option>
   <option value="mechanical"> Mechanical Engg </option>
    <option value="civil"> Civil Engg </option>
     <option value="E&TC"> E&TC Engg </option>
      <option value="Electrical"> Electrical Engg </option>
       <option value="Automobile"> Automobile Engg. </option>
       <option value="Information Technology"> Information Technology </option>
</select>


<label  for="std_year">Year:</label>
<select required name="std_year" class="form-control" >
 <option value="<?php echo $r['std_year']; ?>"> <?php echo $r['std_year']; ?></option>
  <option value="FY"> FY </option>
   <option value="SY"> SY </option>
    <option value="TY"> TY </option>
     
</select>

<label for="roll_no">Roll_No:</label>
<input class="form-control" id="std_roll_no" maxlength="50" name="std_roll_no" value="<?php echo $r['std_roll_no']; ?>"  type="text" required="required"/>

<label for="email">Mobile:</label>
<input class="form-control" id="mobile" maxlength="50" name="std_mobile" value="<?php echo $r['std_mobile']; ?>" type="text" required="required"/>

<label for="email">Email_Address:</label>
<input class="form-control" id="email" maxlength="50" name="std_email" value="<?php echo $r['std_email']; ?>" type="email" required="required"/>


<label for="password">Password:</label>
<input  class="form-control" id="password" maxlength="50" name="std_pass" value="<?php echo $r['std_pass']; ?>" type="password" required="required"/> <br>

    <input type="submit" class="form-control btnn btn-primary" value="Sumbit"  name="btn_update" />

</form>


</div>
           
           
   		
    </div>
    
 </div>
</div>


</body>


</html>