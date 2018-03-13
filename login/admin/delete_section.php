<?php

$mysql_hostname="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_db="login";

$bd=mysql_connect($mysql_hostname,$mysql_username,$mysql_password)or die('could not connect database');
mysql_select_db($mysql_db,$bd)or die('Could not connect database');



$delete_record=$_GET['del'];
$query="delete from section where id='$delete_record'";
if(mysql_query($query)){
	
	
	echo"<script>window.open('view_section.php?deleted=Record has been delete succesfully ','_self')</script>";
	
	
	
}





?>