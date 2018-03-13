<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");




?>


<html>

       <head>
	          <title>Add New Parents</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_parents.php">View Parents</a>
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Parents</th>
		 
		 </tr>
		 <tr>
		      <td>Parents Name</td>
			  <td><input type="text" name='name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		 <td>Email</td>
		 <td><input type="text" name="email"><?php   echo @$_GET['email'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		 <td>Password</td>
		 <td><input type="password" name="password"><?php   echo @$_GET['password'];?></td>
		 
		 
		 </tr>
		 <tr>
		 
		    <td>Phone</td>
			<td><input type="text" name="phone"><?php   echo @$_GET['phone'];?></td>
		 
		 </tr>
	    <tr>
		     <td>Address</td>
			 <td><input type="text" name="address"></td>
		 
		</tr>
		<tr>
		     <td>Profession</td>
			 <td><input type="text" name="profession"><?php   echo @$_GET['profession'];?></td>
		
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
      $Email=$_POST['email'];
      $Password=$_POST['password'];
      $Phone=$_POST['phone'];
      $Address=$_POST['address'];
     $profession=$_POST['profession'];
  
	
	if( $Name==''){
	 
	 
	 echo"<script>window.open('add_parents.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 
 if(  $Email==''){
	 
	 
	 echo"<script>window.open('add_parents.php?email= Email  is required','_self')</script>";
	 exit();
	 
 }
 if($Password==''){
	 
	 
	 echo"<script>window.open('add_parents.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 
 if( $Phone==''){
	 
	 
	 echo"<script>window.open('add_parents.php?phone=Phone No is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $Address==''){
	 
	 
	 echo"<script>window.open('add_parents.php?address= Address Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if($profession==''){
	 
	 echo"<script>window.open('add_parents.php?profession=profession is required','_self')</script>";
	 
 }
	




$sel_user="insert into parents( name,email,password,phone,address,profession) 
values ('$Name','$Email','$Password','$Phone','$Address','$profession')";

$res=mysql_query($sel_user);
echo"data insert into database";


}


?>





