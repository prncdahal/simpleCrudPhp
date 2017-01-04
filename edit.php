<?php 

include('config.php');



/*if (empty($id)) {
  header("location:index.php");
}*/
// Updating database
if(isset($_POST['update'])){
  $hid=$_POST['hid'];  // get the hidden id value on post request
  
  $up_name=$_POST['name'];
  $up_address=$_POST['address'];
  $up_email=$_POST['email'];
  

  $update_query="UPDATE users set Name='$up_name',address='$up_address',email='$up_email' WHERE id=$hid";
  $run_update_query=mysql_query($update_query);
  if($run_update_query){
    echo "Successfully updated";
  }
  else{
    echo "Error while updating";
  }

   


}

$id=$_GET['id'];
if (empty($id)) {
  header("location:index.php");
}


$query="SELECT * FROM users where id=$id";
$run_query=mysql_query($query);

while($row=mysql_fetch_array($run_query)){
  $name=$row['Name'];
  $address=$row['address'];
  $email=$row['email'];
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
	<h1>Update user</h1>

<div class="row">
<div class="col-md-6">
<form name="userform" method="post" action="edit.php">
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input name="address" type="text" value="<?php echo $address; ?>" class="form-control" id="Address" placeholder="Address">
  </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="text" value="<?php echo $email; ?>" class="form-control" id="email" placeholder="Email Address">
  </div>

<input type="hidden" name="hid" value="<?php echo $id; ?>">
  <input type="submit" name="update" value="submit" class="btn btn-default">
</form>
</div>
</div>


</div>



</body>
</html>

<?php 
mysql_close();
?>