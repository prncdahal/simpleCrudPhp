<?php 

include('config.php');

/*userform queries*/

if($_POST){
  
	$name=$_POST['name'];
	$address=$_POST['address'];
	$email=$_POST['email'];


	$query = "INSERT INTO users 
        (Name, address,email)
        VALUES ('$name', '$address','$email')";


       if(mysql_query($query)){
       	header("Location: index.php");
       }    
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
	<h1>Add New User</h1>

<div class="row">
<div class="col-md-6">
<form name="userform" method="post" action="add.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input name="address" type="text" class="form-control" id="Address" placeholder="Address">
  </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
  </div>


  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
</div>


</div>



</body>
</html>

<?php 
mysql_close();
?>