<html>
<head>


   <title>Teacher</title>



</head>

<body>
      <a href="dashboard.php">Back to Dashboard</a><br><br>
	  <a href="view_teacher.php">View Teacher</a><br><br>
	  
	  <form method="post" action="" enctype="multipart/form-data">
     <table width="500" border='3' align="center">
	     <tr>
		     
		        <th bgcolor="yellow" align="center" colspan="5">Add Teacher</th>
				
				
				
		 
		 </tr>
		 <tr>
		    <td>Name</td>
		    <td><input type="text" name="name"><?php   echo @$_GET['name'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Birthday</td>
		    <td><input type="text" name="birthday"><?php   echo @$_GET['birthday'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Gender</td>
			 <td>
		    <select name="gender">
			          <option value="null">Select Gender</option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Address</td>
		    <td><input type="text" name="address"><?php   echo @$_GET['address'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Phone</td>
		    <td><input type="text" name="phone"><?php   echo @$_GET['phone'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Email</td>
		    <td><input type="text" name="email"><?php   echo @$_GET['email'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Password</td>
		    <td><input type="text" name="password"><?php   echo @$_GET['password'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td> Confirm Password</td>
		    <td><input type="text" name="confirm_password"><?php echo @$_GET['confirm_password'];?></td>
		 
		 
		 
		 </tr>
		 <form method="post" enctype="multipart/form-data"><tr>
		    <td>Photo</td>
			
			
		    <td><input type="file" name="teacherimage"/>
		
			
			
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
	 
 
 
 
 
  $S_Name=$_POST['name'];
  $S_Birthday=$_POST['birthday'];
  $S_Gender=$_POST['gender'];
  $S_Address=$_POST['address'];
  $S_Phone=$_POST['phone'];
  $S_Email=$_POST['email'];
  $S_Password=$_POST['password'];
  $Confirm_pass=$_POST['confirm_password'];
  
  if(isset($_POST['submit'])){
  
  $teacherimage=$_FILES["teacherimage"]["name"];

  
  $dir="teacherimage/$teacherimage";
	mkdir($dir);
	move_uploaded_file($_FILES["teacherimage"]["tmp_name"],"teacherimage/$teacherimage/".$_FILES["teacherimage"]["name"]);
 

 

  }

  
 
 if( $S_Name==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $S_Birthday==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?birthday =birthday date is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Gender==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?gender=Gender is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Address==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?Address= Address Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Phone==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?phone=Phone No is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Email==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?Email= Email  is required','_self')</script>";
	 exit();
	 
 }
 if($S_Password==''){
	 
	 
	 echo"<script>window.open('add_teacher.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 if($Confirm_pass==''){
	 
	 echo"<script>window.open('add_teacher.php?Confirm=password is required','_self')</script>";
	 
 }
 if($teacherimage==''){
	 
	 echo"<script>window.open('add_teacher.php?photo=photo is required','_self')</script>";
	 
 }


$sel_user="insert into teacher( name,birthday, gender, address, phone, email, password,confirm_password,photo) 
values ('$S_Name','$S_Birthday','$S_Gender','$S_Address','$S_Phone','$S_Email','$S_Password','$Confirm_pass','$teacherimage')";

$res=mysql_query($sel_user);
echo"data insert into database";


}


?>
`	