<?php
require 'connection.php';
$eml=$_POST['eml'];
$pass=$_POST['pass'];

$sql="update  `user_registration` set password='$pass' where email='$eml'";
$result=$con->query($sql);
if(!$result){
	//header("location:login.php?status=s");
	echo 0;
}
else{
	//header("location:forgot_password.php?status=failed");
	echo 1;
}


?>