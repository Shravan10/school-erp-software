<html>

       <head>
	          <title>Add Notice Board</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_noticeboard.php">View Notice</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Notice Board</th>
		 
		 </tr>
		 
		 <tr>
		      <td>Title</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Notice</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Date</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		   <tr>
		     <td>Send Sms to All</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null"> Send SMS</option>
					   <option value="male">Yes</option>
					    <option value="female">No</option>
			
			</select>
			</td>
		 
		  
		 </tr>
		 
		
		<tr>
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="Add Notice"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>