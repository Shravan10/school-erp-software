<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");


$edit_record=$_GET['edit'];
$query="select * from student_info where id='$edit_record' ";
$run=mysql_query($query);
{
	
	while($row=mysql_fetch_array($run))
	{
		$id=$row[0];
		$name=$row[1];
		$parent=$row[2];
		$class=$row[3];
		$section=$row[4];
		$rollno=$row[5];
		$birthday=$row[6];
		$gender=$row[7];
		$address=$row[8];
		$phone=$row[9];
		$email=$row[10];
		$password=$row[11];
		$Confirm_pass=$row[12];
		$photo=$row[13];
		
		
		
	}
	
}

?>

<html>
<head>


   <title>Add Students</title>



</head>

<body>
      <a href="dashboard.php">Back to Dashboard</a><br><br>
	  <a href="view_stu.php">View Students</a><br><br>
	  
	  <form method="post" action="edit_stu.php?edit_form=<?php  echo $id;  ?>" enctype="multipart/form-data">
        <table width="500" border='3' align="center">
	     <tr>
		     
		        <th bgcolor="yellow" align="center" colspan="5">Edit Students</th>
				
				
				
		 
		 </tr>
		 <tr>
		    <td>Name</td>
		    <td><input type="text" name="name" value='<?php  echo $name; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Parents</td>
			 <td>
		    <select name="parent">
			          <option value='<?php  echo $parent; ?>'> <?php  echo $parent; ?></option>
					  <?php while($row=mysql_fetch_array($run1))
					{
						$id=$row[0]; 
						$name=$row[1];?>
					   <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					   	 <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		     <td>Class</td>
			 <td>
		    <select name="class">
			          <option value='<?php  echo $class; ?>'> <?php  echo $class; ?></option>
					  <?php while($row=mysql_fetch_array($run2))
					  {
						  $id=$row[0];
						  $name=$row[1];?>
						  
					  <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					  <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		  <tr>
		     <td>Section</td>
			 <td>
		    <select name="section">
			          <option value='<?php  echo $section; ?>'> <?php  echo $section; ?></option>
					  <?php while($row=mysql_fetch_array($run3))
					  {
						  $id=$row[0];
						  $name=$row[1];?>
					   <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					    <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Roll No</td>
		    <td><input type="text" name="rollno" value='<?php  echo $rollno; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Birthday</td>
		    <td><input type="text" name="birthday" value='<?php  echo $birthday; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Gender</td>
			 <td>
		    <select name="gender">
			          <option value='<?php  echo $gender; ?>'> <?php  echo $gender; ?></option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Address</td>
		    <td><input type="text" name="address" value='<?php  echo $address; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Phone</td>
		    <td><input type="text" name="phone" value='<?php  echo $phone; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Email</td>
		    <td><input type="text" name="email" value='<?php  echo $email; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Password</td>
		    <td><input type="text" name="password" value='<?php  echo $password; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td> Confirm Password</td>
		    <td><input type="text" name="confirm_password" value='<?php  echo $Confirm_pass; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Photo</td>
			
			
		    <td><input type="file" name="studentimage" value='<?php  echo $photo; ?>'>
		
			
	
			
			
			</td>
		 
		 
		 
		 </tr>
	 <tr>
	 <td align="center" colspan="6">
	 <input type="submit" name="submit" value="submit">
	 
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
  $S_Parent=$_POST['parents'];
  $S_Class=$_POST['class'];
  $S_Section=$_POST['section'];
  $S_Roll=$_POST['rollno'];
 $S_Birthday=$_POST['birthday'];
 $S_Gender=$_POST['gender'];
 $S_Address=$_POST['address'];
 $S_Phone=$_POST['phone'];
  $S_Email=$_POST['email'];
  $S_Password=$_POST['password'];
 $Confirm_pass=$_POST['confirm_password'];
  $Photo=$_POST['photo'];

 $query1="update student_info set name='$S_Name',parent=' $S_Parent',class='$S_Class',section='$S_Section',rollno=' $S_Roll',birthday=' $S_Birthday',gender='$S_Gender',address='$S_Address',phone=' $S_Phone',email=' $S_Email',password=' $S_Password',Confirm_pass='$Confirm_pass',photo='$Photo' where id='$edit_record1'";
 if(mysql_query( $query1)){
	 echo"<script>window.open('view_stu.php?Updated=Record has been updated','_self')</script>";
	 
 }
 
}
 ?>