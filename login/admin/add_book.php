<html>

       <head>
	          <title>Add Book</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_book.php">View Books</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Books</th>
		 
		 </tr>
		 
		 <tr>
		      <td>Name</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Author</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Descriptions</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Price</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 
		 <tr>
		     <td> Class</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null">Select Class</option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 
		  <tr>
		     <td>Status</td>
			 <td>
		    <select name="teacher">
			
			          <option value="null">Select teacher</option>
					   <option value="male">Male</option>
					    <option value="female">Female</option>
			
			</select>
			</td>
		 
		 
		 </tr>
		 
		 
		
		<tr>
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="Add Book"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>