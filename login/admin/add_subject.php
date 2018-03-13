<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 $que1="select id,name from teacher";
 
 $run1=mysql_query($que1);
 $que2="select id,name from class";
 $run2=mysql_query($que2);
 
 

  

 ?>


<html>

       <head>
	          <title>Add Subject</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_subject.php">View Subject</a><br><br>
		 
	     <form action="" method="post" enctype="multipart/form-data">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Subject</th>
		 
		 </tr>
		 <tr>
		      <td>Subject Name</td>
			  <td><input type="text" name='name' ><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 
		 <tr>
		     <td>Class</td>
			 <td>
		    <select name="class">
			
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
		     <td>Teacher</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null">Select teacher</option>
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
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="submit"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>

<?php

if(isset($_POST['submit']))
{
	  $Name=$_POST['name'];
      $Class=$_POST['class'];
      $Teacher=$_POST['teacher'];
      
  
	
	if( $Name==''){
	 
	 
	 echo"<script>window.open('add_subject.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 
 if(  $Class==''){
	 
	 
	 echo"<script>window.open('add_subject.php?class= class  is required','_self')</script>";
	 exit();
	 
 }
 if($Teacher==''){
	 
	 
	 echo"<script>window.open('add_subject.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 
 

$sel_user="insert into subject( name,class_id,teacher_id) 
values ('$Name','$Class','$Teacher')";

$res=mysql_query($sel_user);
echo"data insert into database";


}


?>