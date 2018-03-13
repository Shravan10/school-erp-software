<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");

$edit_record=$_GET['edit'];
$query="select * from parents where id='$edit_record' ";
$run=mysql_query($query);
{
	
	while($row=mysql_fetch_array($run))
	{
		$id=$row[0];
		$name=$row[1];
		$email=$row[2];
		$password=$row[3];
		$phone=$row[4];
	    $address=$row[5];
		$profession=$row[6];
		
		
		
		
		
		
		
	}
	
}



?>

<html>

       <head>
	          <title>Update Parents</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_parents.php">View Parents</a>
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Update Parents</th>
		 
		 </tr>
		 <tr>
		      <td>Parents Name</td>
			  <td><input type="text" name='name' value='<?php  echo $name; ?>'></td>
		 
		 
		 </tr>
		 <tr>
		 <td>Email</td>
		 <td><input type="text" name="email" value='<?php  echo $email; ?>'></td>
		 
		 
		 
		 </tr>
		 <tr>
		 <td>Password</td>
		 <td><input type="password" name="password" value='<?php  echo $password; ?>'></td>
		 
		 
		 </tr>
		 <tr>
		 
		    <td>Phone</td>
			<td><input type="text" name="phone" value='<?php  echo $phone; ?>'></td>
		 
		 </tr>
	    <tr>
		     <td>Address</td>
			 <td><input type="text" name="address" value='<?php  echo $address; ?>'></td>
		 
		</tr>
		<tr>
		     <td>Profession</td>
			 <td><input type="text" name="profession" value='<?php  echo $profession; ?>'></td>
		
		</tr>
		<tr>
		  <td align="center" colspan="6">
		  <input align="center" type="submit" name="submit" value="submit"></td>
		
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
 
  $S_Email=$_POST['email'];
   $S_Password=$_POST['password'];
   $S_Phone=$_POST['phone'];
 $S_Address=$_POST['address'];
 $Profession=$_POST['profession'];

 $query1="update parents set name='$S_Name',email='$S_Email',password='$S_Password',phone=' $S_Phone',address='$S_Address',profession=' $Profession' where id='$edit_record1'";
 if(mysql_query( $query1)){
	 echo"<script>window.open('view_parents.php?Updated=Record has been updated','_self')</script>";
	 
 }
 
}
 ?>