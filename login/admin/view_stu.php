<html>

<head>

      <title>view students</title>
</head>

<body>
	  <center><font color="red" size='6'><?php echo @$_GET['deleted'];            ?></font></center>
	  <center><font color="red" size='6'><?php echo @$_GET['Updated'];            ?></font></center>
	  <a href="students.php">Insert a Data</a><br><br>
	  <a href="dashboard.php">Back to Dashbord</a><br><br>
	  <a href="logout.php">logout</a><br><br>
	       <table align="center" width="1000" border="4">
		   
		   
		   
		      <tr>
			      <td colspan="20" align="center" bgcolor="yellow">
				  <h1 align="center">View all the  Students Record</h1>
				  
				  </td>
			  
			  </tr>
		   <tr>
		       <th>S.No.</th>
		      <th> Name</th>
			  <th>Roll No</th>
			  <th>Birthday</th>
			  <th>Gender</th>
			  <th>Email</th>
			  <th>Password</th>
			  <th>Confirm Password</th>
			  <th>Phone</th>
			  <th>Address</th>
			  <th>Delete</th>
			  <th>Edit</th>
               <th>Details</th>			  
		   
		   
		   
		   </tr>
		   <tr align="center">
<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 $que="select * from student_info";
 $run=mysql_query($que);
 while($row=mysql_fetch_array($run))
	 
 
 {
	$id=$row[0]; 
	$name=$row[1]; 
	 $rollno=$row[5];
	 $birthday=$row[6];
	 $gender=$row[7]; 
	$email=$row[10]; 
	
	$address=$row[4]; 
	 $password=$row[11]; 
	$confirm_password=$row[12];
	 $phone=$row[9]; 
	 $address=$row[8]; 
	 
	 
 
 
 ?>
		   
		   <td align="center"><?php echo $id;?></td>
		   <td align="center"><?php echo $name;?></td>
		   
		   <td align="center"><?php echo $rollno;?></td>
		   <td align="center"><?php echo $birthday;?></td>
		    <td align="center"><?php echo $gender;?></td>
			 <td align="center"><?php echo $email;?></td>
			 
			   <td align="center"><?php echo $password;?></td>
			   <td align="center"><?php echo $confirm_password;?></td>
			    <td align="center"><?php echo $phone;?></td>
				<td align="center"><?php echo  $address;?></td>
		   
		   
		   <td align="center"><a href='delete_stu.php?del=<?php echo $id;?>'> Delete</a></td>
		   
		   
		   <td align="center"><a href='edit_stu.php?edit=<?php echo $id;  ?>'>Edit</a></td>
		   
		   <td align="center">Details</td>
		   
		   
		   
		   
		   </tr>
 <?php  }  ?>
		   
		   
		   
		   </table>
	  
	  
	  </body>
 
 
 </html>
 

</html>