<?php
require 'connection.php';
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql="select * from admin where username='$user' and password='$pass'";
$result=$con->query($sql);
$count=$result->num_rows;
if($count>0){
	echo 1;
}
else{
	echo 2;
}
?>