<?php
require 'connection.php';
session_start();

$email=$_POST['eml'];


$pass=$_POST['pass'];

$sql="select * from user_registration where email='$email'and password='$pass'";
$result=$con->query($sql);
$count=$result->num_rows;

if($count>0){
	$row=$result->fetch_assoc();
	$_SESSION['user']=$row['user_id'];
	echo 1;
}
else{
	echo 0;
}
?>