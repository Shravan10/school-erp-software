<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");


$edit_record=$_GET['edit'];
$query="select * from class where id='$edit_record' ";
$run=mysql_query($query);
{
	
	while($row=mysql_fetch_array($run))
	{
		$id=$row[0];
		$name=$row[1];
		$name_numeric=$row[2];
		$teacher_id=$row[3];
		
		
		
		
	}
	
}

?>




<html>

       <head>
	          <title>Update Class</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		
		 <a href="add_section.php">Add Section</a>
	       <form method="post" action="edit_class.php?edit_form=<?php  echo $id;  ?>" enctype="multipart/form-data">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Edit Class</th>
		 
		 </tr>
		 <tr>
		      <td>Class Name</td>
			  <td><input type="text" name='c_name' value='<?php  echo $name; ?>'></td>
		 
		 
		 </tr>
		 <tr>
		 <td>Class Numeric Value</td>
		 <td><input type="text" name="c_value" value='<?php  echo $name_numeric; ?>'></td>
		 
		 
		 
		 </tr>
		  <tr>
		     <td>Teacher</td>
			 <td>
		    <select name="teacher">
			<option value='<?php  echo $teacher_id; ?>'><?php  echo $teacher_id; ?></option>
			<?php while($row=mysql_fetch_array($run))
					{
						$id=$row[0]; 
						$name=$row[1];?>
			          
					   <option value="'<?php echo $id; ?>'"></option>
					   
					<?php }?>
			</select>
			</td>
		 
		 
		 </tr>
		 
		
		<tr>
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="submit"></td>
		
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
     $S_Numeric=$_POST['name_numeric'];
     $S_Teacher=$_POST['teacher_id'];
     

   $query1="update class set name='$S_Name',name_numeric=' $S_Numeric',teacher_id='$S_Teacher where id='$edit_record1'";
 if(mysql_query( $query1)){
	 echo"<script>window.open('view_class.php?Updated=Record has been updated','_self')</script>";
	 
 }
 
}
 ?>
