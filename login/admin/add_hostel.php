<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");








?>



<html>
<head>


   <title>Hostel</title>



</head>

<body>
      <a href="dashboard.php">Back to Dashboard</a><br><br>
	  <a href="view_hostel.php">View Hostel</a><br><br>
	  <form method="post" action="" enctype="multipart/form-data">
     <table width="500" border='3' align="center">
	     <tr>
		     
		        <th bgcolor="yellow" align="center" colspan="5">Add Hostel Manager</th>
				
				
				
		 
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
		    <td><input type="text" name="confirm_password"><?php   echo @$_GET['confirm_password'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Photo</td>
		    <td><input type="file" name="hostelimage">
			
			
			
			
			</td>
		 
		 
		 
		 </tr>
	 <tr>
	 <td align="center" colspan="6">
	 <input type='submit' name='submit' value="Submit">
	 
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
  
   $hostelimage=$_FILES["hostelimage"]["name"];

  
  $dir="hostelimage/$hostelimage";
	mkdir($dir);
	move_uploaded_file($_FILES["hostelimage"]["tmp_name"],"hostelimage/$hostelimage/".$_FILES["hostelimage"]["name"]);

 

  }

  
 
 if( $S_Name==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $S_Birthday==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?birthday =birthday date is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Gender==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?gender=Gender is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Address==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?Address= Address Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Phone==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?phone=Phone No is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Email==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?Email= Email  is required','_self')</script>";
	 exit();
	 
 }
 if($S_Password==''){
	 
	 
	 echo"<script>window.open('add_hostel.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 if($Confirm_pass==''){
	 
	 echo"<script>window.open('add_hostel.php?Confirm=password is required','_self')</script>";
	 
 }


$sel_user="insert into hostel( name,birthday, gender, address, phone, email, password,confirm_password,photo) 
values ('$S_Name','$S_Birthday','$S_Gender','$S_Address','$S_Phone','$S_Email','$S_Password','$Confirm_pass','$hostelimage')";

$res=mysql_query($sel_user);
echo"data insert into database";


}


?>
`	
