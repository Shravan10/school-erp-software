<html>

       <head>
	          <title>Add Transport</title>    
	    
	   </head>
     
	 <body>
	     <a href="dashboard.php">Back to dashboard</a><br><br>
		 <a href="view_book.php">View Transport</a><br><br>
		 
	     <form action="" method="post">
		 <table width="500" border='3' align="center">
		 <tr>
		      <th bgcolor="yellow" colspan="5">Add Transport</th>
		 
		 </tr>
		 
		 <tr>
		      <td>Route Name</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Number Of Vehicle</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 <tr>
		      <td>Descriptions</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		  <tr>
		      <td>Route Fare</td>
			  <td><input type="text" name='c_name'><?php   echo @$_GET['name'];?></td>
		 
		 
		 </tr>
		 
		
		 
		
		<tr>
		  <td align="center" colspan="6"><input align="center" type="submit" name="submit" value="Add Transport"></td>
		
		</tr>
	 </table>
	 </form>
	 
	 </body>
	 
	 
</html>