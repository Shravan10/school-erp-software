<html>

       <head>
	          <title>Add Exam</title>    
	    
	   </head>
     
	 <body>
	     <a href="add_exam.php">Exam List</a><br><br>
		 <a href="exam_grade.php">Exam Grade</a><br><br>
		 <a href="manage_marks.php">Manage Marks</a><br><br>
		 <a href="marks_sms.php">Send Marks by SmS</a><br><br>
		 <a href="dashboard.php">Back to Dashboard</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Exam List</th>
		 
		 </tr>
		 <tr>
		      <td>Name</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Grade Point</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Marks From</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Marks Upto</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Comments</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 
		 
		 
		
		<tr>
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="add grade"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>