<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");


$edit_record=$_GET['edit'];
$query="select * from teacher where id='$edit_record' ";
$run=mysql_query($query);
{
	
	while($row=mysql_fetch_array($run))
	{
		$id=$row[0];
		$name=$row[1];
		$birthday=$row[2];
		$gender=$row[3];
		$address=$row[4];
		$phone=$row[5];
		$email=$row[6];
		$password=$row[7];
		$confirm_password=$row[8];
		
		$photo=$row[9];
		
		
		
	}
	
}

?>


<html>
<head>


   <title>Teacher</title>



</head>

<body>
      <a href="dashboard.php">Back to Dashboard</a><br><br>
	  <a href="view_teacher.php">View Teacher</a>
	  <form method="post" action="edit_teacher.php?edit_form=<?php  echo $id;  ?>" enctype="multipart/form-data">
     <table width="500" border='3' align="center">
	     <tr>
		     
		        <th bgcolor="yellow" align="center" colspan="5">Edit Teacher</th>
				
				
				
		 
		 </tr>
		 <tr>
		    <td>Name</td>
		    <td><input type="text" name="name" value='<?php echo $name;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Birthday</td>
		    <td><input type="text" name="birthday" value='<?php echo $birthday;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Gender</td>
			 <td>
		    <select name="gender">
			          <option  value='<?php  echo $gender; ?>'> <?php  echo $gender; ?></option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Address</td>
		    <td><input type="text" name="address" value='<?php echo $address;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Phone</td>
		    <td><input type="text" name="phone" value='<?php echo $phone;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Email</td>
		    <td><input type="text" name="email" value='<?php echo $email;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Password</td>
		    <td><input type="text" name="password" value='<?php echo $password;?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td> Confirm Password</td>
		    <td><input type="text" name="confirm_password" value='<?php echo $confirm_password;?>'></td>
		 
		 
		 
		 </tr>
		 <form method="post" enctype="multipart/form-data"><tr>
		    <td>Photo</td>
		    <td><input type="file" name="teacherimage" value='<?php echo $photo;?>'>
		
			
			
			</form>
			
			
			</td>
		 
		 
		 
		 </tr>
	 <tr>
	 <td align="center" colspan="6">
	 <input type="submit" name="submit" value="Submit">
	 
	 </td>
	 
	 
	 
	 </tr>
	 
	 
	 
	 </table>
</form>

</body>

</html>


<?php
if(isset($_POST['submit']))
{
	 $edit_record1=$_GET['edit_form']; 
  $S_Name=$_POST['name'];
  
 
 
 $S_Birthday=$_POST['birthday'];
 $S_Gender=$_POST['gender'];
 $S_Address=$_POST['address'];
 $S_Phone=$_POST['phone'];
  $S_Email=$_POST['email'];
  $S_Password=$_POST['password'];
 $C_password=$_POST['confirm_password'];
  $photo=$_POST['photo'];

 $query1="update teacher set name='$S_Name',birthday=' $S_Birthday',gender='$S_Gender',address='$S_Address',phone=' $S_Phone',email=' $S_Email',password=' $S_Password',confirm_password='$C_password',photo='$photo' where id='$edit_record1'";
 if(mysql_query( $query1)){
	 echo"<script>window.open('view_teacher.php?Updated=Record has been updated','_self')</script>";
	 
 }
 
}
 ?>