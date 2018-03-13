<html>

<head>

     <title>view parents</title>
</head>

<body>
	  <center><font color="red" size='6'><?php echo @$_GET['deleted'];            ?></font></center>
	  <center><font color="red" size='6'><?php echo @$_GET['Updated'];            ?></font></center>
	  <a href="add_parents.php">Insert a Data</a><br><br>
	  <a href="dashboard.php">Back to Dashbord</a><br><br>
	  <a href="logout.php">logout</a><br><br>
	       <table align="center" width="1000" border="4">
		   
		   
		   
		      <tr>
			      <td colspan="20" align="center" bgcolor="yellow">
				  <h1 align="center">View all the  Parents Record</h1>
				  
				  </td>
			  
			  </tr>
		   <tr>
		       <th>S.No.</th>
		      <th> Name</th>
			  
			  
			  <th>Email</th>
			  <th>Password</th>
			
			  <th>Phone</th>
			  <th>Address</th>
			  <th>Profession</th>
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

 $que="select * from parents";
 $run=mysql_query($que);
 while($row=mysql_fetch_array($run))
	 
 
 {
	$id=$row[0]; 
	$name=$row[1]; 
	$email=$row[2]; 
	$password=$row[3]; 
	$phone=$row[4]; 
	$address=$row[5]; 
	 $profession=$row[6]
	 
	 
	 
 
 
 ?>
		   
		   <td align="center"><?php echo $id;?></td>
		   <td align="center"><?php echo $name;?></td>
		    <td align="center"><?php echo $email;?></td>
		    <td align="center"><?php echo $password;?></td>
		    <td align="center"><?php echo $phone;?></td>
			 <td align="center"><?php echo $address;?></td>
			  <td align="center"><?php echo $profession;?></td>
			 
			  
			  
		   
		   
		   <td align="center"><a href='delete_parents.php?del=<?php echo $id;?>'> Delete</a></td>
		   
		   
		   <td align="center"><a href='edit_parents.php?edit=<?php echo $id;  ?>'>Edit</a></td>
		   
		   <td align="center">Details</td>
		   
		   
		   
		   
		   </tr>
 <?php  }  ?>
		   
		   
		   
		   </table>
	  
	  
	  </body>
 
 
 </html>
 

</html>