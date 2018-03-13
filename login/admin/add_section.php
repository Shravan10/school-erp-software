<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 $que="select id,name from teacher";
 
 $run1=mysql_query($que);

  

 ?>









<html>

       <head>
	          <title>Add Section</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_class.php">View section</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Section</th>
		 
		 </tr>
		 <tr>
		      <td>Section Name</td>
			  <td><input type="text" name='s_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		 <td>Nick Name</td>
		 <td><input type="text" name="nic_name"></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Class</td>
			 <td>
		    <select name="class">
			               <?php    $que="select id,name from class";
 
                                  $run2=mysql_query($que);                     
								  ?>
			
			
			          <option value="null">Select Class</option>
					  <?php while($row=mysql_fetch_array($run2))
					{
						$id=$row[0]; 
						$name=$row[1];?>
					  	  
					   <option value="'<?php echo $id; ?>'"><?php echo $name;?></option>
					 <?php }?>

					    
			
			</select>
			</td>
		 
		 
		 </tr>
		 
		  <tr>
		     <td>Teacher</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null">Select teacher</option>
					  <?php while($row=mysql_fetch_array($run1))
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
	 
 
 
 
 
   $S_Name=$_POST['s_name'];
   $N_Name=$_POST['nic_name'];
    $Class=$_POST['class'];
	$Teacher=$_POST['teacher'];
  
   
  if( $S_Name==''){
	 
	 
	 echo"<script>window.open('add_section.php?name= Class Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $N_Name==''){
	 
	 
	 echo"<script>window.open('add_section.php?numeric =C_Numeric date is required','_self')</script>";
	 exit();
	 
 }
 if(  $Class==''){
	 
	 
	 echo"<script>window.open('add_section.php?teacher=teacher is required','_self')</script>";
	 exit();
	 
 }
  if( $Teacher ==''){
	 
	 
	 echo"<script>window.open('add_section.php?teacher=teacher is required','_self')</script>";
	 exit();
	 
 }
 
$sel_user="insert into section(name,nick_name,class_id,teacher_id ) 
values ('$S_Name','$N_Name',$Class,$Teacher)";

$res=mysql_query($sel_user);
echo"data insert into database";

}


?>
