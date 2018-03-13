<?php

session_start();

session_destroy();
if($_SESSION["username"]==true)
{
$_SESSION["username"];
}
else
{
header('location:admin.php');

}
?>