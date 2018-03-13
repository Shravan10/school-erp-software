


<?php


session_start();
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");
 
 
 if(isset($_POST['username'])){
	 $username=$_POST['username'];
	 $password=$_POST['password'];
	 $sql="select * from admin where username='".$username."' and password='".$password."'  " ;
	 $res = mysql_query($sql);
	 if(mysql_num_rows($res)>0){


	 	$_SESSION["username"]=$username;
		 
		 echo"<script>window.open('dashboard.php','_self')</script>";
		 
		 
	 }
	 else{
		 
		 echo "<script>alert('wrong password');</script>";
	 }
	 
	 
 }

?>




<html>
<head>

<title>Admin Login</title>
</head>

<body>

<h1 align="center">Admin Page</h1>
<form action="" method="post">
   
       Username:<input type="text" id="username" name="username" ><br><br>
	   Password:<input type="password" id="password	" name="password"><br><br>
	   <input type="submit" name="submit"> <a href="">Forget Password</a><br><br>
	   <a href="newuser.php">New User</a>
	   
	   
	   
	   
	   
	   


</form>



</body>



</html>
