<?php
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 
 if(isset($_POST['submit'])){
	 
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 
	 $sel_user="SELECT * from users where email='".$email."' and password='".$password."'";
	 
	 $res=mysql_query($sel_user);
	 if(mysql_num_rows($res)>0)
	 {
		 $SESSION['email'];
		 echo "<script>window.open('welcome.php','_self')</script>";
		 
	 }
	 else{
		 
		 echo"<script>alert('email Password is wrong')</script>";
	 }
	 
	 
	 
	 
	 
	 
 }

?>



<html>

    <head>
	
	<title>User Login</title>
	
	
	</head>
	<body>
	<h1>User Login</h1>
	<form method="post">
	
	Username:<input type="text"  name="email" id="email" value="email"><br><br>
	Password:<input type="password" name="password" id="password" value="password"><br><br>
	<input type="submit" name="submit" value="submit">
	
	<a href="">Forget password</a><br><br>
	
	<a href="newuser.php">New User</a>
	
	</form>
	
	</body>


</html>