<?php
  $mysql_host="localhost";
  $mysql_username="root";
  $mysql_password="";
  $mysql_db="login";
 
 $bd=mysql_connect($mysql_host,$mysql_username,$mysql_password)or die("Could not connect database");
 mysql_select_db($mysql_db,$bd) or die("could not connect database");

 $que1="select id,name from parents";
 
 $run1=mysql_query($que1);
 $que2="select id,name from class";
 $run2=mysql_query($que2);
 $que3="select id,name from section";
 $run3=mysql_query($que3);
 

  

 ?>







<html>
<head>


   <title>Add Students</title>



</head>

<body>
      <a href="dashboard.php">Back to Dashboard</a><br><br>
	  <a href="view_stu.php">View Students</a><br><br>
	  
	  <form method="post" action="students.php" enctype="multipart/form-data">
        <table width="500" border='3' align="center">
	     <tr>
		     
		        <th bgcolor="yellow" align="center" colspan="5">Add Students</th>
				
				
				
		 
		 </tr>
		 <tr>
		    <td>Name</td>
		    <td><input type="text" name="name"><?php   echo @$_GET['name'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Parents</td>
			 <td>
		    <select name="parents">
			          <option value="null">Select Parents</option>
					  <?php while($row=mysql_fetch_array($run1))
					{
						$id=$row[0]; 
						$name=$row[1];?>
					   <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					   	 <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		     <td>Class</td>
			 <td>
		    <select name="class">
			          <option value="null">Select Class</option>
					  <?php while($row=mysql_fetch_array($run2))
					  {
						  $id=$row[0];
						  $name=$row[1];?>
						  
					  <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					  <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		  <tr>
		     <td>Section</td>
			 <td>
		    <select name="section">
			          <option value="null">Select Section</option>
					  <?php while($row=mysql_fetch_array($run3))
					  {
						  $id=$row[0];
						  $name=$row[1];?>
					   <option value="<?php echo $id; ?>"><?php echo $name;?></option>
					    <?php }?>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Roll No</td>
		    <td><input type="text" name="rollno"><?php   echo @$_GET['birthday'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Birthday</td>
		    <td><input type="text" name="birthday"><?php   echo @$_GET['birthday'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		     <td>Gender</td>
			 <td>
		    <select name="gender">
			          <option value="null">Select Gender</option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 <tr>
		    <td>Address</td>
		    <td><input type="text" name="address"><?php   echo @$_GET['address'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Phone</td>
		    <td><input type="text" name="phone"><?php   echo @$_GET['phone'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Email</td>
		    <td><input type="text" name="email"><?php   echo @$_GET['email'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Password</td>
		    <td><input type="text" name="password"><?php   echo @$_GET['password'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td> Confirm Password</td>
		    <td><input type="text" name="confirm_password"><?php echo @$_GET['confirm_password'];?></td>
		 
		 
		 
		 </tr>
		 <tr>
		    <td>Photo</td>
			
			
		    <td><input type="file" name="studentimage"/>
		
			
	
			
			
			</td>
		 
		 
		 
		 </tr>
	 <tr>
	 <td align="center" colspan="6">
	 <input type="submit" name="submit" value="submit">
	 
	 </td>
	 
	 
	 
	 </tr>
	 
	
	 
	 </table>
 </form>

</body>

</html>

<?php
if(isset($_POST['submit']))
{
	 
  $S_Name=$_POST['name'];
  $S_Parent=$_POST['parents'];
 $S_Class=$_POST['class'];
 $S_Section=$_POST['section'];
 $S_Roll=$_POST['rollno'];
 $S_Birthday=$_POST['birthday'];
 $S_Gender=$_POST['gender'];
 $S_Address=$_POST['address'];
 $S_Phone=$_POST['phone'];
 $S_Email=$_POST['email'];
 $S_Password=$_POST['password'];
 $Confirm_Pass=$_POST['confirm_password'];
  $studentimage=$_FILES["studentimage"]["name"];
 

 if(isset($_POST['submit'])){
  
 

  
  $dir="studentimage/$studentimage";
	
	move_uploaded_file($_FILES["studentimage"]["tmp_name"],"studentimage/$studentimage/".$_FILES["studentimage"]["name"]);
 

 

  }
 
 if( $S_Name==''){
	 
	 
	 echo"<script>window.open('students.php?name=Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Parent==''){
	 
	 
	 echo"<script>window.open('students.php?parent= Parent Name is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Class==''){
	 
	 
	 echo"<script>window.open('students.php?branch= Branch Name is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Section==''){
	 
	 
	 echo"<script>window.open('students.php?Section= Section Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Roll==''){
	 
	 
	 echo"<script>window.open('students.php?S_roll=Roll no is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Birthday==''){
	 
	 
	 echo"<script>window.open('students.php?birthday =birthday date is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Gender==''){
	 
	 
	 echo"<script>window.open('students.php?gender=Gender is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Address==''){
	 
	 
	 echo"<script>window.open('students.php?Address= Address Name is required','_self')</script>";
	 exit();
	 
 }
 if( $S_Phone==''){
	 
	 
	 echo"<script>window.open('students.php?phone=Phone No is required','_self')</script>";
	 exit();
	 
 }
 if(  $S_Email==''){
	 
	 
	 echo"<script>window.open('students.php?Email= Email  is required','_self')</script>";
	 exit();
	 
 }
 if($S_Password==''){
	 
	 
	 echo"<script>window.open('students.php?password=password is required','_self')</script>";
	 exit();
	 
 }
 if( $Confirm_Pass==''){
	 
	 
	 echo"<script>window.open('students.php?Dormirty=Dormirty is required','_self')</script>";
	 exit();
	 
 }

 
 

$sel_user="insert into student_info( name, parent, class, section, rollno, birthday, gender, address, phone, email, password, Confirm_pass,photo) 
values ('$S_Name','$S_Parent','$S_Class','$S_Section','$S_Roll','$S_Birthday','$S_Gender','$S_Address','$S_Phone','$S_Email','$S_Password','$Confirm_Pass','$studentimage')";

$res=mysql_query($sel_user);
echo "data insert into database";


}


?>


