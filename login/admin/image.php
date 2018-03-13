<form action ="" method="post" enctype="multipart/form-data">
<input type="file" name="teacherimage" value=""><br><br>
<input type="submit" name="submit" value="submit">
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_host,$mysql_user,$mysql_password)or die("Could not connect database");
mysql_select_db($mysql_db,$bd)or die("Could not connect database");


if(isset($_POST['submit'])){
	
	
	$teacherimage=$_FILES["teacherimage"]["name"];
	$dir="teacherimage/$teacherimage";
	mkdir($dir);
	
	move_uploaded_file($_FILES["teacherimage"]["tmp_name"],"teacherimage/$teacherimage/".$_FILES["teacherimage"]["name"]);
	$sql=mysql_query("insert into teacher(photo) values('$teacherimage')");
	
	
	

}



?>