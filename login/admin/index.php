<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");





?>

<html>

<head>
<title>New user</title>

</head>
<body>
       <h1>New User Regisistration </h1>
     <form method="post" action="">
	      Name:<input type="text" id="name" value=""><br><br> 
		  Email:<input type="email" id="email" value=""><br><br>
		  password:<input type="password" id="password" value=""><br><br>
		  country:<select name="country">
		  <option>India</option>
		  <option>Pakishthan</option>
		  <option>Sri Lanka</option>
		  <option>Nepal</option>
		  <option>Bhutan</option>
		  </select><br><br>
		 City <input type="text" id="city" value=""><br><br>
		 Phone No<input type="text" id="phone" value=""><br><br>
		 Address<input type="text" id="" value=""><br><br>
		 <button>Submit</button>
		 
		 <a href="userlogin.php">login</a>
		  
		  
	 
	 </form>
</body>
</html>