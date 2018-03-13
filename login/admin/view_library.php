<html>

<head>

     <title>view library</title>
</head>

<body>
	  <center><font color="red" size='6'><?php echo @$_GET['deleted'];            ?></font></center>
	  <center><font color="red" size='6'><?php echo @$_GET['Updated'];            ?></font></center>
	  <a href="add_library.php">Insert a Data</a><br><br>
	  <a href="dashboard.php">Back to Dashbord</a><br><br>
	  <a href="logout.php">logout</a><br><br>
	       <table align="center" width="1000" border="4">
		   
		   
		   
		      <tr>
			      <td colspan="20" align="center" bgcolor="yellow">
				  <h1 align="center">View all the  Library Record</h1>
				  
				  </td>
			  
			  </tr>
		   <tr>
		       <th>S.No.</th>
		      <th> Name</th>
			  <th> Birthday</th>
			  <th>Gender</th>
			  <th>Address</th>
			  <th>Phone</th>
			  <th>Email</th>
			  <th>Password</th>
			  <th>Confirm_password</th>
			  <th>Photo</th>
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

 $que="select * from libraryian";
 $run=mysql_query($que);
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
	 
	 
 
 
 ?>
		   
		   <td align="center"><?php echo $id;?></td>
		   <td align="center"><?php echo $name;?></td>
		   
		   <td align="center"><?php echo $birthday;?></td>
		   <td align="center"><?php echo $gender;?></td>
		    <td align="center"><?php echo $address;?></td>
			 <td align="center"><?php echo $phone;?></td>
			  <td align="center"><?php echo $email;?></td>
			   <td align="center"><?php echo $password;?></td>
			   <td align="center"><?php echo $confirm_password;?></td>
			    <td align="center"><?php echo $photo;?></td>
		   
		   
		   <td align="center"><a href='delete_library.php?del=<?php echo $id;?>'> Delete</a></td>
		   
		   
		   <td align="center"><a href='edit_teacher.php?edit=<?php echo $id;  ?>'>Edit</a></td>
		   
		   <td align="center">Details</td>
		   
		   
		   
		   
		   </tr>
 <?php  }  ?>
		   
		   
		   
		   </table>
	  
	  
	  </body>
 
 
 </html>
 

</html>