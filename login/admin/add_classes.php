<?php
 $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

  $C_Name=$_POST['c_name'];
  
  $C_numeric=$_POST['c_value'];
  $S_teacher=$_POST['teacher'];
  /*if( $C_Name==''){
	 
	 
	 echo"<script>window.open('add_class.php?name= Class Name is required','_self')</script>";
	 exit();
	 
 }
 
 
 if( $C_numeric==''){
	 
	 
	 echo"<script>window.open('add_class.php?numeric =C_Numeric date is required','_self')</script>";
	 exit();
	 
 }
 if( $S_teacher==''){
	 
	 
	 echo"<script>window.open('add_class.php?teacher=teacher is required','_self')</script>";
	 exit();
	 
 }
 
*/
$sel_user="INSERT INTO `login`.`class` (`name`, `name_numeric`, `teacher_id`) VALUES ('".$C_Name."', '".$C_numeric."', '".$S_teacher."')";
//$res=mysql_query($sel_user);
echo mysql_query($sel_user); 

echo "data insert into database";



?>
