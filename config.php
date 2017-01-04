<?php 
$host="localhost";
$username="root";
$password="";
$db='crud';
$con=mysql_connect($host,$username,$password);

if(!$con){
 echo "Error in connection";
}

$selectdb=mysql_select_db($db,$con);
if(!$selectdb){
	echo "Error  while selecting database";
}


?>