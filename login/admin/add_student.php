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
	          <title>add student</title>    
	    
	   </head>
     
	 <body>
	
	    <h3 align="center">Admission Form</h3><br><br>
		<a href="dashboard.php">Back to Dashbord</a><br><br>
		<a href="view_student.php">View Students</a>
		<form method="post" action="">
		 <center>
		Name:<input type="text"  name="name" >
		
		<font color="red"><?php   echo @$_GET['name'];?></font>
		
		<br><br>
		Parent:<input type="text"   name="parent" >
			<font color="red"><?php   echo @$_GET['parent'];?></font><br><br>
		Branch<input type="text"  name="branch" >	<font color="red"><?php   echo @$_GET['branch'];?></font><br><br>
		Section:<input type="text"  name="section" >	<font color="red"><?php   echo @$_GET['section'];?></font><br><br>
		Roll No:<input type="text" name="rollno" >	<font color="red"><?php   echo @$_GET['roll '];?></font><br><br>
		Birtday:<input type="text" name="birthday"  >	<font color="red"><?php   echo @$_GET['birthday'];?></font><br><br>
		Gender:<input type="text" name="gender" >	<font color="red"><?php   echo @$_GET['gender'];?></font><br><br>
		Address:<input type="text"  name="address" >	<font color="red"><?php   echo @$_GET['address'];?></font><br><br>
		Phone:<input type="text" name="phone" >	<font color="red"><?php   echo @$_GET['Phone'];?></font><br><br>
		Email:<input type="text"  name="email" >	<font color="red"><?php   echo @$_GET['email'];?></font><br><br>
		Password:<input type="password" name="password" >	<font color="red"><?php   echo @$_GET['password'];?></font><br><br>
		Dormirty:<input type="text"  name="dormirty" >	<font color="red"><?php   echo @$_GET['dormirty'];?></font><br><br>
		Transport route:<input type="text"  name="route" >	<font color="red"><?php   echo @$_GET['route'];?></font><br><br>
		
        <input type="submit" name="submit" value="Submit">		
		
	  </center>
	 </form>
	 
	 </body>
	 
	 
</html>
<?php
if(isset($_POST['submit']))
{
	 
 $S_Name=$_POST['name'];
 $S_Parent=$_POST['parent'];
 $S_Branch=$_POST['branch'];
 $S_Section=$_POST['section'];
 $S_Roll=$_POST['rollno'];
 $S_Birthday=$_POST['birthday'];
 $S_Gender=$_POST['gender'];
 $S_Address=$_POST['address'];
 $S_Phone=$_POST['phone'];
 $S_Email=$_POST['email'];
 $S_Password=$_POST['password'];
 $S_Dormirty=$_POST['dormirty'];
 $S_Route=$_POST['route'];

 
 if( $S_Name==''){
	 
	 
	 echo"<script>window.open('add_student.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Parent==''){
	 
	 
	 echo"<script>window.open('add_student.php?parent= Parent Name is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Branch==''){
	 
	 
	 echo"<script>window.open('add_student.php?branch= Branch Name is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Section==''){
	 
	 
	 echo"<script>window.open('add_student.php?Section= Section Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Roll==''){
	 
	 
	 echo"<script>window.open('add_student.php?S_roll=Roll no is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Birthday==''){
	 
	 
	 echo"<script>window.open('add_student.php?birthday =birthday date is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Gender==''){
	 
	 
	 echo"<script>window.open('add_student.php?gender=Gender is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Address==''){
	 
	 
	 echo"<script>window.open('add_student.php?Address= Address Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Phone==''){
	 
	 
	 echo"<script>window.open('add_student.php?phone=Phone No is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Email==''){
	 
	 
	 echo"<script>window.open('add_student.php?Email= Email  is required','_self')</script>";
	 exit();
	 
 }
 if($S_Password==''){
	 
	 
	 echo"<script>window.open('add_student.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Dormirty==''){
	 
	 
	 echo"<script>window.open('add_student.php?Dormirty=Dormirty is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Route==''){
	 
	 
	 echo"<script>window.open('add_student.php?route=route is required','_self')</script>";
	 exit();
	 
 }
 

$sel_user="insert into student_info( name, parent, branch, section, rollno, birthday, gender, address, phone, email, password, dormirty, route) 
values ('$S_Name','$S_Parent',' $S_Branch','$S_Section','$S_Roll','$S_Birthday','$S_Gender','$S_Address','$S_Phone','$S_Email','$S_Password',' $S_Dormirty',' $S_Route')";

$res=mysql_query($sel_user);
echo"data insert into database";


}


?>
