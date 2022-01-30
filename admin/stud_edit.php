
<?php
include ("stud_header.php");
?>
    
     <div class="col-9"> 
          <h2 ALIGN="CENTER">Edit <br><h3>Student Details</h3></h2>

<form action="#" method="post" class="form-control">
      
        <label for="name">Name:</label>        
		<input class="form-control" name="name" type="text" placeholder=" Enter your Name:"/>
       
<label for="course year">Course:</label>
<input class="form-control"  id="course" maxlength="50" name="course" type="text"placeholder="Enter your Course:"/>
<label  for="branch">Branch:</label>
<input class="form-control" id="branch" maxlength="50" name="branch" type="text" placeholder="Enter your Branch:"/>
<label for="roll_no">Roll_No:</label>
<input class="form-control" id="roll_no" maxlength="50" name="roll_no" type="text"placeholder="Enter your Roll No:"/>
<label for="email">Email_Address:</label>
<input class="form-control" id="email" maxlength="50" name="email" type="text"placeholder="Enter your Email:"/>
<label for="username">User_Name:</label>
<input class="form-control" id="username" maxlength="50" name="usrename" type="text"placeholder="Enter your UserName:"/>
<label for="password">Password:</label>
<input  class="form-control" id="password" maxlength="50" name="password" type="password"placeholder="Enter your password:"/> <br>
    <input type="submit" class="form-control btnn btn-primary" value="Save"  name="btn_submit" />

</form>

</div>
           
           
   		
    </div>
    
 </div>
</div>


</body>


</html>