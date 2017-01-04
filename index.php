<?php 

include('config.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<h1>Homepage</h1>
		<div class="text-right">
           <a href="add.php" class="btn btn-primary">Add users</a>
		</div>
     <table class="table table-condensed"> 
		<thead>
        <tr>
          <th>S.N</th>
          <th>Name</th>
          <th>Address</th>
          <th>Email Address</th>
        </tr>

		</thead>
		<tbody>
			<tr>
	    <?php 
	    $query=mysql_query("SELECT * FROM users ORDER BY id DESC");
		while ($row=mysql_fetch_array($query)) {
			echo "<tr>";
			echo  "<td>".$row['id']."</td>";
			echo  "<td>".$row['Name']."</td>";
			echo  "<td>".$row['address']."</td>";
			echo  "<td>".$row['email']."</td>";
			echo "<td><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";
		}		
		?>
			</tr>

		</tbody>
  	</table>
  	<?php 
  	    $query=mysql_query("SELECT * FROM users ORDER BY id DESC");
		$row1=mysql_fetch_array($query);
		if (empty($row1[0])) {
			echo "<h4>Oops! No Users</h4>";
		}
  	?>
	</div>




</body>
</html>

<?php 
mysql_close();
?>