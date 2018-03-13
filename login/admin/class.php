<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 $que="select id,name from teacher";
 $run=mysql_query($que);
  

 ?>

<html>

       <head>
	          <title>Add Class</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_class.php">View Class</a><br><br>
		 <a href="add_section.php">Add Section</a><br><br>
		 <a href="view_section.php">View Section</a>
	     <form action="class.php" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Class</th>
		 
		 </tr>
		 <tr>
		      <td>Class Name</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		 <td>Class Numeric Value</td>
		 <td><input type="text" name="c_value"><?php   echo @$_GET['numeric'];?></td>
		 
		 
		 
		 </tr>
		  <tr>
		     <td>Teacher</td>
			 <td>
		    <select name="teacher">
			<option value="null">Select teacher</option>
			<?php while($row=mysql_fetch_array($run))
					{
						$id=$row[0]; 
						$name=$row[1];?>
			          
					   <option value="'<?php echo $id; ?>'"><?php echo $name;?></option>
					   
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
	 
 
 
 
 
   $S_Name=$_POST['c_name'];
  
   $numeric=$_POST['c_value'];
$teacher=$_POST['teacher'];
  if( $S_Name==''){
	 
	 
	 echo"<script>window.open('add_class.php?name= Class Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $numeric==''){
	 
	 
	 echo"<script>window.open('add_class.php?numeric =C_Numeric date is required','_self')</script>";
	 exit();
	 
 }
 if( $teacher==''){
	 
	 
	 echo"<script>window.open('add_class.php?teacher=teacher is required','_self')</script>";
	 exit();
	 
 }
 
$sel_user="insert into class(name,name_numeric,	teacher_id ) 
values ('$S_Name','$numeric',$teacher)";

$res=mysql_query($sel_user);
echo"data insert into database";

}


?>