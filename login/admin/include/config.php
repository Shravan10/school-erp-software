<?php

$mysql_hostname="localhost";
$mysql_user="root";
$mysql_password="";
$mysql_database="login";

$bd=mysql_connect($mysql_hostname,$mysql_user,$mysql_password,$mysql_database)or die("could not connect database");
mysql_select_db($mysql_database,$bd) or die("could not connect database");




?>