<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 
 $que2="select id,name from class";
 $run2=mysql_query($que2);
 
 

  

 ?>





<html>

       <head>
	          <title>Add Attendance</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_attendance.php">View Attendance</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Attendance</th>
		 
		 </tr>
		 <tr>
		      <td>Select Date</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 
		 <tr>
		     <td>Class</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null">Select Class</option>
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
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="Manage Attendance"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>