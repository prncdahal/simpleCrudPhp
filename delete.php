<?php 

include('config.php');


$id=$_GET['id'];

$query="DELETE FROM users where id=$id";
$run_query=mysql_query($query);
if($run_query){
  header('location:index.php');
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	
<div class="container">
	


<h1>Success</h1>

</div>



</body>
</html>

<?php 
mysql_close();
?>