<html>

<head>

     <title>view section</title>
</head>

<body>
	  <center><font color="red" size='6'><?php echo @$_GET['deleted'];            ?></font></center>
	  <center><font color="red" size='6'><?php echo @$_GET['Updated'];            ?></font></center>
	  <a href="add_section.php">Insert a Data</a><br><br>
	  <a href="dashboard.php">Back to Dashbord</a><br><br>
	  <a href="logout.php">logout</a><br><br>
	       <table align="center" width="1000" border="4">
		   
		   
		   
		      <tr>
			      <td colspan="20" align="center" bgcolor="yellow">
				  <h1 align="center">View all the Section Record</h1>
				  
				  </td>
			  
			  </tr>
		   <tr>
		       <th>S.No.</th>
			   
		      <th> Section Name</th>
			  <th>Nick Name</th>
			  <th> Class</th>
			  <th>Teacher</th>
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

 $que="select * from section";
 $run=mysql_query($que);
 while($row=mysql_fetch_array($run))
	 
 
 {
	$id=$row[0]; 
	$name=$row[1]; 
	$nick_name=$row[2]; 
	$class_id=$row[3]; 
	$teacher_id=$row[4];
	
	 
 
 
 ?>
		   
		   <td align="center"><?php echo $id;?></td>
		   <td align="center"><?php echo $name;?></td>
		   
		   <td align="center"><?php echo $nick_name?></td>
		   <td align="center"><?php echo $class_id;?></td>
		   <td align="center"><?php   echo $teacher_id; ?></td>
		    
		   
		   <td align="center"><a href='delete_section.php?del=<?php echo $id;?>'> Delete</a></td>
		   
		   
		   <td align="center"><a href='edit_class.php?edit=<?php echo $id;  ?>'>Edit</a></td>
		   
		   <td align="center">Details</td>
		   
		   
		   
		   
		   </tr>
 <?php  }  ?>
		   
		   
		   
		   </table>
	  
	  
	  </body>
 
 
 </html>
 

</html>