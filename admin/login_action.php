<?php
require '../connection.php';
$username=$_REQUEST['email'];
$password=$_REQUEST['pass'];
$sql="select * from authority where username='$username' and password='$password'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	echo 'success';
}
else{
	echo 'failed';
}
?>